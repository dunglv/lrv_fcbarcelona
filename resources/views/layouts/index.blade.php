@extends ('layouts.master')
@section ('title', 'Trang chủ FC Barcelona')
@section ('content')
<section id="fc_news">
    <div class="inner">
        <div class="title-section">
            <a href="{{ URL::to('list-all-article') }}">NEWS</a>
        </div>
        <div class="content-section">
            <div class="latest-news">
                <div class="main-news col-part">
                    <div class="inner">
                        <div class="thumbnail-main">
                            <a href="#">
                               {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor.') !!}
                            </a>
                        </div>
                        <div class="content-main-news">
                            <div class="title-news">
                                <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, ipsam.</a></h2>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias itaque ratione a voluptates, ipsa ipsum reprehenderit totam culpa vitae. Voluptatem. <a href="">Readmore</a>
                            </div>
                            <div class="infor-news">
                                <div class="datetime"><span>Created:</span>10/00/2015 00:00</div>
                                <div class="author"><span>Author:</span>admin</div>
                                <div class="category"><span>Category:</span>Lorem ipsum dolor sit amet.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-news col-part">
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div>
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div>
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div> <!-- end fc-row -->
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div> <!-- end fc-row -->
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div> <!-- end fc-row -->
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div> <!-- end fc-row -->
                    <div class="fc-row">
                        <div class="col-part left-part">
                            <div class="thumbnail-news">
                                {!! HTML::image('images/uploads/noucamp.jpg', 'Lorem ipsum dolor sit.') !!}
                            </div>
                        </div>
                        <div class="col-part right-part">
                            <div class="title-news">
                                <h4>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rerum.</a>
                                </h4>
                            </div>
                            <div class="desc-news">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus mollitia, rerum. Non fuga dolores dolor ducimus dolorum laboriosam deleniti perferendis!
                            </div>
                        </div>
                    </div> <!-- end fc-row -->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fc_players">
    <div class="title-section"><a href="#">PLAYERS</a></div>
    <div class="inner">
        <div class="fc-list-players">
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/10_messi.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">10</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Leonel Messi</a></div>
                        <div class="position-player">Forward</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/10_messi.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">10</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Leonel Messi</a></div>
                        <div class="position-player">Forward</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/01_ter_stegen.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">01</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Ter Stegen</a></div>
                        <div class="position-player">Goalkeeper</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/04_rakitic.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">4</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Ivan Rakitic</a></div>
                        <div class="position-player">Midfielder</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/05_busquets.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">5</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Sergio Busquets</a></div>
                        <div class="position-player">Midfielder</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/08_iniesta.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">8</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Andrés Iniesta</a></div>
                        <div class="position-player">Midfielder</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/09_suarez.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">9</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Luis Alberto Suárez</a></div>
                        <div class="position-player">Forward</div>
                    </div>
                </div>
            </div> <!-- end item player -->
            <div class="fc-item col-part">
                <div class="fc-avatar">
                    {!! HTML::image('images/players/11_neymar.jpg', 'Lorem ipsum dolor sit.') !!}
                </div>
                <div class="fc-name-player">
                    <div class="number col-part">
                        <div class="inner-number">11</div>
                    </div>
                    <div class="right-part col-part">
                        <div class="name-player"><a href="#">Neymar Jr.</a></div>
                        <div class="position-player">Forward</div>
                    </div>
                </div>
            </div> <!-- end item player -->
        </div>
    </div>
</section>
<section id="fc_shop">
    <div class="title-section">
        <a href="#">SHOP</a>
    </div>
    <div class="inner">
        <div class="list-products">
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                            <strike>$100.00</strike>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                            <strike>$100.00</strike>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fc_gallery">
    <div class="title-section">
       <a href="#"> GALLERY</a>
    </div>
    <div class="inner">
        <div class="list-gallery">
            <div class="main-col col-part">
                <div class="inner-gall">
                    <div class="thumbnail-gall">
                        {!! HTML::image('images/gallery/mains/main_01.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="desc-gall">
                            <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end main-col -->
            <div class="table-col col-part">
                <div class="row-gall fc-cover">
                    <div class="thumbnail-gall">
                        {!! HTML::image('images/gallery/cover/cover_01.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="desc-gall">
                            <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                        </div>
                    </div>
                </div>
                <div class="row-gall">
                    <div class="first-col col-part">
                        <div class="thumbnail-gall">
                            {!! HTML::image('images/gallery/grid/grid_01.jpg', 'Lorem ipsum dolor sit.') !!}
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                    <div class="second-col col-part">
                        <div class="thumbnail-gall">
                            {!! HTML::image('images/gallery/grid/grid_02.jpg', 'Lorem ipsum dolor sit.') !!}
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end table col-->
            <!-- <div class="grid-col col-part"> 
                <div class="row-gall">
                    <div class="first-col col-part">
                        <div class="thumbnail-gall">
                            <img src="images/gallery/news/01.jpg" alt="">
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                    <div class="second-col col-part">
                        <div class="thumbnail-gall">
                            <img src="images/gallery/news/02.jpg" alt="">
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-gall">
                    <div class="first-col col-part">
                        <div class="thumbnail-gall">
                            <img src="images/gallery/news/01.jpg" alt="">
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                    <div class="second-col col-part">
                        <div class="thumbnail-gall">
                            <img src="images/gallery/news/02.jpg" alt="">
                            <div class="desc-gall">
                                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iste.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section>
<section id="fc_partners">
    <ul class="inner">
        <li><a href="#">{!! HTML::image('images/site/logo_audi.png', 'Lorem ipsum dolor sit.') !!}</a></li>
        <li><a href="#">{!! HTML::image('images/site/logo_beko.png', 'Lorem ipsum dolor sit.') !!}</a></li>
        <li><a href="#">{!! HTML::image('images/site/logo_estrella.png', 'Lorem ipsum dolor sit.') !!}</a></li>
        <li><a href="#">{!! HTML::image('images/site/logo_nike.png', 'Lorem ipsum dolor sit.') !!}</a></li>
        <li><a href="#">{!! HTML::image('images/site/logo_qata.png', 'Lorem ipsum dolor sit.') !!}</a></li>
    </ul>
</section>

@endsection