<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Team;
use App\Models\User;
use App\Models\Glava;
use App\Models\Photo;
use App\Models\ComicTags;
use App\Models\ComicType;
use App\Models\ComicOgr;
use App\Models\Tags;
use App\Models\Janr;
use App\Models\ComicStatus;
use App\Models\UserTeam;
use App\Models\ComicTeam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;

class IndexController extends Controller
{
    public function mainShow(){
        $comic = Comic::all();
        $lastUpdated = Glava::JOIN('comic','glava.id_comic','=','comic.id_comic')->orderBy('glava.updated_at','DESC')->get();

        return view('home', ['comic'=>$comic,'lastUpdated'=>$lastUpdated]);
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

    public function pravila(){
        return view('pravila');
    }

    public function ShowAddTeams(){
        return view('ShowAddTeams');
    }

    public function ShowAddGlava(){
        return view('ShowAddGlava');
    }

    public function ShowAddComics(){
        return view('ShowAddComics');
    }

    public function ShowReplaceTeams(){
        return view('ShowReplaceTeams');
    }

    public function ShowReplaceGlava(){
        return view('ShowReplaceGlava');
    }

    public function ShowReplaceComics(){
        return view('ShowReplaceComics');
    }

    public function Notification(){
        return view('Notification');
    }

    public function ComicsShowStr(){
        return view('ComicsShowStr');
    }

    public function ziavka(){
        return view('ziavka');
    }
    public function Admins(){
        return view('Admins');
    }
    public function Settings(){
        return view('Settings');
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
        $tags = ComicTags::WHERE('id_comic','=',$id)->get();
        //$team = ComicTeam::WHERE('id_comic', '=',$id)->get();

        return view('comic_page',['comic'=>$comic,'tags'=>$tags]);
    }

    public function teamShow($id){
        $team = Team::WHERE('id_team','=',$id)->get();
        $users = UserTeam::WHERE('id_team','=',$id)->get();

        return view('team', ['team'=>$team, 'users'=>$users]);
    }

    public function addComicShow(){
        return view('comic_add');
    }

    public function addComic(Request $request){
        DB::table('comic')->insert(['opisanie'=>$request->opisanie,'title'=>$request->title, 'date'=>$request->date, 
        'id_type'=>$request->type,'status'=>$request->status, 'team'=>$request->team,'id_janr'=>$request->janr,'id_ogr'=>$request->ogr,
        'on_moderation'=>1,'rating'=>10,'image'=>1]);
        
        $id = DB::getPdo()->lastInsertId();
        DB::table('comic_tags')->insert(['tag'=>$request->tags, 'id_comic'=>$id]);
        $idTag = DB::getPdo()->lastInsertId();
        DB::table('comic')->where('id_comic',$id)->update(['id_tag'=>$idTag]);
        
        return redirect('/');
    }

    public function addTeamShow(){
        return view('team_add');
    }

    public function addTeam(Request $request){
        DB::table('translate_team')->insert(['opisanie'=>$request->opisanie, 'title'=>$request->title]);

        return redirect('/');
    }

    public function glavaView($id){
        $photo = Photo::WHERE('id_glava','=',$id)->get();


        return view('glava',['photo'=>$photo]);
    }
}
