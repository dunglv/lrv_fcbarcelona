<?php
namespace App\Http\Composers;
use App\Match;
use Illuminate\Contracts\View\View;
use DB;
class MatchesComposer{
    public function compose(View $view)
    {
        $matches = Match::orderBy(DB::raw('RAND()'))->take(1)->get();
        $view->with('matches', $matches);
    }
}