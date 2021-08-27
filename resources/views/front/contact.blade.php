@extends('front.contact_cha')
@section('content')
    <div style=" margin-top:100px;">
        <p class="titlec"><i class="far fa-id-card"></i>&emsp;Contact&emsp;<i class="far fa-id-card"></i></p>
    </div>
    <div class="map-width" style="width: 100%;">
        <iframe style="width: 100%;
        height: 550px; border: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe>
    </div>
    <div class="container padding-80 text-center">
        <div class="row">
            <div class="col-3">
                <i class="fas fa-phone yellow mg-15"></i>
                <h4 class="mg-15">{{ __('content.name') }}</h4>
                <p class="mg-15">+12-345-6789</p>
            </div>
            <div class="col-3">
                <i class="fas fa-map-marker-alt yellow mg-15"></i>
                <h4 class="mg-15">Address</h4>
                <p class="mg-15">70 Nguyễn Huệ, Huế</p>
            </div>
            <div class="col-3">
                <i class="fas fa-phone yellow mg-15"></i>
                <h4 class="mg-15">Open time</h4>
                <p class="mg-15">10:00 am to 23:00 pm</p>
            </div>
            <div class="col-3">
                <i class="fas fa-phone yellow mg-15"></i>
                <h4 class="mg-15">Email</h4>
                <p class="mg-15">dinhhop1702@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="bg-gray padding-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ctact_content">
                        <h2>Leave Message</h2>
                        <p>Our staff will call back later and answer your questions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-30">
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="col-6 mb-30">
                    <input type="text" placeholder="Email">
                </div>
                <div class="col-12">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Start the discussion..."></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .titlec{
        color: black !important;
        text-decoration: underline;
        font-size: 30px;
        text-align: center;
        font-weight: 600;
        text-transform: uppercase;
        padding-bottom: 20px;
    }
    .yellow{
        color: #bca858;
        font-size: 30px;
    }
    .mg-15{
        margin-bottom: 15px;
    }
    input{
        width: 100%;
        border: 1px solid #ced4da;
        padding: 6px 12px;
    }
    textarea{
        width: 100%;
        border: 1px solid #ced4da;
        height: 150px;
        padding: 20px;
    }
    .contact{

    }
</style>
