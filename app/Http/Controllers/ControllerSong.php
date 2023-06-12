<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use App\Models\singer;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
class ControllerSong extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchsong(){
        $items = DB::table('song')
        ->where('name', 'like', '')
        ->get();
    }
    public function showsong($id){
        $Song = song::find($id);

        return view('home.show', compact('Song', 'Category'));
    }
    public function index()
    {
        $Song = song::all();
        return view('song/index', compact('Song'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeuser(){
        $Category = category::all();
        
        $Song = song::all();
        return view('home/homeuser', compact('Song', 'Category'));
    }
    public function create()
    {
        $Category = category::all();
        $Singer = singer::all();
        return view('song/create', compact('Singer', 'Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $validator= Validator::make($request->all(),[
                'name' => 'required',
                'img'=>'required|image|mimes:jpg,jpeg,png|max:1000',
                'description'=>'required',
                'singername'=>'required',
                'singerid'=>'required',
                'category'=>'required',
                'categoryid'=>'required',
                'filemp3'=>'required|file|mimes:mp3|max:500000'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if($request->hasfile('img')){
                $file = $request->file('img');
              
                $path = public_path('image/song');
                $filename = time() . '_' . $file->getClientOriginalName();
               
                $file->move($path, $filename);
            }
            else{
                $filename = 'noname';
            }
            if($request->hasfile('filemp3')){
                $file_mp3 = $request->file('filemp3');
                $path_mp3 = public_path('audio/song');
                $filename_mp3 = time() . '_' . $file_mp3->getClientOriginalName();
                $file_mp3->move($path_mp3, $filename_mp3);
            }
            else{
                $filename_mp3='noname';
            }

            $newSong = new song();
            $newSong->name = $request->name;
            $newSong->description = $request->description;
            $newSong->file_mp3 = $filename_mp3;
            $newSong->img = $filename;
            $newSong->name_singer=$request->singername;
            $newSong->singer_id=$request->singerid;
            $newSong->category_id=$request->categoryid;
            $newSong->category = $request->category;
            $newSong->save();
            return redirect()->route('song.index')->with('Success', 'Singer create successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Song = song::find($id);
        
        return view('song.show', compact('Song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Song = song::find($id);
        $Category = category::all();
        $Singer = singer::all();
        return view('song.edit', compact('Song', 'Category', 'Singer'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->isMethod('POST')){
            $validator= Validator::make($request->all(),[
                'name' => 'required',
                'img'=>'required|image|mimes:jpg,jpeg,png|max:1000',
                'description'=>'required',
                'singername'=>'required',
                'singerid'=>'required',
                'category'=>'required',
                'categoryid'=>'required',
                'filemp3'=>'required|file|mimes:mp3|max:500000'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if($request->hasfile('img')){
                $file = $request->file('img');
              
                $path = public_path('image/song');
                $filename = time() . '_' . $file->getClientOriginalName();
               
                $file->move($path, $filename);
            }
            else{
                $filename = 'noname';
            }
            if($request->hasfile('filemp3')){
                $file_mp3 = $request->file('filemp3');
                $path_mp3 = public_path('audio/song');
                $filename_mp3 = time() . '_' . $file_mp3->getClientOriginalName();
                $file_mp3->move($path_mp3, $filename_mp3);
            }
            else{
                $filename_mp3='noname';
            }

            $newSong = song::find($id);
            $newSong->name = $request->name;
            $newSong->description = $request->description;
            $newSong->file_mp3 = $filename_mp3;
            $newSong->img = $filename;
            $newSong->name_singer=$request->singername;
            $newSong->singer_id=$request->singerid;
            $newSong->category_id=$request->categoryid;
            $newSong->category = $request->category;
            $newSong->save();
            return redirect()->route('song.index')->with('Success', 'Singer create successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('song')->with('success', 'Record has been deleted successfully!');
    }
}
