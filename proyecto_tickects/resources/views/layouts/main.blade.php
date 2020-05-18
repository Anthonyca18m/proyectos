<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Proyecto Tickets</title>


    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .router-link-exact-active{
            background-color: #007bff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        .router-link-exact-active p{
            color: #fff;
        }
        .router-link-exact-active i{
            color: #fff;
        }
        .router-link-exact-active:hover{
            background-color: #007bff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            color: #fff;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    
    <div class="wrapper" id="app">
        
        <!-- Navbar -->
        @include('layouts.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.menu')
        <v-app>
        <!-- Content Wrapper. Contains page content -->
            <!-- Main content -->
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
            <!-- /.content -->
        <!-- /.content-wrapper -->
        </v-app>
        <!-- Control Sidebar -->
        @include('layouts.control-right')
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layouts.footer')
    
    </div>

    @auth
    <script>
        window.user = @json(auth()->user());  
    </script>
    @endauth
    <!-- AdminLTE App -->
    <script src="/js/app.js"></script>
</body>

</html>