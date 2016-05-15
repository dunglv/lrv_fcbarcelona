
<div id="nav_top" class="nav-top">
   <div class="inner">
        <ul class="nav left-nav">
           <li><a href="{{ URL::to('/') }}">{!! HTML::image('images/site/fc-icon.png', 'Lorem ipsum dolor sit.') !!}</a></li>
           <li><a href="">Home</a></li>
           <li><a href="">News</a></li>
           <li><a href="">Shop</a></li>
           <li><a href="">Libraries <i class="fa fa-angle-down"></i></a>
               <ul class="bc-dropdown">
                   <li><a href="">Wallpaper</a></li>
                   <li><a href="">Video</a></li>
                   <li><a href="">Games</a></li>
               </ul>
           </li>
           <li><a href="">Contact</a></li>
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
