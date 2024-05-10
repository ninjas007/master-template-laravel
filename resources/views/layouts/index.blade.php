<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="@yield('og_site_name')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <link rel="icon" href="" sizes="32x32" />
    <link rel="icon" href="" sizes="192x192" />
    <link rel="apple-touch-icon" href="" sizes="180x180" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Start MDBootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <!-- End MDBootstrap -->

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>
    <div id="wrapper">
        <div class="body-wrap">
            <div class="body">
                @include('templates.header')
                <div class="body-content">
                    @yield('content')
                </div>
            </div>
        </div>


        @include('modals.modal-login')

        @if (auth()->check())
            @include('modals.modal-akun')
        @endif

        @include('templates.menubar-footer')
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('js')
    <script type="text/javascript">
        var template_use = 1;
        var storage = [];

        @if (Session::has('success'))
            swal({
                title: "Berhasil!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                button: "Ok",
            });
        @endif

        @if (Session::has('error'))
            swal({
                title: "Gagal!",
                text: "{{ Session::get('error') }}",
                icon: "warning",
                button: "Ok",
            });
        @endif

        $('.show_pass').click(function() {
            const name = $(this).data('name'); // name element should be data-name
            const type = $(`input[name="${name}"]`).attr('type');

            if (type == 'text') {
                $(`input[name="${name}"]`).attr('type', 'password') // class name should be data-name
            } else {
                $(`input[name="${name}"]`).attr('type', 'text')
            }
        });

        function pakaiTemplate() {
            template_use = $('input[name="template"]:checked').val();

            $('#templateUse').val(template_use);

            swal({
                title: "Berhasil!",
                text: "Berhasil pilih template",
                icon: "success",
                button: "Ok",
            }).then(() => {
                $('#modalPilihTemplate').modal('hide');
            });
        }

    </script>

    <script>
        tinymce.init({
            selector: 'textarea.tiny'
        });
    </script>
</body>

</html>
