<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\singer;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class ControllerSinger extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homesinger(){
        $Singer = singer::all();
        return view('singer/homesinger', compact('Singer'));
    }
    public function index()
    {
        $Singer = singer::all();
        return view('singer/index', compact('Singer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('singer/create');
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
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'imagesinger' => 'required|image|mimes:jpg,jpeg,png|max:1000',
            ]);
            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
            if($request->hasfile('imagesinger')){
                $file = $request->file('imagesinger');
                $path = public_path('image/singer');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);
            }
            // else {
            
            //     $fileName = 'noname.jpg';
                
            //     }

            $newSinger = new singer();
            $newSinger->name = $request->name;
            $newSinger->img = $filename;
            $newSinger->save();
            return redirect()->route('singer.index')->with('Success', 'Singer create successfully');

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Singer = singer::find($id);
        return view('singer/edit', compact('Singer'));
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
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'imagesinger' => 'required|image|mimes:jpg,jpeg,png|max:1000',
            ]);
            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
            if($request->hasfile('imagesinger')){
                $file = $request->file('imagesinger');
                $path = public_path('image/singer');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);
            }
            else {
            
                $fileName = 'noname.jpg';
                
                }

            $newSinger = singer::find($id);
            $newSinger->name = $request->name;
            $newSinger->img = $filename;
            
            $newSinger->save();
            return redirect()->route('singer.index')->with('Success', 'Singer create successfully');

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
        //
    }
}
