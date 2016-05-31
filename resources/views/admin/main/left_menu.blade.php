<div class="form-search">
    <form action="" method="POST" role="form">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default btn-searcn" type="submit"><i class="fa fa-search"></i></button>
              </span>
        </div><!-- /input-group -->
    </form>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<ul class="nav nav-vertical">
    <li class="a-nit" ><a href="#"><i class="fa fa-cart-plus"></i> Categories<i class="fa a-show fa-angle-down"></i></a>
        <ul class="sub-menu-ver">
            <li><i class="fa fa-plus-square"></i> <a href="#">Add new</a></li>
            <li><i class="fa fa-th-list"></i> <a href="#">Manages</a></li>
            <li><i class="fa fa-bar-chart-o"></i> <a href="#">Statistic</a></li>
            <li><i class="fa fa-bitbucket"></i> <a href="#">Trash</a></li>
        </ul>
    </li>
    <li class="a-nit"><a href="#"><i class="fa fa-file-text-o"></i> Articles<i class="fa a-show fa-angle-down"></i></a>
        <ul class="sub-menu-ver">
            <li><i class="fa fa-plus-square"></i> <a href="{{ route('a.article.create') }}">Add new</a></li>
            <li><i class="fa fa-th-list"></i> <a href="#">Manages</a></li>
            <li><i class="fa fa-bar-chart-o"></i> <a href="#">Statistic</a></li>
            <li><i class="fa fa-bitbucket"></i> <a href="#">Trash</a></li>
        </ul>
    </li>
    <li class="a-nit"><a href="#"><i class="fa fa-users"></i> Members<i class="fa a-show fa-angle-down"></i></a>
        <ul class="sub-menu-ver">
            <li><i class="fa fa-user-secret"></i> <a href="#">Author</a></li>
            <li><i class="fa fa-th-list"></i> <a href="#">Manages</a></li>
            <li><i class="fa fa-bar-chart-o"></i> <a href="#">Statistic</a></li>
            <li><i class="fa fa-bitbucket"></i> <a href="#">Trash</a></li>
        </ul>
    </li>
    <li class="a-nit"><a href="#"><i class="fa fa-users"></i> Administrator<i class="fa a-show fa-angle-down"></i></a>
        <ul class="sub-menu-ver">
            <li><i class="fa fa-user-secret"></i> <a href="#">Log</a></li>
            <li><i class="fa fa-th-list"></i> <a href="#">Profile</a></li>
            <li><i class="fa fa-bar-chart-o"></i> <a href="#">Links</a></li>
            <li><i class="fa fa-bitbucket"></i> <a href="#">Author</a></li>
        </ul>
    </li>
</ul>