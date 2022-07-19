@extends('layouts.basic')
@section('header')
<section>
    <div class="flex h-20 centered border-bottom border-primary">
        <h2 class="text-primary">Teachers.pk</h2>
    </div>
</section>

@endsection
@section('content')
<section class="w-80" style="padding-top:50px">
    <div class="flex responsive">
        <div class="col w-60 centered">
            <img src="/images/illustrations/auth.png" alt="" class="illustration">
        </div>
        <div class="col w-60 centered">
            <div class="w-70">
                <h4>Don't you have an account? <span class="text-red pl-3"> Signup</span></h4>
                <div class="fancyinput mt-5">
                    <input type="text" placeholder="Your ID">
                    <label for="">Your ID</label>
                </div>
                <div class="fancyinput mt-5">
                    <input type="password" placeholder="Password">
                    <label for="">Password</label>
                </div>

                <div class="btn btn-primary mt-5">Login</div>
            </div>
        </div>
    </div>

</section>

@endsection