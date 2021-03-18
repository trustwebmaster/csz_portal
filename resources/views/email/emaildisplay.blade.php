@extends('layouts.master2')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Confirm Email</h5>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div>
                        <a href="/">
                            <div class="avatar-md profile-user-wid mb-4">
                                            <span>
                                                <img src="{{ asset('assets/images/csz.png') }}" alt="logo"
                                                     height="45">
                                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">
                        <img src="{{ asset('img-assets/mail_confirm.png') }}" alt="img" width="86" class="mx-auto d-block" />

                        <p class="text-muted font-14 mt-2"> A email has been send to <b>{{ $email }}</b>.
                            Please check for an email from company and click on the included link to
                            reset your password. </p>

                        <a href="/" class="btn btn-block btn-primary waves-effect waves-light mt-3">Back to Home</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
