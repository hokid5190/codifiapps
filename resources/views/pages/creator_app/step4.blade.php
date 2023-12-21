@extends('layouts.home_layout')
@section('title')
| Create App
@endsection
@section('css')
<style>
    .btn.btn-tab {
        border: 2px solid #ff7e09;
        padding: 6px;
        width: 100px;
    }

    .btn.btn-tab.active {
        border: 2px solid #ff7e09;
        background-color: #ff7e09;
    }

    .btn.btn-tab:focus {
        border-color: #fff;
        background: #ff7e09 !important;
    }

    .btn-template:hover {
        scale: 1.1;
        background-color: #000;
        opacity: 0.5;
        background: #000000;
        filter: brightness(30%);
        /* border-radius:30px; */
    }
    .preivew:hover {
        opacity: 1 !important;
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
            <div style="padding-bottom: 20px; padding-top: 50px; text-align: center;">
                <h1> </h1>
                <!-- <span style="margin-top: 8px;font-weight: 400;font-size: 12px; color:black"> (You can change it later)</span> -->
            </div>

            <div style="padding-bottom: 50px; text-align: center;">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-light" role="tabpanel" aria-labelledby="pills-light-tab">
                        <div class="row" style="padding-bottom: 50px; text-align: center;gap: 10px; display: flex; justify-content: center;">
                        @if($data->type == 'android')
                            <div class="pic-wrap" style="background: #ffffff; border:2px solid #eee; padding:0px;height:500px; width:250px;border-radius: 10px;cursor:pointer" >
                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;gap: 15px;">
                                    <div style="width: 10px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 50px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 8px;height: 8px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                                <div id="before_android" style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: flex; justify-content: center; align-items: center;flex-direction: column;gap: 20px;">
                                    <button onclick="openPreview('android')" class="btn btn-secondary" style="background: #00b0f2; font-weight: 600;border: 2px solid #00b0f2;">Tap To Lunch</button>
                                    <div style="margin: 10px; padding: 10px; background: #4b73c0; border-radius:10px">
                                     <h5 style="color:#fff">Test your app on our interactive simulator</h5>
                                     <p style="text-align: center;margin-bottom: 0px;">Our interactive simulator <br>  lets you enjoy a real-time experience of your brand <br> new app.</p>
                                    </div>
                                </div>
                                <div id="preview_android" style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: none; justify-content: center; align-items: center;flex-direction: column;gap: 20px;">
                                    <div style="background-image: url('{{asset('img/preview-app.png')}}'); height:100%; width:100%; background-size: contain; background-position: center; background-repeat: no-repeat;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                        <div class="preivew" style="width: 100%; height:100%;background-color: #ff7e0957; display: flex; align-items: center; justify-content: center;opacity:0">
                                        <button onclick="showModal()" class="btn btn-secondary" style="background: #00b0f2; font-weight: 600;border: 2px solid #00b0f2;">Custome</button>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;">
                                    <div style="width: 50px;height: 20px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                            </div>
                        @else
                            <div class="pic-wrap" style="background: #ffffff; border:2px solid #eee; padding:0px;height:500px; width:250px;border-radius: 10px;cursor:pointer" >
                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;gap: 15px;">
                                    <div style="width: 10px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 50px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 8px;height: 8px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                                <div id="before_iphone" style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: flex; justify-content: center; align-items: center;flex-direction: column;gap: 20px;">
                                    <button onclick="openPreview('iphone')" class="btn btn-secondary" style="background: #00b0f2; font-weight: 600;border: 2px solid #00b0f2;">Tap To Lunch</button>
                                    <div style="margin: 10px; padding: 10px; background: #4b73c0; border-radius:10px">
                                     <h5 style="color:#fff">Test your app on our interactive simulator</h5>
                                     <p style="text-align: center;margin-bottom: 0px;">Our interactive simulator <br>  lets you enjoy a real-time experience of your brand <br> new app.</p>
                                    </div>
                                </div>
                                <div id="preview_iphone" style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: none; justify-content: center; align-items: center;flex-direction: column;gap: 20px;">
                                    <div style="background-image: url('{{asset('img/preview-app.png')}}'); height:100%; width:100%; background-size: contain; background-position: center; background-repeat: no-repeat;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                        <div class="preivew" style="width: 100%; height:100%;background-color: #ff7e0957; display: flex; align-items: center; justify-content: center;opacity:0">
                                        <button onclick="showModal()" class="btn btn-secondary" style="background: #00b0f2; font-weight: 600;border: 2px solid #00b0f2;">Custome</button>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;">
                                    <div style="width: 30px;height: 30px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-warning mb-3" onclick="document.location='{{ url('app-builder/creator-app?step=3') }}'" style="padding: 12px; border-radius: 30px; width:100px">Back</button>

            <div id="stickLayer" style="display: none; width: 282px; z-index: 1000; position: fixed; left: 50%; top: 50%; height: 350px; margin-left: -141px;outline: #3275dd solid 2px; background: #fff;" class="stick_popup trail-modal large-modal ng-scope">
            <div class="stick_close appyslim-ui-delete-x" onclick="hideModal()"></div>
            <div class="stick_content text-center">
                <div class="trail-wrap">
                    <div class="row">

                        <div class="col-xs-12">
                            <div class="content-wrap">
                                <h3><img src="https://snappy.appypie.com/newui/images/caution-darkread.svg">
                                Stake your COD to get access.</h3>
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
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
    function openPreview(value){
        if(value == 'android'){
            $('#before_android').hide()
            $('#preview_android').show()
        }else{
            $('#before_iphone').hide()
            $('#preview_iphone').show()
        }
    }
    function showModal() {
        $("#stickLayer").show();
    }

    function hideModal() {
        $("#stickLayer").hide();
    }
</script>
@endsection