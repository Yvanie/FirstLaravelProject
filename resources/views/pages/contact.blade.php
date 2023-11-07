@extends('default')
@section('title')
Yvanie website | contact Page
@endsection
@section('content')
<section class="contact offset" id="contact">
        <h3>Contact us</h3>
        <h6>Provide your informations and have your website</h6>
        <div class="form">
            <div class="first-row">
                <input type="text" placeholder="Enter your name">
                <input type="mail" placeholder="Enter your email">
            </div>
            <div class="first-row">
                <input type="text" placeholder="Enter your name">
                <input type="mail" placeholder="Enter your email">
            </div>
            <textarea  cols="30" rows="10" placeholder="enter your message.."></textarea>
            <ul class="header-btn">
                <a href="#" class="btn btn2">Submit </i></a>
            </ul>
        </div>
    </section>
@endsection