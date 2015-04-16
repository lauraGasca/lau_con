<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>
            @section('titulo')
                Consorcio del Conocimiento A.C
            @show
        </title>
        <link rel="shortcut icon" href="{{{asset('images/favicon.png')}}}">
        @section('css')
            <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
            {{ HTML::style('sentir/css/bootstrap.min.css') }}
            <!-- MAIN CSS (REQUIRED ALL PAGE)-->
            {{ HTML::style('sentir/css/font-awesome.css') }}
            {{ HTML::style('sentir/css/style.css') }}
            {{ HTML::style('sentir/css/style-responsive.css') }}
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
            {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
            <![endif]-->
        @show
    </head>

    <body class="tooltips">
        <div class="wrapper">
            <div class="top-navbar">
                <div class="top-navbar-inner">
                    <div class="logo-brand">
                        <a href="{{url('/')}}" target="_blank">
                            {{ HTML::image('/images/consorcio.png','Logo', ['style'=>"height: 50px;"]) }}
                        </a>
                    </div>
                    <div class="top-nav-content">
                        <div class="btn-collapse-sidebar-left">
                            <i class="fa fa-bars icon-dinamic"></i>
                        </div>
                    </div>
                    <ul class="nav-user navbar-right">
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                {{ HTML::image('images/favicon.png', 'Logo', ['style'=>"height: 30px;"]) }}
                                <strong>Opciones</strong>
                            </a>
                            <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                <li>{{ HTML::link('sistema/error', 'Reportar Error')}}</li>
                                <li class="divider"></li>
                                <li>{{ HTML::link('sistema/logout', 'Cerrar sesi&oacute;n')}}</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-left sidebar-nicescroller">
                <ul class="sidebar-menu">
                    <li><a href="{{url('convocatoria')}}"><i class="fa fa-edit icon-sidebar"></i>Convocatorias</a></li>
                    <li><a href="{{url('servicio')}}"><i class="fa fa-folder-open-o icon-sidebar"></i>Servicios</a></li>
                    <li><a href="{{url('frases')}}"><i class="fa fa-paragraph icon-sidebar"></i>Frases</a></li>
                </ul>
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    @section('contenido')
                    @show
                </div>
            </div>
        </div>
        <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
        {{ HTML::script('sentir/js/jquery.min.js') }}
        {{ HTML::script('sentir/js/bootstrap.min.js') }}
        {{ HTML::script('sentir/plugins/retina/retina.min.js') }}
        {{ HTML::script('sentir/plugins/nicescroll/jquery.nicescroll.js') }}
        {{ HTML::script('sentir/plugins/slimscroll/jquery.slimscroll.min.js') }}
        {{ HTML::script('sentir/plugins/backstretch/jquery.backstretch.min.js') }}
        <!-- PLUGINS -->
        {{ HTML::script('sentir/plugins/skycons/skycons.js') }}
        {{ HTML::script('sentir/plugins/prettify/prettify.js') }}
        {{ HTML::script('sentir/plugins/magnific-popup/jquery.magnific-popup.min.js') }}
        {{ HTML::script('sentir/plugins/owl-carousel/owl.carousel.min.js') }}
        {{ HTML::script('sentir/plugins/chosen/chosen.jquery.min.js') }}
        {{ HTML::script('sentir/plugins/icheck/icheck.min.js') }}
        {{ HTML::script('sentir/plugins/datepicker/bootstrap-datepicker.js') }}
        {{ HTML::script('sentir/plugins/timepicker/bootstrap-timepicker.js') }}
        {{ HTML::script('sentir/plugins/mask/jquery.mask.min.js') }}
        {{ HTML::script('sentir/plugins/validator/bootstrapValidator.min.js') }}
        {{ HTML::script('sentir/plugins/datatable/js/jquery.dataTables.min.js') }}
        {{ HTML::script('sentir/plugins/datatable/js/bootstrap.datatable.js') }}
        {{ HTML::script('sentir/plugins/summernote/summernote.min.js') }}
        {{ HTML::script('sentir/plugins/markdown/markdown.js') }}
        {{ HTML::script('sentir/plugins/markdown/to-markdown.js') }}
        {{ HTML::script('sentir/plugins/markdown/bootstrap-markdown.js') }}
        {{ HTML::script('sentir/plugins/slider/bootstrap-slider.js') }}
        <!-- EASY PIE CHART JS -->
        {{ HTML::script('sentir/plugins/easypie-chart/easypiechart.min.js') }}
        {{ HTML::script('sentir/plugins/easypie-chart/jquery.easypiechart.min.js') }}
        <!-- KNOB JS -->
        <!--[if IE]>
        {{ HTML::script('sentir/plugins/jquery-knob/excanvas.js') }}
        <![endif]-->
        {{ HTML::script('sentir/plugins/jquery-knob/jquery.knob.js') }}
        {{ HTML::script('sentir/plugins/jquery-knob/knob.js') }}
        <!-- FLOT CHART JS -->
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.js') }}
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.tooltip.js') }}
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.resize.js') }}
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.selection.js') }}
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.stack.js') }}
        {{ HTML::script('sentir/plugins/flot-chart/jquery.flot.time.js') }}
        <!-- MORRIS JS -->
        {{ HTML::script('sentir/plugins/morris-chart/raphael.min.js') }}
        {{ HTML::script('sentir/plugins/morris-chart/morris.min.js') }}
        <!-- C3 JS -->
        {{ HTML::script('sentir/plugins/c3-chart/d3.v3.min.js') }}
        {{ HTML::script('sentir/plugins/c3-chart/c3.min.js') }}
        <!-- MAIN APPS JS -->
        {{ HTML::script('sentir/js/apps.js') }}
    </body>

</html>