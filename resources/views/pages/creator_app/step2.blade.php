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
                <h1>Choose the category that fits best</h1>
            </div>

            <div class="col-12 row" style="padding-bottom: 50px; text-align: center;">
                @foreach($data->category as $item)
                <div class="col-md-4">
                    <button class="btn btn-secondary mb-3" onclick="document.location='{{ url('app-builder/creator-app?step=3') }}'" style="padding: 12px; border-radius: 30px; width: 100%;">{{$item['name']}}</button>
                </div>
                @endforeach
            </div>

            <div class="btn-action" style="text-align: center; color:#5a5a5a; font-weight: 400;font-size: 18px;">
                <p>We're the quickest way to help you develop your website and start making money - without Coding!</p>
            </div>
            <button class="btn btn-warning mb-3" onclick="document.location='{{ url('app-builder/creator-app?step=2') }}'" style="padding: 12px; border-radius: 30px; width:100px">Back</button>
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
    
</script>
@endsection