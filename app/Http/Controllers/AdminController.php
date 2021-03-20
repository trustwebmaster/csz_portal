<?php

namespace App\Http\Controllers;

use App\CompanyMember;
use App\ProfessionalMember;
use App\StudentMember;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = StudentMember::all()->count();
        $company = CompanyMember::all()->count();
        $professional = ProfessionalMember::all()->count();


        return view('admin.index' ,
            ['students' => $students , 'company' => $company , 'professional' => $professional] );
    }

    public function members(){
        $users  = User::where('status' , 'pending')->get();
        return view('admin.members-approval' , ['users' => $users]);
    }

    public function pendingApprovalsShow($user){
         $member = StudentMember::where('user_id' , $user)->first();
        return view('admin.pending-approvals-show' , ['member' => $member]);
    }

    public function pendingApprovals(){
        $users = User::where('status' , 'pending')->get();
        return view('admin.pending-approvals' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approval(StudentMember $member)
    {
        $member->update([
            'status' => 'approved'
        ]);

        return redirect()->route('admin.pending-approvals.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nationalID(StudentMember $member)
    {
        return Storage::disk('public')->download($member->national_id);
    }

    public function schoolID(StudentMember $member)
    {
        return Storage::disk('public')->download($member->school_id);
    }

    public function approve_member(User $member){
      $test =  $member->Update([
           'status' => 'Approved'
        ]);
      return $test;

        return redirect()->route('admin.pending-approvals');
    }

    public function decline_member(User $member){
        $member->update([
           'status' => 'Decline'
        ]);
        return redirect()->route('admin.pending-approvals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
