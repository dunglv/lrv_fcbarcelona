@extends ('layouts.master')
@section ('partial_style')
    {!! HTML::style('stylesheet/articles.css') !!}
@stop
@section('content')
<section id="fc_list_articles">
        <div class="inner">
           <div id="left_content">
               <div class="content-section">
                    @foreach($list_in_cate as $c)
                    @section ('title', $c->catename)
                    <div class="section-articles">
                       <div class="title-cate">
                           <a href="{{ URL::to('categories/'.$c->catename.$c->id) }}">{{ $c->catename }}</a>
                       </div>
                        @foreach($c->articles_this as $a)
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
                       <div class="loading-more"><a href="">Loading more</a></div>
                   </div>
                   @endforeach
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