<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>sama shop</title>
    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('dest/style.css') }}" rel="stylesheet">
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
    <!-- header -->
    @include('layouts.header')

    <!-- rightSide  -->
    @include('layouts.rightSide')

    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->

        <!-- nav -->
        @include('layouts.nav')


        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">

                @yield('main')

                </div>
                <!--/row-->

                @include('layouts.add')
            </div>

        </div>
        <!--/.container-fluid-->
    </main>



    <!-- footer -->
    @include('layouts.footer')
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('js/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{ asset('js/views/main.js') }}"></script>

    <!-- Grunt watch plugin -->
</body>

</html>
