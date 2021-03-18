@extends('layouts.master')

@section('content')

   <div class="container-fluid">
       <div class="row">
           <div class="col-12">
               <div class="page-title-box d-flex align-items-center justify-content-between">
                   <h4 class="mb-0 font-size-12">Approval Overview</h4>

                   <div class="page-title-right">
                       <ol class="breadcrumb m-0">
                           <li class="breadcrumb-item"><a href="{{ route('admin.pending-approvals') }}">Pending Approvals</a></li>
                           <li class="breadcrumb-item active">Approval Overview</li>
                       </ol>
                   </div>

               </div>
           </div>
       </div>


       <div class="row">
           <div class="col-lg-8">
               <div class="card">
                   <div class="card-body">
                       <div class="media">
                           <img src="{{ asset('assets/images/companies/img-1.png') }}" alt="" class="avatar-sm mr-4">

                           <div class="media-body overflow-hidden">
                               <h5 class="text-truncate font-size-15">Skote Dashboard UI</h5>
                               <p class="text-muted">Separate existence is a myth. For science, music, sport, etc.</p>
                           </div>
                       </div>

                       <h5 class="font-size-15 mt-4">Project Details :</h5>

                       <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,</p>

                       <div class="text-muted mt-4">
                           <p><i class="mdi mdi-chevron-right text-primary mr-1"></i> To achieve this, it would be necessary</p>
                           <p><i class="mdi mdi-chevron-right text-primary mr-1"></i> Separate existence is a myth.</p>
                           <p><i class="mdi mdi-chevron-right text-primary mr-1"></i> If several languages coalesce</p>
                       </div>

                       <div class="row task-dates">
                           <div class="col-sm-4 col-6">
                               <div class="mt-4">
                                   <h5 class="font-size-14"><i class="bx bx-calendar mr-1 text-primary"></i> Start Date</h5>
                                   <p class="text-muted mb-0">08 Sept, 2019</p>
                               </div>
                           </div>

                           <div class="col-sm-4 col-6">
                               <div class="mt-4">
                                   <h5 class="font-size-14"><i class="bx bx-calendar-check mr-1 text-primary"></i> Due Date</h5>
                                   <p class="text-muted mb-0">12 Oct, 2019</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- end col -->

           <div class="col-lg-4">
               <div class="card">
                   <div class="card-body">
                       <h4 class="card-title mb-4">Team Members</h4>

                       <div class="table-responsive">
                           <table class="table table-centered table-nowrap">
                               <tbody>
                               <tr>
                                   <td style="width: 50px;"><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="rounded-circle avatar-xs" alt=""></td>
                                   <td><h5 class="font-size-14 m-0"><a href="#" class="text-dark">Daniel Canales</a></h5></td>
                                   <td>
                                       <div>
                                           <a href="#" class="badge badge-primary font-size-11">Frontend</a>
                                           <a href="#" class="badge badge-primary font-size-11">UI</a>
                                       </div>
                                   </td>
                               </tr>
                               <tr>
                                   <td><img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="rounded-circle avatar-xs" alt=""></td>
                                   <td><h5 class="font-size-14 m-0"><a href="#" class="text-dark">Jennifer Walker</a></h5></td>
                                   <td>
                                       <div>
                                           <a href="#" class="badge badge-primary font-size-11">UI / UX</a>
                                       </div>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                                    C
                                                                </span>
                                       </div>
                                   </td>
                                   <td><h5 class="font-size-14 m-0"><a href="#" class="text-dark">Carl Mackay</a></h5></td>
                                   <td>
                                       <div>
                                           <a href="#" class="badge badge-primary font-size-11">Backend</a>
                                       </div>
                                   </td>
                               </tr>
                               <tr>
                                   <td><img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="rounded-circle avatar-xs" alt=""></td>
                                   <td><h5 class="font-size-14 m-0"><a href="#" class="text-dark">Janice Cole</a></h5></td>
                                   <td>
                                       <div>
                                           <a href="#" class="badge badge-primary font-size-11">Frontend</a>
                                           <a href="#" class="badge badge-primary font-size-11">UI</a>
                                       </div>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                                    T
                                                                </span>
                                       </div>
                                   </td>
                                   <td><h5 class="font-size-14 m-0"><a href="#" class="text-dark">Tony Brafford</a></h5></td>
                                   <td>
                                       <div>
                                           <a href="#" class="badge badge-primary font-size-11">Backend</a>
                                       </div>
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
           <!-- end col -->
       </div>
   </div>

@endsection
