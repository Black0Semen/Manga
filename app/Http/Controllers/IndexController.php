<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Team;
use App\Models\Posts;
use App\Models\User;
use App\Models\Glava;
use App\Models\Photo;
use App\Models\ComicTags;
use App\Models\ComicType;
use App\Models\ComicJanr;
use App\Models\ComicOgr;
use App\Models\ComicJanr;
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
        $new = Comic::orderBy('created_at','DESC')->limit(5)->get();

        return view('home', ['comic'=>$comic,'lastUpdated'=>$lastUpdated, 'new'=>$new, 'popular'=>$popular]);
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
    public function top(){
        return view('top');
    }

    public function Zakladki(){
        return view('Zakladki');
    }

    public function pravila(){
        return view('pravila');
    }

    public function ShowReplaceTeams(){
        return view('ShowReplaceTeams');
    }

    public function ShowReplaceGlava(){
        return view('ShowReplaceGlava');
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

    public function Catalog(){
        $comics = Comic::get();
        return view('Catalog',['comics'=>$comics]);
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
        $title = str_slug($title, ' ');
        $comic = Comic::WHERE('eng_title','ILIKE', $title)->get();
        $views_count = 0;

        return view('comic_page',['comic'=>$comic]);
    }


    public function addComicShow(){
        return view('ShowAddComics');
    }

    public function addComic(Request $request){
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('uploads',$imageName, 'public');  
        $array = $request->input('janrChoose');
        $tags = $request->input('tagsChoose');

        DB::table('comic')->insert(['opisanie'=>$request->opisanie,'title'=>$request->title, 'orig_title'=>$request->original_title,'eng_title'=>$request->eng_title,
        'date'=>$request->date, 'id_type'=>$request->type,'status'=>$request->status, 'team'=>$request->team,'id_ogr'=>$request->ogr,
        'on_moderation'=>1,'rating'=>10,'image'=>$imageName]);
        $id = DB::getPdo()->lastInsertId();

        
        foreach($array as $value){
            DB::table('comic_janr')->insert(['id_comic'=>$id,'janr'=>$value]);
        };
        foreach($tags as $value){
            DB::table('comic_tags')->insert(['id_comic'=>$id,'tag'=>$value]);
        };
        
        return redirect('/');
    }
    public function editComic($title){
        $title = str_slug($title, ' ');
        $comic = Comic::WHERE('eng_title','ILIKE', $title)->get();
        $alljanr = ComicJanr::WHERE('id_comic','=',$comic->value('id_comic'))->get('janr');
        $alltags = ComicTags::WHERE('id_comic','=',$comic->value('id_comic'))->get('tag');
        foreach($alljanr as $val){
            $array[] = $val->janr;
        }
        foreach($alltags as $val){
            $array2[] = $val->tag;
        }
        if($array && $array2 != null){
            return view('ShowReplaceComics',['comic'=>$comic,'alljanr'=>$array,'alltags'=>$array2]);
        }
        else{
            return view('ShowReplaceComics',['comic'=>$comic,'alljanr'=>null,'alltags'=>null]);
        }
    }

    public function teamShow($id){
        $team = Team::WHERE('id_team','=',$id)->get();
        $users = UserTeam::WHERE('id_team','=',$id)->get();

        return view('team', ['team'=>$team, 'users'=>$users]);
    }

    public function addTeamShow(){
        return view('ShowAddTeams');
    }

    public function addTeam(Request $request){
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('teams',$imageName, 'public');  

        DB::table('translate_team')->insert(['opisanie'=>$request->opisanie, 'title'=>$request->title, 'image'=>$imageName, 'status'=>0,'social_vk'=>$request->social_vk]);

        return redirect('/');
    }

    public function glavaView($title,$id){
        $title = str_slug($title, ' ');
        $comic = Comic::WHERE('eng_title','ILIKE',$title)->get();
        $photo = Photo::WHERE('id_glava','=',$id)->get();
        $glava = Glava::WHERE('id_glava','=',$id)->get();
        $team_name = Comic::WHERE('eng_title','ILIKE',$title)->value('team');
        $team = Team::WHERE('title','=',$team_name)->get();
        //dd($team);

        return view('ComicsShowStr',['photo'=>$photo,'title'=>$title, 'id'=>$id,'team'=>$team, 'glava'=>$glava, 'comic'=>$comic]);
    }

    public function addGlavaShow($title){
        $title = str_slug($title, ' ');
        $comic = Comic::WHERE('eng_title','ILIKE',$title)->get();
        return view('ShowAddGlava',['comic'=>$comic]);
    }

    public function addGlava(Request $request, $title){        
        $title = str_slug($title,' ');
        $comicId = Comic::WHERE('eng_title','ILIKE',$title)->value('id_comic');

        DB::table('glava')->insert(['title'=>$request->title,'tom'=>$request->tom,'id_comic'=>$comicId,'number'=>$request->number]);
        $id = DB::getPdo()->lastInsertId();
        
        foreach($request->file('image') as $value){
            $value->storeAs('glava/'. $title . "/".$id,$value->getClientOriginalName(), 'public');  
            $names[] = $value->getClientOriginalName();
        }
        
        foreach($names as $value){
            DB::table('photo')->insert(['id_glava'=>$id,'photo'=>$value]);
        }

        return redirect('/');
    }
}
