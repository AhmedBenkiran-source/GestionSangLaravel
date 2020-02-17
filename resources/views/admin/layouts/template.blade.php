<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/admin/images/favicon.png")}}">
    <title>Atat</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("/admin/css/lib/bootstrap/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{ asset("/admin/css/lib/calendar2/semantic.ui.min.css")}}" rel="stylesheet">
    <link href="{{ asset("/admin/css/lib/calendar2/pignose.calendar.min.css")}}" rel="stylesheet">
    <link href="{{ asset("/admin/css/lib/owl.carousel.min.css")}}" rel="stylesheet" />
    <link href="{{ asset("/admin/css/lib/owl.theme.default.min.css")}}" rel="stylesheet" />
    <link href="{{ asset("/admin/css/helper.css")}}" rel="stylesheet">
    <link href="{{ asset("/admin/css/style.css")}}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    @include('admin.layouts.header')
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')
    @yield('content')
    <!-- /.content-wrapper -->
    <!-- Footer -->
    
    <script src="{{ asset("/admin/js/lib/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset("/admin/js/lib/bootstrap/js/popper.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset("/admin/js/jquery.slimscroll.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset("/admin/js/sidebarmenu.js")}}"></script>
    <!--stickey kit -->
    <script src="{{ asset("/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js")}}"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="{{ asset("/admin/js/lib/morris-chart/raphael-min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/morris-chart/morris.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/morris-chart/dashboard1-init.js")}}"></script>


	<script src="{{ asset("/admin/js/lib/calendar-2/moment.latest.min.js")}}"></script>
    <!-- scripit init-->
    <script src="{{ asset("/admin/js/lib/calendar-2/semantic.ui.min.js")}}"></script>
    <!-- scripit init-->
    <script src="{{ asset("/admin/js/lib/calendar-2/prism.min.js")}}"></script>
    <!-- scripit init-->
    <script src="{{ asset("/admin/js/lib/calendar-2/pignose.calendar.min.js")}}"></script>
    <!-- scripit init-->
    <script src="{{ asset("/admin/js/lib/calendar-2/pignose.init.js")}}"></script>

    <script src="{{ asset("/admin/js/lib/owl-carousel/owl.carousel.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/owl-carousel/owl.carousel-init.js")}}"></script>
    <script src="{{ asset("/admin/js/scripts.js")}}"></script>
    <!-- scripit init-->

    <script src="{{ asset("/admin/js/custom.min.js")}}"></script>

   <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="{{ asset("/admin/js/lib/datatables/datatables.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js")}}"></script>
    <script src="{{ asset("/admin/js/lib/datatables/datatables-init.js")}}"></script>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    
</body>

</html>