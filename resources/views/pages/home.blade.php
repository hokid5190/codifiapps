@extends('layouts.home_layout')

@section('content')
<div class="body-landing" style="min-height: calc(100vh - 65px);">
    <section class="support_campaign bg-primary" style="padding-top: 58px;">
        <div class="container p-4" style="padding-top: 30px !important;">
            <div class="row justify-content-start mb-3">
                <div class="col-md-6" style="display: flex; align-items: center;">
                    <!-- <h3 style="color: #fff;">No-code Web3 App Development Powered by AI</h3> -->
                    <p style="color: #ffe4a7;font-size: 1rem; text-align: justify;">Making an application is as simple as connecting your databases and then dragging and dropping the tools you want to use. Generate passive income with unique revenue share systems.</p>
                </div>
                <div class="col-md-6">
                    <!-- <div class="p-4" style="width: 300px; text-align: center;"> -->
                    <img src="{{url('/img/pict-home.png')}}" width="300" height="260">
                    <!-- </div> -->
                </div>
            </div>
            <div class=" justify-content-start mb-3">
                <a class="btn btn-primary" href="{{url('/app-builder/creator-app')}}">Create your App</a>
                <a class="btn btn-primary" href="{{url('/app-builder/creator-website')}}">Create your website</a>
            </div>
        </div>
    </section>
    <section class="support_campaign" style="color: #fafafa">
        <div class="container p-4" style="padding-top: 30px !important;">
            <h4 style="font-weight: bold;">Upcoming Codifi's Features</h4>

            <div class="row mb-3">
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675;">Chatbot builder</button></div>
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675">APP Integration</button></div>
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675">Live chat software</button></div>
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675">Al design tools</button></div>
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675">Create Smart Contract</button></div>
                <div class="col-6 mb-3"><button class="btn btn-secondary" style="width: 100%;background:#8a7675">Convert Your Assets into NFTs</button></div>

            </div>
            <div style="display: flex; justify-content: center; gap: 10px;">
                <a href="https://t.me/codifiapp" class="btn btn-secondary btn-primary" style="border-radius: 50%;"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="https://x.com/codifiapp" class="btn btn-secondary btn-primary" style="border-radius: 50%;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://codifi.medium.com/" class="btn btn-secondary btn-primary" style="border-radius: 50%;"><i class="fa fa-medium" aria-hidden="true"></i></a>
                <a href="https://github.com/codifiapp" class="btn btn-secondary btn-primary" style="border-radius: 50%;"><i class="fa fa-github" aria-hidden="true"></i></a>
                <a href="https://codifi.app/CODIFI%20WHITEPAPER.pdf" class="btn btn-secondary btn-primary" style="border-radius: 50%;"><img height="20" src="{{asset('img/icon-whitepaper.png')}}" alt=""></a>
            </div>
        </div>
    </section>

</div>
@endsection