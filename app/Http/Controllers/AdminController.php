<?php

namespace App\Http\Controllers;

use App\CompanyMember;
use App\Order;
use App\ProfessionalMember;
use App\StudentMember;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $students = StudentMember::all()->count();
        $company = CompanyMember::all()->count();
        $professional = ProfessionalMember::all()->count();


        return view('admin.index', ['students' => $students, 'company' => $company, 'professional' => $professional]);
    }

    public function members()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.members-approval', ['users' => $users]);
    }

    public function pendingApprovalsShow($user){
         $member = StudentMember::where('user_id' , $user)->first();
        return view('admin.pending-approvals-show' , ['member' => $member]);
    }

    public function pendingApprovals()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.pending-approvals', ['users' => $users]);
    }

    public function reportShow(Request $request)
    {
       $report = request('report');
       if($report == "pending"){
           $users  = User::where('status' , 'pending')->get();
           return view('admin.reports.report-show' , ['users' => $users]);
       }elseif ($report == "approved"){
           $users  = User::where('status' , 'approved')->get();
           return view('admin.reports.report-show' , ['users' => $users]);

       }elseif ($report == "students"){
           $students = StudentMember::all();
           return view('admin.reports.admin-reports' , ['students' => $students]);

       }elseif ($report == "professionals"){
           $students = ProfessionalMember::all();
           return view('admin.reports.admin-reports' , ['students' => $students]);

       }elseif ($report == "companies"){
        $students = CompanyMember::all();
           return view('admin.reports.admin-reports' , ['students' => $students]);
       }

    }

    public function approval(StudentMember $member)
    {
        $member->update([
            'status' => 'approved'
        ]);

        return redirect()->route('admin.pending-approvals.show');
    }

    public function nationalID(StudentMember $member)
    {
        return Storage::disk('public')->download($member->national_id);
    }

    public function schoolID(StudentMember $member)
    {
        return Storage::disk('public')->download($member->school_id);
    }

    public function approve_member($member){
    User::where('id' , $member)->update(['status' => 'Approved']);
        return redirect()->route('admin.pending-approvals');
    }

    public function decline_member($member){
        $test = User::where('id' , $member)->update(['status' => 'Decline']);
        return redirect()->route('admin.pending-approvals');
    }

    public function students()
    {
        $students = StudentMember::all();
        return view('admin.students' , ['students' => $students]);
    }

    public function professional()
    {
        $students = ProfessionalMember::all();
        return view('admin.professionals' ,['students' => $students]);
    }

    public function company()
    {
        $students = CompanyMember::all();
        return view('admin.company' , ['students' => $students]);
    }

    public function memberPayments(){
        $payments = Order::where('ISpaid' , 1)->get();
        return view('admin.member-payments' , ['payments' => $payments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function cpdPoints()
    {
        return view('admin.cpd-points');
    }
    public function cpdPointsShow()
    {
        return view('admin.cpd-points-show');
    }
}
