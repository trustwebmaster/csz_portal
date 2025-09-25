<?php

namespace App\Http\Controllers;

use App\Members;
use App\StudentMember;
use Illuminate\Http\Request;
use App\Repositories\MembersRepository;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MembersController extends Controller
{

    protected $members;

    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        return view('member.index');
    }

    public function profile()
    {
        $email = Auth::user()->email;
        $member = StudentMember::whereEmail($email)->first();
        return view('member.member', ['member' => $member]);
    }

    public function userProfile()
    {
        return view('member.profile');
    }

    public function membership()
    {
        return view('member.membership');
    }

    public function membershipRenewal()
    {
        return view('member.membership-renewal');
    }

    public function cpdEvents()
    {
        // In a real implementation, you would fetch events from database
        $featuredEvents = [
            [
                'title' => 'Annual ICT Conference 2024',
                'category' => 'Level 2 - Professional',
                'cpd_units' => 15,
                'date' => '2024-12-15',
                'location' => 'Harare International Conference Centre',
                'description' => 'Join industry leaders discussing emerging technologies and digital transformation.'
            ],
            [
                'title' => 'Cybersecurity Masterclass',
                'category' => 'Level 2 - Education',
                'cpd_units' => 8,
                'date' => '2024-11-20',
                'location' => 'Online Workshop',
                'description' => 'Comprehensive workshop on modern cybersecurity threats and prevention strategies.'
            ]
        ];

        return view('member.cpd-events', compact('featuredEvents'));
    }

    public function cpdPoints()
    {
        $user = Auth::user();

        // In a real implementation, fetch from database
        $cpdProgress = [
            'total_units' => 18,
            'required_units' => 20,
            'level1_units' => 3,
            'level2_professional_units' => 12,
            'level2_volunteer_units' => 3,
            'level2_education_units' => 0,
            'level3_training_hours' => 0,
            'level3_academic_units' => 0,
            'compliance_percentage' => 90
        ];

        $cpdActivities = [
            [
                'title' => 'ICT Conference Presentation',
                'subtitle' => 'Future of Digital Transformation',
                'category' => 'Level 2 - Professional',
                'date' => '2024-09-15',
                'cpd_units' => 15,
                'status' => 'Approved'
            ],
            [
                'title' => 'Online Cybersecurity Course',
                'subtitle' => 'CompTIA Security+ Fundamentals',
                'category' => 'Level 1 - Self-Directed',
                'date' => '2024-08-20',
                'cpd_units' => 3,
                'status' => 'Approved'
            ],
            [
                'title' => 'CSZ Committee Participation',
                'subtitle' => 'Technical Standards Committee',
                'category' => 'Level 2 - Volunteer',
                'date' => '2024-07-10',
                'cpd_units' => 3,
                'status' => 'Approved'
            ],
            [
                'title' => 'Cloud Computing Workshop',
                'subtitle' => 'AWS Fundamentals Workshop',
                'category' => 'Level 2 - Education',
                'date' => '2024-09-22',
                'cpd_units' => 6,
                'status' => 'Pending Review'
            ]
        ];

        return view('member.cpd-points', compact('cpdProgress', 'cpdActivities'));
    }

    public function submitCpdActivity(Request $request)
    {
        // Validate the CPD submission
        $request->validate([
            'activity_title' => 'required|string|max:255',
            'cpd_category' => 'required|string',
            'activity_date' => 'required|date',
            'duration' => 'required|string',
            'cpd_units_claimed' => 'required|integer|min:1',
            'activity_description' => 'required|string',
            'learning_outcomes' => 'required|string',
            'evidence.*.evidence_file' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:5120',
            'evidence.*.evidence_description' => 'required|string'
        ]);

        // In a real implementation, save to database and handle file uploads
        Alert::success('CPD Submission', 'Your CPD activity has been submitted for review successfully!');

        return redirect()->route('user.cpd-points');
    }

    public function editmember(Request $request)
    {

        if ($request->has('contact')) {
            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "firstname" => $request->firstname,
                    "surname" => $request->lastname,
                    "number" => $request->phone_number,
                    "email" => $request->email,
                    "address" => $request->address
                ]);
            Alert::success('Contact Information', 'Successfully Updated member details');
            return back();
        } elseif ($request->has('hobbies')) {

            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "current_year" => $request->current_year,
                    "school_name" => $request->school_name,
                    "interest_group" => $request->interest_group,
                    "notes" => $request->notes
                ]);
            Alert::success('Member Education', 'Successfully Updated member details');
            return back();
        } else {
            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "chapter" => $request->chapter,
                ]);
            Alert::success('Member Chapter', 'Successfully Updated member details');
            return back();
        }
    }

    public function create()
    {
        //add a new member

        $data = [
            'members' => $this->members->listMembers(),
            'title' => 'Add a Member',
        ];

        return view('admin.memberForm', $data);
    }

    public function store(Request $request)
    {
        //save new Member
        $member = \App\Members::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'postcode' => $request->postcode,
            'DOB' => $request->DOB,
            'phone' => $request->phone,
            'subscription' => $request->subscription
        ]);

    }

    public function show(Members $members, Request $request)
    {
        //
        $member_id = str_after($request->path(), 'members/');

        $data = [
            'member' => $members::find($member_id),
        ];
        return view('admin.show', $data);
    }

    public function edit(Members $members, Request $request)
    {
        //get members id
        $member_id = str_after($request->path(), 'members/');
        $member_id = str_before($member_id, '/');

        $data = [
            'members' => $this->members->getMember($member_id),
            'isEditPage' => true, //boolean to show form values
            'title' => 'Edit Member',
        ];

        return view('admin.memberForm', $data);
    }

    public function update(Request $request, Members $members)
    {
        //
        $member_id = $request->id;

        $member = $this->members->getMember($member_id);

        $member->firstName = $request->firstName;
        $member->lastName = $request->lastName;
        $member->email = $request->email;
        $member->address1 = $request->address1;
        $member->address2 = $request->address2;
        $member->postcode = $request->postcode;
        $member->DOB = $request->DOB;
        $member->phone = $request->phone;
        $member->subscription = $request->subscription;
        $member->save();

        return redirect()->action('MembersController@index');

    }

    public function destroy(Members $members)
    {
        //
    }

    // reports index
    public function reportsIndex()
    {
        // code...
        return view('admin.reportsIndex');
    }

    // run reports
    public function viewReport(Request $request)
    {
        $data = array(
            'members' => $this->members->runReport($request->month, $request->year),
            'total' => $this->members->runReport($request->month, $request->year)->count(),
        );
        return view('admin.reports', $data);
    }
}
