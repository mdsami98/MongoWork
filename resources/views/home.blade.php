@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Auth::user()->type == 'user')
                <div class="card">
                    <div class="card-header">Payment First</div>
                    <div class="card-body">

                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">User Profile</div>
                    <div class="card-body">
                        {{Auth::user()->name}}
                    </div>
                    <div class="card-footer">
                        <a href="{{route('userList')}}">All User</a>
                    </div>
                </div>
            @endif




        </div>
    </div>
</div>
@endsection
