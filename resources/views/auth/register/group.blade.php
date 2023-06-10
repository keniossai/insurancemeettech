@extends('layouts.app')

@section('content')
<div id="page-banner-area" class="page-banner-area overlay"
style="background-image:url({{ cloudinary_url('nbaconference/bg/1I3A0382_wx9rvt', ['width' => 1000]) }})">
<!-- Subpage title start -->
<div class="page-banner-title">
   <div class="text-center">
       <h2>GROUP REGISTRATION</h2>
       <ol class="breadcrumb">
           <li>
               <a href="{{ route('register') }}">Register /</a>
           </li>
           <li>
               Group Registration
           </li>
       </ol>
   </div>
</div><!-- Subpage title end -->
</div><!-- Page Banner end -->


<section class="ts-contact-form section-bg ">
<div class="container">
   <div class="row">
       <div class="col-lg-12 mb-4">
           <div class="card card-body">
               <h2 class="column-title" style="font-size: 20px">INSTRUCTIONS:</h2>
               <p>To register and make payment for a group of NBA members, please follow these few easy steps;</p>
               <p>- A group <b>must</b> consist of 10 or more NBA members.</p>
               <p>- All members should individually complete the <a href="{{ route('register') }}">first stage of registration</a>, i.e. Search for their name, complete and submit the <a href="{{ route('register') }}">registration form</a>, and verify their email address (But <b>ignore</b> making payment).</p>
               <p>- <b>One member</b> of the group (the group lead) should, however, proceed to make payment.</p>
               <p>- On the payment page, as the group lead, scroll to the bottom of the page and click the button for <b>"Group Payment"</b>. See the image illustration below;</p>

               <div class="row">
                   <div class="col-md-6">
                       <img src="{{ cloudinary_url('nbaconference/bg/group_pay_hzxjf1') }}" class="img-fluid" alt="group-pay">
                   </div>
               </div>
               <hr>
               <p>- You'll be automatically redirected to a new page to add members of your group and initiate payment.</p>
               <p>- Yes, it's as simple as that. <a href="{{ route('register') }}"><b>Begin your registration now</b></a>, and tell other members to begin theirs too.</p>
           </div>
       </div>
   </div>


</div>
<div class="speaker-shap">
   <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
</div>
</section>
@endsection
