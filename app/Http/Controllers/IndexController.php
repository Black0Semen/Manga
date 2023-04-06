<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Team;
use App\Models\User;
use App\Models\ComicType;
use App\Models\UserTeam;
use App\Models\ComicTeam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends Controller
{
    public function mainShow(){
        $comic = Comic::all();

        return view('home', ['comic'=>$comic]);
    }

    public function order(){
        return view('order');
    }
    public function feedback_panel(){
        return view('feedback_panel');
    }
    public function ConsOfApp(){
        return view('ConsOfApp');
    }
    public function Catalog(){
        return view('Catalog');
    }
    public function top(){
        return view('top');
    }

    public function search(){
        return view('search');
    }

    public function Zakladki(){
        return view('Zakladki');
    }
    public function comics(){
        return view('comics');
    }
    public function team_page(){
        return view('team_page');
    }
    public function findSomeThing(Request $request){
        $input = $request->title;
        $comics = Comic::WHERE("title","=",$input)->get();
        $teams = Team::WHERE("title", "=", $input)->get();
        
        return view('search', ['answer'=>$comics, 'teams'=>$teams]);
    }

    public function userShow($id){
        $user = User::WHERE("id","=",$id)->get();

        return view('user_cab',['user'=>$user]);
    }

    public function ruleShow(){
        return view('rules');
    }
    
    public function comicPage($id){
        //$requestJoin = Course::JOIN('language', 'courses.language_id', '=', 'language.id')->WHERE('language.id', '=', "$language")->orderBy('user_id', 'DESC')->get();      
        $comic = Comic::WHERE('id_comic','=',$id)->get();

        return view('comic_page',['comic'=>$comic   ]);
    }

    public function teamShow($id){
        $team = Team::WHERE('id_team','=',$id)->get();
        $users = UserTeam::WHERE('id_team','=',$id)->get();

        return view('team', ['team'=>$team, 'users'=>$users]);
    }

    public function addComic(){
        return view('add_comic');
    }
}
