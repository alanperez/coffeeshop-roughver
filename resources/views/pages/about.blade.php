<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="about-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>About Us</h1>
            <p>
              Bear Cave Coffee has firmly established itself at the Corner Theatre in downtown Mesquite. This location has given us the opportunity to satisfy everyone's caffeine craving from a spot that places us right in the middle of all the warmth and love this town has to offer. Our biggest hope is that we can give as much back to this town as it has given us throughout our lives. 
            </p>
            <p>
              Bear Cave Coffee has firmly established itself at the Corner Theatre in downtown Mesquite. This location has given us the opportunity to satisfy everyone's caffeine craving from a spot that places us right in the middle of all the warmth and love this town has to offer. Our biggest hope is that we can give as much back to this town as it has given us throughout our lives. 
            </p>
          </div>
          <div class="col-md-6">
            <img src="/img/about.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
@endsection