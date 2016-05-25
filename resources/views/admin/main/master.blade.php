<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    {!! HTML::style('/stylesheet/bootstrap.min.css') !!}
    {!! HTML::style('/stylesheet/font-awesome.min.css') !!}
    {!! HTML::style('/stylesheet/admin/categories.css') !!}
    {!! HTML::style('/stylesheet/admin/index.css') !!}
</head>
<body>
    <div class="container nav-top" style="width: 100%;">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">{!! HTML::image('/images/site/fc-icon.png') !!}</a>
                    </div>
            
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"> <i class="fa fa-globe"></i> Visit Website</a></li>
                            <li><a href="#"><i class="fa fa-plus-circle"></i> New Article</a></li>
                            <li><a href="#"><i class="fa fa-building"></i> New Categories</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="a-alerts" href="#"><i class="fa fa-bell-o"></i><span>99+</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-info"></i> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-history"></i> Log Access</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </div> <!-- end nav-top -->
    <section id="stat_pannel">
        @include('admin.main.stat_top')
    </section>
    <section id="main_pannel" class="container main-pannel">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="left-pannel">
                        <div class="left-menu">
                            @include('admin.main.left_menu')
                        </div>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="right-pannel">
                    @include('admin.main.home')
                </div>
            </div>
        </div>
    </section>
    <section id="shopping_pannel" class="container shopping-pannel">
        @include('admin.main.shopping_home')
    </section>
    <footer>
        Copyright fcbarcelona&copy;2016 - Powerd by <a href="{!! URL::to('http://dung.site40.net') !!}" target="_blank">Dung</a>
    </footer>
    {!! HTML::script('/script/jquery.min.js') !!}
    {!! HTML::script('/script/bootstrap.min.js') !!}
</body>
</html>