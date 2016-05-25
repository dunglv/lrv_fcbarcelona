@extends('layouts.master')
@section('style', HTML::style('/stylesheet/team.css'))
@section('head.title', 'Leonel Messi')
@section('content')
	<div id="section_team">
		<div class="team team-1">
			<div id="pl_1" class="player pl-1">
				<ul class="pl-infor">
					<li>
						<h1>Leonel Messi</h1>
						<div class="full-name">Lenel Messi</div>
					</li>
					<li>
						<div class="tit-pl">AGE</div>
						<div class="vl-pl">20</div>
					</li>
					<li>
						<div class="tit-pl">DATE OF BIRTH</div>
						<div class="vl-pl">10-10-1990</div>
					</li>
					<li>
						<div class="tit-pl">CITY</div>
						<div class="vl-pl">ARGENTINA</div>
					</li>
					<li>
						<div class="tit-pl">POSITION</div>
						<div class="vl-pl">FORWARD</div>
					</li>
					<li>
						<div class="tit-pl">WEIGHT</div>
						<div class="vl-pl">56kg</div>
					</li>
					<li>
						<div class="tit-pl">HEIGHT</div>
						<div class="vl-pl">1.7m</div>
					</li>
				</ul>
				<div class="pl-cover">
					
				</div>
			</div>
		</div>
	</div>
@stop