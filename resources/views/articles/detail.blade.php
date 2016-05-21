@extends ('layouts.master')
@section ('style')
    {!! HTML::style('stylesheet/articles.css') !!}
@stop
@section ('content')
    @if(count($article) > 0)
      @foreach ($article as $a)
          @section ('title',  $a->title) {{--Get this title for page--}}
          <div id="article_{{$a->id}}" class="section-detail article-{{$a->id}}">
              <div class="dt-title-article">
                  <h1>{{ $a->title }}</h1>
              </div>
              <div class="dt-categori">
                  In category: <strong><a href="{{ URL::to('category/'.$a->article_category->catename.'.'.$a->article_category->id) }}">{{ $a->article_category->catename }}</a></strong>
              </div> <!-- end category -->
              <div class="dt-infor-article">
                  <div class="dt-author">
                      <i class="fa fa-user"></i><a href="{{ URL::to('member/'.$a->article_member->username) }}">{{ $a->article_member->username }}</a>
                  </div>
                  <div class="dt-date-created">
                      <i class="fa fa-calendar"></i>{{ $a->date_created }}
                  </div>
              </div> <!-- end infor article -->
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
                  @if(count($same_articles) > 0)
                  <div class="dt-same">
                      <div class="dt-title-article">In same category</div>
                      <ul>
                          @foreach($same_articles as $sa)
                              <li><a href="{{ URL::to($sa->alias.'.'.$sa->id) }}">{{ $sa->title }}</a></li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <div class="dt-comment">
                      <div class="dt-title-comment">Comments ({{ count($comments) }})</div>
                      @if(count($comments) > 0)
                      <ul class="list-main-comment">
                          @foreach($comments as $c)
                              <li id="a_{{$a->id}}_cmt_{{$c->id}}" class="comment comment-{{$c->id}}">
                                  <div class="top-comment">
                                      <span>{{ $c->date_time }}</span>
                                  </div>
                                  <div class="content-comment">
                                      <div class="left-cmt user-cmt">
                                          <a href="{{ URL::to('/member/'.$c->member->username) }}">{{ $c->member->username }}</a> says:
                                      </div>
                                      <div class="right-cmt txt-cmt">
                                          {{ $c->content }}
                                      </div>
                                  </div>
                              </li>
                          @endforeach
                      </ul>
                      @else
                        <div class="alert-comment">
                            Leave a comment
                        </div>
                      @endif
                  </div>
             </div> <!-- end main content -->
            <div class="discuss">
                <div class="form-discuss art_{{$a->id}}">
                    {!!
                        Form::open([
                            'route' => ['comment.store', $a->alias, $a->id],
                            'method' => 'POST',
                            'class' => 'form-inline'
                        ])
                    !!}
                    {!! Form::hidden('id_article', $a->id) !!}
                    {!! Form::hidden('slug', $a->alias) !!}
                    <div class="form-group">
                        {!! Form::textarea('content_comment', null, ['class'=>'form-control', 'rows'=>5, 'cols'=>'', 'style' => 'min-width: 300px;', 'placeholder'=>'Leave a comment']) !!}
                    </div>
                    <div class="form-group">
                        @if(count($errors) >0 )
                            <ul class="error-input">
                                <li class="tit-err">WHOOPS! Errors Problem</li>
                                @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Submit') !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
          </div> <!-- end section detail -->
      @endforeach
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">.<i class="fa fa-chevron-left"></i> Back home</button>
            <strong>Whoop!</strong> The article that you are looking not found.
        </div>
    @endif
@stop



