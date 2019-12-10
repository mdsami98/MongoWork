@extends('layouts.app')

@section('content')
    @if(Auth::user()->type == 1)


        <div class="container">
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-4'>


                    <form action="{{route('charge')}}" method="post" id="payment-form">
                        @csrf
                        <div class="form-row">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button>Submit Payment</button>
                    </form>
                </div>
                <br>
                <div class="col-md-4"></div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">User Profile</div>
                        <div class="card-body">
                            {{Auth::user()->name}}
                        </div>
                        <div class="card-footer">
                            <a href="{{route('userList')}}">All User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif
@endsection
