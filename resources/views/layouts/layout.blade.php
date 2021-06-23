<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="{!! asset('assets/bootstrap-5.0.1-dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/fontawesome-free-5.15.3-web/css/all.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/plugins/pace/flash.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/plugins/Select2/Select2.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/plugins/Select2/select2-bootstrap-5-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/myapp.css') !!}">

    <title>Task::PT.ESB</title>
</head>

<body>
    <main>
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">TASK PT. ESB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('soal') }}">Soal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Analisa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sales') }}">Daftar Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">API</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        @yield('content')

        <section class="footer">
            <div class="text-center bg-light p-2 fixed-bottom">
                TASK PT. ESB
            </div>
        </section>

    </main>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{!! asset('assets/plugins/jquery/jquery-3.4.1.min.js') !!}"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="{!! asset('assets/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/pace/pace.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/Select2/Select2Full.js') !!}"></script>
    <script src="{!! asset('assets/js/myapp.js') !!}"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script>
        $("select").select2({
            theme: "bootstrap-5",
            containerCssClass: "select2--small", // For Select2 v4.0
            selectionCssClass: "select2--small", // For Select2 v4.1
            dropdownCssClass: "select2--small",
        });
    </script>
    
    @yield('perPageJs')
    
</body>

</html>