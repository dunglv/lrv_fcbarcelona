@extends ('layouts.master')
@section ('title', 'List all articles')
@section ('partial_style')
    {!! HTML::style('stylesheet/articles.css') !!}
@stop

@section ('content')
    <section id="fc_list_articles">
        <div class="inner">
           <div id="left_content">
                <div class="title-section">
                   <a href="{{ URL::to('list-article') }}">NEWS</a>
               </div>
               <div class="content-section">
                   <div id="hot_articles" class="latest-news">
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
                       </div>
                   </div>
                  <!--  @foreach($list_cate as $c)
                    <div class="section-articles">
                       <div class="title-cate">
                           <a href="{{ URL::to('categories/'.$c->catename.$c->id) }}">{{ $c->catename }}</a>
                       </div> -->
                        @foreach($articles as $a)
                           <div class="cate-article">
                               <div class="c-title-article">
                                   <a href="{{ URL::to($a->alias.'.'.$a->id) }}">{{ $a->title }}</a>
                               </div>
                               <div class="c-desc-article">
                                    {{ $a->description }}
                               </div>
                               <div class="c-infor-article">
                                   <div class="c-author"><a href="">{{ $a->id_user }}</a></div>
                                   <div class="c-date-create"><a href="">{{ $a->date_created }}</a></div>
                                   <div class="c-tags"><a href="">{{ $a->tags }}</a></div>
                               </div>
                           </div>
                        @endforeach
                       <div class="loading-more"><a href="">See all post</a></div>
                   <!-- </div>
                   @endforeach -->
               </div>
           </div> <!-- end left content-->
           <div id="right_content">
               <div class="hot section-right">
                   <div class="list-title-section">HOT ARTICLES</div>
                   <div class="list-section">
                       <div class="ever-section">
                           <a href="">Lorem ipsum dolor sit amet.</a>
                       </div>
                       <div class="ever-section">
                           <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                       </div>
                       <div class="ever-section">
                           <a href="">Lorem consectetur adipisicing.</a>
                       </div>
                       <div class="ever-section">
                           <a href="">Lorem ipsum dolor sit amet.</a>
                       </div>
                   </div>
               </div>
               <div class="ad section-right">
                   <a href="">{!! HTML::image('images/ads/ads_01.jpg', 'Lorem ipsum dolor.') !!}</a>
               </div>
           </div>
        </div>
    </section>
@stop 