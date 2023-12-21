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
</style>
@endsection
@section('content')
<div class="body-landing" style="min-height: calc(100vh - 65px);">
    <section class="support_campaign" style="padding-top: 58px;color: #fafafa">
        <div class="container p-4" style="padding-top: 30px !important;">
            <div style="padding-bottom: 20px; padding-top: 50px; text-align: center;">
                <h1>Select which device to test your app on</h1>
                <!-- <span style="margin-top: 8px;font-weight: 400;font-size: 12px; color:black"> (You can change it later)</span> -->
            </div>

            <div style="padding-bottom: 50px; text-align: center;">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-light" role="tabpanel" aria-labelledby="pills-light-tab">
                        <div class="row" style="padding-bottom: 50px; text-align: center;gap: 10px; display: flex; justify-content: center;">
                            <div class="pic-wrap" style="background: #ffffff; border:2px solid #eee; padding:0px;height:500px; width:250px;border-radius: 10px;cursor:pointer" onclick="document.location='{{ url('app-builder/creator-app?step=4&type=android') }}'">
                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;gap: 15px;">
                                    <div style="width: 10px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 50px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 8px;height: 8px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                                <div style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: flex; justify-content: center; align-items: center;">
                                    <div style="background-image: url('https://logospng.org/download/android/logo-android-4096.png'); height:100px; width:100px; background-size: cover;background-position: center;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                    </div>
                                </div>

                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;">
                                    <div style="width: 50px;height: 20px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                            </div>
                            <div class="pic-wrap" style="background: #ffffff; border:2px solid #eee; padding:0px;height:500px; width:250px;border-radius: 10px;cursor:pointer" onclick="document.location='{{ url('app-builder/creator-app?step=4&type=iphone') }}'">
                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;gap: 15px;">
                                    <div style="width: 10px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 50px;height: 10px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                    <div style="width: 8px;height: 8px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                                <div style="width: calc(100% - 20px); height: calc(100% - 120px); margin:10px;outline: #eee solid 2px;border-radius: 5px;display: flex; justify-content: center; align-items: center;">
                                    <div style="background-image: url('https://www.pngkit.com/png/full/7-76304_iphone-logo-apple-logo-xs-xr-icon-iphone.png'); height:100px; width:100px; background-size: contain;background-repeat: no-repeat;background-position: center;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                    </div>
                                </div>

                                <div style="width: 100%; height:50px;display: flex; justify-content: center;align-items: center;">
                                    <div style="width: 30px;height: 30px;outline: #eee solid 2px;border-radius: 15px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-warning mb-3" onclick="document.location='{{ url('app-builder/creator-app?step=1') }}'" style="padding: 12px; border-radius: 30px; width:100px">Back</button>
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
   
</script>
@endsection