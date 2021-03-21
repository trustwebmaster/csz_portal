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
        return view('member.cpd-events');
    }

    public function cpdPoints()
    {
        return view('member.cpd-points');
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
