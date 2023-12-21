<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CODIFI @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    @yield('css')
</head>

<body>
    <header class="header_area navbar_fixed">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container"><a class="navbar-brand logo_h" href="{{url('/')}}">
                        <img height="48" src="{{asset('img/nav-logo.png')}}" alt=""></a>

                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <div style="position: fixed; right: 8px; bottom: 58px;display:none">
        <a href="https://t.me/codifiapp" class="btn btn-lg btn-secondary btn-success" style="border-radius: 50%;"><i class="fa fa-telegram" aria-hidden="true"></i></a>
    </div>
    <footer class="footer-area py-3" style="background-color: #000;color: #fff;">
        <div class="container">
            <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: center;">
                <div>
                    <p class="copyright" style="font-size: 10px"> <script>
                            // document.write(new Date().getFullYear());
                        </script> Codifi builder platform is powered by <a href="{{url('/')}}">codifi.app</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: false
            });
        });
    </script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @if (Session::has('warning'))
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        toastr.options.positionClass = 'toast-bottom-full-width';

        toastr.warning("{{ Session::get('warning') }}", "Warning")
    </script>
    @endif
    @yield('script')
</body>

</html>