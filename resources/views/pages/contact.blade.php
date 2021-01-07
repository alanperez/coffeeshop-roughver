@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}} 
@endsection



@section('content')
    <div id="contact-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <p>
              {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
              {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
            </p>
            <h3>Phone Number</h3>
            <p>
              <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
            </p>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.9839770979283!2d-96.60351208433455!3d32.76615968097526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864ea50545ee6751%3A0xfa50dd6a79165d3d!2sBear%20Cave%20Coffee!5e0!3m2!1sen!2sus!4v1609978953422!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
@endsection