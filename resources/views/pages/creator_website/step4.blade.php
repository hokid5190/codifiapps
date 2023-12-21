@extends('layouts.home_layout')
@section('title')
| Create Website
@endsection
@section('css')
<link rel="stylesheet" href="https://snappy.appypie.com/newui/css/font.css">
<link rel="stylesheet" href="{{asset('css/appyslim.css')}}">
<link rel="stylesheet" href="{{asset('css/stick.css')}}">

<style>
    .servie-buy-wrapper {
        display: flex;
        width: 100%;
        flex: 1;
        margin: 0px 0;
        border-radius: 10px;
        padding: 0;
        background: #f6f6f6;
        box-shadow: 0px 4px 3px #00000017;
        overflow: hidden;
    }

    .service-inlcude {
        flex: 2;
        background: #fefefe;
        padding: 25px 20px;
        border: 1px solid whitesmoke;
        text-align: left;
    }

    .service-price {
        padding: 10px;
        background: #eeeeee;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-inlcude ul {
        -webkit-line-clamp: 2;
        -moz-column-count: 2;
        -moz-column-gap: 20px;
        -webkit-column-count: 2;
        -webkit-column-gap: 20px;
        column-count: 2;
        column-gap: 20px;
    }

    .service-inlcude ul li {
        display: flex;
        align-items: center;
        font-size: 13px;
        color: #000;
        margin-bottom: 20px;
        min-height: 37px;
    }

    .service-inlcude ul li span {
        font-size: 18px !important;
        margin: 0 5px !important;
        top: 0 !important;
    }

    .btn.btn-success.trial-btn:hover,
    .btn.btn-success.trial-btn:focus {
        background: #2265cc;
        transform: translateY(-5px);
    }

    .btn.btn-success.trial-btn:hover,
    .btn.btn-success.trial-btn:focus {
        background: #2265cc !important;
        color: #fff !important;
    }

    .btn.btn-tab:focus {
        border-color: #fff;
        background: #ff7e09 !important;
    }

    .service-inlcude h2 {
        font-size: 17px;
        text-transform: uppercase;
        color: #3275dd;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .stick_popup.trail-modal {
        width: 80% !important;
        height: auto !important;
        margin: 0px !important;
        transform: translate(-50%, -50%);
        max-width: 900px;
        animation: none;
    }

    .stick_close {
        color: black;
        z-index: 99;
    }

    .trail-wrap {
        padding: 90px 20px;
        position: relative;
        z-index: 1;
        padding-bottom: 50px;
        border-top: 5px solid #3275dd;
    }

    .trail-wrap::before {
        content: '';
        position: absolute;
        left: 0px;
        bottom: 0px;
        background: #F9FAFD;
        width: 100%;
        height: 28%;
        z-index: -1;
    }

    .trail-wrap .content-wrap .btn.btn-success {
        font-size: 18px;
        background: #3275DD;
        border-color: #3275DD;
        border-radius: 10px;
        height: auto;
        line-height: 1;
        padding: 17px 27px;
        box-shadow: 0px 4px 8px #bababa99, 0px 4px 8px #ffffff4d inset;
        margin-top: 20px;
        transition: 0.3s;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .trail-wrap .content-wrap .btn.btn-success:hover,
    .trail-wrap .content-wrap .btn.btn-success:focus {
        background: #2265cc;
        transform: translateY(-5px);
    }

    .stick_popup.trail-modal .stick_content {
        padding: 0px;
    }

    @media screen and (max-width: 768px) {
        .servie-buy-wrapper {
            flex-wrap: wrap;
            flex-direction: column-reverse;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {

        div,
        li,
        p,
        span {
            transition: all 0.5s ease;
        }
    }

    @media screen and (max-width: 768px) {
        .service-inlcude ul {
            -webkit-line-clamp: 1;
            column-count: 1;
            column-gap: 20px;
        }
    }
</style>
@endsection
@section('content')
<div class="body-landing" style="min-height: calc(100vh - 65px);">
    <section class="support_campaign" style="padding-top: 58px;color: #fafafa">
        <div class="container p-4" style="padding-top: 30px !important;">
            <div style="padding-bottom: 50px; padding-top: 50px; text-align: center;">
                <h1>Start Your Free 7 Days Trial and Explore All Features.</h1>
            </div>

            <div class="col-12 row" style="padding-bottom: 50px; text-align: center;">
                <div class="servie-buy-wrapper">
                    <div class="service-inlcude">
                        <h2>What's Included?</h2>
                        <ul style="color: black;padding-left: 0px;">
                            <li><span class="appyslim-alignment-window-align-grid-top-2"></span>Responsive Website</li>
                            <li><span class="appyslim-education-earth-symbol"></span>Custom Domain</li>
                            <li><span class="appyslim-phone-iphone"></span>Unlimited Bandwidth and Storage</li>
                            <li><span class="appyslim-ui-bell"></span>1000/Mo Push Notifications</li>
                            <li><span class="appyslim-phone-iphone"></span>Convert Website to App</li>
                            <li><span class="appyslim-mail-mail-2"></span>Business Email by Google</li>
                            <li><span class="appyslim-ui-star"></span>Access to all Premium Features</li>
                            <li><span class="appyslim-phone-24-call-support"></span>24/7 Customer care </li>
                        </ul>
                    </div>
                    <div class="service-price">

                        <div class="price-header">
                        <a class="btn btn-warning" style="font-weight: 700; font-size: 34px; margin-bottom: 25px;">Warning</a>
                            <div ng-show="convertAppUI==true">
                                
                                <a  href="javascript:void(0);" class="h4"  style="color: #111;">
                                    Only Codifi Holders Have Access to this features
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="stickLayer" style="display: none; width: 282px; z-index: 1000; position: fixed; left: 50%; top: 50%; height: 350px; margin-left: -141px;" class="stick_popup trail-modal large-modal ng-scope">
            <div class="stick_close appyslim-ui-delete-x" onclick="hideModal()"></div>
            <div class="stick_content text-center">
                <div class="trail-wrap">
                    <div class="row">

                        <div class="col-xs-12">
                            <div class="content-wrap">
                                <h3><img src="https://snappy.appypie.com/newui/images/caution-darkread.svg">
                                    Only Codifi holders have acces to this feature.</h3>
                                <!-- <h5 class="sub-heading"> No Problem! We've got you covered... </h5> -->

                                <div class="btn-wrap">
                                    <a href="#" onclick="hideModal()" class="btn btn-success">OK</a>
                                    <!-- <p style="color: black;">Click Here to start your free 7-day trial on our Appy Pie Grow Plan</p> -->
                                    <!-- <a href="#" onclick="choosePlanFreeStripe()" class="btn btn-success">
                                <strong>YES! Start My FREE Trial of Appy Pie</strong>
                                <span>Appy Pie 7 Days Free, no credit card required</span>
                            </a>                  -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
    function showModal() {
        $("#stickLayer").show();
    }

    function hideModal() {
        $("#stickLayer").hide();
    }
</script>
@endsection