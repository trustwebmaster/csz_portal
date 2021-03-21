<?php

namespace App\Http\Controllers;

use App\CompanyMember;
use App\ProfessionalMember;
use App\StudentMember;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
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

    public function pendingApprovalsShow()
    {

        return view('admin.pending-approvals-show');
    }

    public function pendingApprovals()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.pending-approvals', ['users' => $users]);
    }

    public function reportShow()
    {
        return view('admin.reports.report-show');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
