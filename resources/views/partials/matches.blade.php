<?php 
use App\Match;
$matches = Match::orderBy(DB::raw('RAND()'))->take(1)->get();

 ?>
@foreach ($matches as $m)
<div id="matches">
    <div class="inner">
        <div class="infor-match">
            <div class="league">{{ $m->league }}</div>
            <div class="time">{{ $m->datetime_start }}</div>
        </div>
        <div class="team">
            <div class="t-left">
                <div class="team-inf _ver">
                    {!! HTML::image('images/site/fc-icon.png', 'Lorem ipsum dolor sit.') !!}
                    <span>FC BARCALONA</span>
                </div>
                <div class="score">?</div>
            </div>
            <div class="t-right">
                <div class="score">?</div>
                <div class="team-inf _ver">
                    <span>FC {{ $m->team }}</span>
                    {!! HTML::image('images/matches/realmarid.png', 'Lorem ipsum dolor sit.') !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
