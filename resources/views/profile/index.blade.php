@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Hi {{ $userInfos->name }}</div>

                    <div class="panel-body">
                        <p>Your infos:</p>
                        <ul>
                            <li>Name: {{ $userInfos->name }}</li>
                            <li>Email {{ $userInfos->email }}</li>
                        </ul>
                        
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="col-md-6">Change Name</div>
                            <div class="col-md-6">Change Password</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection