
<div id="nav_top" class="nav-top">
   <div class="inner">
        <ul class="nav left-nav">
          <?php  $active="class='active'"; ?>
           <li><a href="{{ URL::to('/') }}">{!! HTML::image('images/site/fc-icon.png', 'Lorem ipsum dolor sit.') !!}</a></li>
           <li><a <?php if(\Request::route()->getName()=="article.index") echo $active; ?> href="{{ route('article.index') }}">News</a></li>
           <li><a <?php if(\Request::route()->getName()=="shop.index") echo $active; ?> href="">Shop</a></li>
           <li><a href="">Libraries <i class="fa fa-angle-down"></i></a>
               <ul class="bc-dropdown">
                   <li><a href="">Wallpaper</a></li>
                   <li><a href="">Video</a></li>
                   <li><a href="">Games</a></li>
               </ul>
           </li>
           <li><a <?php if(\Request::route()->getName()=="contact.index") echo $active; ?> href="">Contact</a></li>
       </ul>
       <div class="right-nav">
           <ul>
               <li class="btn-search"><a href="#"><i class="fa fa-search"></i></a>
                  <div class="form-search bc-dropdown">
                    {!! Form::open(array('method'=>'get', 'url' => 'search')) !!}
                    {!! Form::text('keysearch', null,   array('placeholder'=>'Key search...')) !!}
                    <button type="submit" >
                        <i class="fa fa-search"></i>
                    </button>
                    {!! Form::close() !!}
                  </div>
               </li>
               <li><a href="">Sign in</a></li>
               <li><a href="">Login <i class="fa fa-angle-down"></i></a></li>
           </ul>
       </div>
   </div>
</div>
