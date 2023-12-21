@extends('layouts.home_layout')
@section('title')
| Create Website
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
    }
</style>
@endsection
@section('content')
<div class="body-landing" style="min-height: calc(100vh - 65px);">
    <section class="support_campaign" style="padding-top: 58px;color: #fafafa">
        <div class="container p-4" style="padding-top: 30px !important;">
            <div style="padding-bottom: 50px; padding-top: 50px; text-align: center;">
                <h1>What’s your style?</h1>
                <span style="margin-top: 8px;font-weight: 400;font-size: 12px; color:black"> (You can change it later)</span>
            </div>

            <div style="padding-bottom: 50px; text-align: center;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="display: flex; justify-content: center;">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-tab active" id="pills-light-tab" data-bs-toggle="pill" data-bs-target="#pills-light" type="button" role="tab" aria-controls="pills-light" aria-selected="true" onclick="openTab('light')">Light</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-tab" id="pills-dark-tab" data-bs-toggle="pill" data-bs-target="#pills-dark" type="button" role="tab" aria-controls="pills-dark" aria-selected="false" onclick="openTab('dark')">Dark</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-light" role="tabpanel" aria-labelledby="pills-light-tab">
                        <div class="col-12 row" style="padding-bottom: 50px; text-align: center;">
                            @foreach($data->template as $item)
                            @if($item['type'] == 'light')
                            <div class="col-md-4 btn-template" style="padding: 10px;">
                                <div class="col-12" style="background: #B5B5B5;padding: 10px;" onclick="document.location='{{ url('app-builder/creator-website?step=4') }}'">
                                    <div class="img-fluid" style="background-image: url('{{ asset($item['image']) }}'); height:150px; background-size: cover;background-position: center;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                        <span style="color: #fff; font-size: 18px; text-transform: uppercase; text-align: center; font-weight: 400;">{{$item['name']}}</span>
                                    </div>

                                </div>
                            </div>

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dark" role="tabpanel" aria-labelledby="pills-dark-tab">
                    <div class="col-12 row" style="padding-bottom: 50px; text-align: center;">
                            @foreach($data->template as $item)
                            @if($item['type'] == 'dark')
                            <div class="col-md-4 btn-template" style="padding: 10px;">
                                <div class="col-12" style="background: #B5B5B5;padding: 10px;" onclick="document.location='{{ url('app-builder/creator-website?step=4') }}'">
                                    <div class="img-fluid" style="background-image: url('{{ asset($item['image']) }}'); height:150px; background-size: cover;background-position: center;display: flex; flex-direction: row; align-content: center; align-items: center; justify-content: center;">
                                        <span style="color: {{$item['color']}}; font-size: 18px; text-transform: uppercase; text-align: center; font-weight: 400;">{{$item['name']}}</span>
                                    </div>

                                </div>
                            </div>

                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-warning mb-3" onclick="document.location='{{ url('app-builder/creator-website?step=2') }}'" style="padding: 12px; border-radius: 30px; width:100px">Back</button>
        </div>
    </section>

</div>
@endsection
@section('script')
<script>
    function openTab(value) {
        if (value == 'light') {
            $('#pills-light-tab').removeClass('active');
            $('#pills-dark-tab').removeClass('active');
            $('#pills-light').removeClass('active show');
            $('#pills-dark').removeClass('active show');

            $('#pills-light-tab').addClass('active');
            $('#pills-light').addClass('active show');
        } else {
            $('#pills-light-tab').removeClass('active');
            $('#pills-dark-tab').removeClass('active');
            $('#pills-light').removeClass('active show');
            $('#pills-dark').removeClass('active show');

            $('#pills-dark-tab').addClass('active');
            $('#pills-dark').addClass('active show');
        }
    }
</script>
@endsection