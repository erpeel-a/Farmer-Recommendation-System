<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!--To prevent most search engine web crawlers from indexing a page on your site-->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>{{$title}}</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('Backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/css/custom.css')}}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.22/b-1.6.4/b-html5-1.6.4/r-2.2.6/datatables.min.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />

    {{-- @stack('style') --}}
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('Backend/img/avatar.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}} -->

                            <div class="dropdown-divider"></div>
                            <form action="{{route('process.logout')}}" method="post">
                                @csrf
                                <button class="dropdown-item has-icon text-danger"> <i
                                        class="fas fa-sign-out-alt mt-2"></i> Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">CP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="/admin">
                            <a class="nav-link" href="/admin">
                                <i class="fas fa-fire"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-header">Master Data</li>
                        <li class="/satuan">
                            <a class="nav-link" href="/satuan">
                                <i class="fas fa-cubes"></i> <span>Satuan</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="/wilayah">
                                <i class="fas fa-globe-asia"></i> <span>Wilayah</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="/kebutuhan">
                                <i class="fas fa-list-ol"></i> <span>Kebutuhan</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="/musim">
                                <i class="fas fa-cloud"></i> <span>Musim Tanam</span>
                            </a>
                        </li>
                        <li class="#">
                            <a class="nav-link" href="/rekomendasi">
                                <i class="fas fa-comments"></i> <span>Rekomendasi</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            @yield('Content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020
                    <div class="bullet"></div> <a href="#">XII RPL A SMKN 2 KAARANGANYAR</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('Backend/js/stisla.js')}}"></script>
    <script src="{{asset('Backend/js/scripts.js')}}"></script>
    <script src="{{asset('Backend/js/ckeditor.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function DataTable(_table) {
            $(document).ready(() => {
                $(_table).DataTable();
            });
        }
        DataTable('#TABLE_MUSIM');
        DataTable('#TABLE_SATUAN');
        DataTable('#TABLE_REKOMENDASI');
        DataTable('#TABLE_KEBUTUHAN');
        DataTable('#TABLE_WILAYAH');

    </script>
</body>

</html>
