<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desa Wanawali</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset ("bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ("plugins/font-awesome/css/font-awesome.min.css") }}">
    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset ("plugins/select2/select2.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset ("plugins/ionicons/css/ionicons.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ("dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ asset ("dist/css/skins/skin-blue.min.css") }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset ("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      @include('admin.header')

      <!-- Left side column. contains the logo and sidebar -->
      @include('admin.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('page_title')
          </h1>

          <ol class="breadcrumb">
            <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('page_title')</li>
          </ol>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <!-- Your Page Content Here -->
            @yield('content')

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      @include('admin.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset ("js/jquery.min.js") }}"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset ("bootstrap/js/bootstrap.min.js") }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset ("dist/js/app.min.js") }}"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset ("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>

    <!-- select 2 -->
    <script src="{{ asset ("plugins/select2/select2.full.min.js") }}"></script>

    <script type="text/javascript">
      @yield('script')
    </script>

  </body>
</html>
