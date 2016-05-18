@extends ('layouts.master')
@section ('style')
    {!! HTML::style('stylesheet/articles.css') !!}
@stop
@section ('content')
    @if(count($article) > 0)
    @foreach ($article as $a)
        @section ('title',  $a->title) {{--Get this title for page--}}
        <div id="section_detail">
            <div class="dt-title-article">
                <h1>{{ $a->title }}</h1>
            </div>
            <div class="dt-categori">
                In category: <strong><a href="{{ URL::to('category/'.$a->article_category->catename.'.'.$a->article_category->id) }}">{{ $a->article_category->catename }}</a></strong>
            </div>
            <div class="dt-infor-article">
                <div class="dt-author">
                    <i class="fa fa-user"></i><a href="{{ URL::to('member/'.$a->article_member->username) }}">{{ $a->article_member->username }}</a>
                </div>
                <div class="dt-date-created">
                    <i class="fa fa-calendar"></i>{{ $a->date_created }}
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
               <div class="dt-tags">
                    Tags: {{ $a->tags }}
                </div>
                @if($same_articles->count() > 0)
                <div class="dt-same">
                    <div class="dt-title-article">In same category</div>
                    <ul>
                        @foreach($same_articles as $sa)
                            <li><a href="{{ URL::to($sa->alias.'.'.$sa->id) }}">{{ $sa->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
           </div>
        </div>
    @endforeach
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">.<i class="fa fa-chevron-left"></i> Back home</button>
            <strong>Whoop!</strong> The article that you are looking not found.
        </div>
    @endif
@stop