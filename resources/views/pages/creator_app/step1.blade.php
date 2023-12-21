@extends('layouts.home_layout')
@section('title')
| Create App
@endsection
@section('css')
<style>
    .line {
        width: 100%;
        height: 2px;
        background: #5a5a5a;
    }

    .btn-action .btn {
        font-size: 16px;
        min-width: 150px;
        line-height: 45px;
        border-radius: 50px;
        padding: 0px 20px;
        font-weight: 500;
    }
</style>
@endsection
@section('content')
<div class="body-landing" style="min-height: calc(100vh - 65px);">
    <section class="support_campaign" style="padding-top: 58px;color: #fafafa">
        <div class="container p-4" style="padding-top: 30px !important;">
            <div style="padding-bottom: 50px; padding-top: 50px; text-align: center;">
                <h1>Enter project name</h1>
                <span style="margin-top: 8px;font-weight: 400;font-size: 12px; color:black"> (You can change it later)</span>
            </div>

            <form id="form-name" action="#" method="get">
                <div style="margin-top: 40px; margin-bottom:30px;display: flex; flex-direction: column; align-items: center;">
                    <div style="min-width: 280px; max-width: 500px;">
                        <input type="hidden" name="step" value="3" />
                        <input id="app_name" class="app_name" maxlength="30" ng-maxlength="30" placeholder="Enter project name" type="text" required style="width: 100%; height:45px; border: 0;border-bottom: 0px solid #000; border-radius: 0; background: transparent; box-shadow: none; padding: 0; outline: 0;text-align: center;">
                        <div class="line"></div>
                    </div>

                </div>

                <div class="btn-action" style="text-align: center;">
                    <button id="svid" type="submit" class="btn btn-secondary btn-center">Continue</button>
                </div>
            </form>
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
// document.getElementById("form-name").addEventListener("click", function(event) {
//     console.log('event', event)
//     event.preventDefault();
// });
</script>
@endsection