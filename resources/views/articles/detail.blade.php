@extends ('layouts.master')
@section ('partial_style')
    {!! HTML::style('stylesheet/articles.css') !!}
@stop
@section ('content')
    @foreach ($article as $a)
    @section ('title',  $a->title)

        <div id="section_detail">
            <div class="dt-title-article">
                <h1>{{ $a->title }}</h1>
            </div>
            <div class="dt-categori">
                In category: <strong><a href="{{ URL::to('category/'.$a->article_category->catename.'.'.$a->article_category->id) }}">{{ $a->article_category->catename }}</a></strong>
            </div>
            <div class="dt-infor-article">
                <div class="dt-author">
                    <a href="{{ URL::to('member/'.$a->article_member->username) }}">User: {{ $a->article_member->username }}</a>
                </div>
                <div class="dt-date-created">
                    {{ $a->date_created }}
                </div>
                <div class="dt-tags">
                    {{ $a->tags }}
                </div>
            </div>
           <div class="dt-main-content">
                <div class="dt-description">
                   <div class="dt-text-desc">{{ substr($a->description, 0, 100) }}</div>
               </div>

               <div class="dt-content">
                   <div class="dt-share">
                       <div class="share fb"><a href="" title="Share on Facebook"><i class="fa fa-facebook"></i></a></div>
                       <div class="share tw"><a href="" title="Share on Twitter"><i class="fa fa-twitter"></i></a></div>
                       <div class="share gg"><a href="" title="Share on Google+"><i class="fa fa-google-plus"></i></a></div>
                   </div>
                   <div class="dt-text-content">{{ $a->content }}</div>
               </div>
           </div>
        </div>
    @endforeach
@stop