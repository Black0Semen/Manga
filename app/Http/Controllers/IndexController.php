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
    public function comic_page(){
        return view('comic_page');
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

    public function SettingsUser(){
        return view('SettingsUser');
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
    
    public function comicPage($title){
        //$requestJoin = Course::JOIN('language', 'courses.language_id', '=', 'language.id')->WHERE('language.id', '=', "$language")->orderBy('user_id', 'DESC')->get();  
        // str_slug - ссылки через тире
        $comic = Comic::WHERE('eng_title','=', $title)->get();

        return view('comic_page',['comic'=>$comic]);
    }

    public function teamShow($id){
        $team = Team::WHERE('id_team','=',$id)->get();
        $users = UserTeam::WHERE('id_team','=',$id)->get();

        return view('team', ['team'=>$team, 'users'=>$users]);
    }

    public function addComicShow(){
        return view('ShowAddComics');
    }

    public function addComic(Request $request){
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('uploads',$imageName, 'public');  
        $array = $request->input('janrChoose');

        DB::table('comic')->insert(['opisanie'=>$request->opisanie,'title'=>$request->title, 'orig_title'=>$request->original_title,'eng_title'=>$request->eng_title,
        'date'=>$request->date, 'id_type'=>$request->type,'status'=>$request->status, 'team'=>$request->team,'id_ogr'=>$request->ogr,
        'on_moderation'=>1,'rating'=>10,'image'=>$imageName]);
        $id = DB::getPdo()->lastInsertId();

        
        foreach($array as $value){
            DB::table('comic_janr')->insert(['id_comic'=>$id,'janr'=>$value]);
        };
        /*
        $id = DB::getPdo()->lastInsertId();
        DB::table('comic_tags')->insert(['tag'=>$request->tags, 'id_comic'=>$id]);
        */
        
        return redirect('/');
    }

    public function addTeamShow(){
        return view('ShowAddTeams');
    }

    public function addTeam(Request $request){
        DB::table('translate_team')->insert(['opisanie'=>$request->opisanie, 'title'=>$request->title]);

        return redirect('/');
    }

    public function glavaView($title,$id){
        $photo = Photo::WHERE('id_glava','=',$id)->get();
        $glava = Glava::WHERE('id_glava','=',$id)->get();
        $comic = Comic::WHERE('eng_title','=',$title)->get();
        $team_name = Comic::WHERE('eng_title','=',$title)->value('team');
        $team = Team::WHERE('title','=',$team_name)->get();
        //dd($team);

        return view('ComicsShowStr',['photo'=>$photo,'title'=>$title, 'id'=>$id,'team'=>$team, 'glava'=>$glava, 'comic'=>$comic]);
    }
    public function addGlavaShow($title){
        $comic = Comic::WHERE('eng_title','=',$title)->get();
        return view('ShowAddGlava',['comic'=>$comic]);
    }
    public function addGlava(Request $request, $title){        
        $number = $request->number;
        $comicId = Comic::WHERE('eng_title','=',$title)->value('id_comic');

        DB::table('glava')->insert(['title'=>$request->title,'tom'=>$request->tom,'id_comic'=>$comicId,'number'=>$number]);
        $id = DB::getPdo()->lastInsertId();

        foreach($request->file('image') as $value){
            $value->storeAs('glava/'. $title."/".$id,$value->getClientOriginalName(), 'public');  
            $names[] = $value->getClientOriginalName();
        }
        
        foreach($names as $value){
            DB::table('photo')->insert(['id_glava'=>$id,'photo'=>$value]);
        }

        return redirect('/');
    }
}
