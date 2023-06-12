<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\category;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
class ControllerCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($categoryid){
        $Song = DB::table('song')
        ->where('category_id', 'LIKE', $categoryid)
        ->get();
        $Category = DB::table('category')
        ->where('id', '=', $categoryid)
        ->get();
        
        return view('category/category', compact('Song', 'Category'));
    }
    public function index()
    {
        $Category = category::all();
        return view('category/index', compact('Category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category/create');
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
            $validator = Validator::make($request->all(), 
            ['name'=> 'required']);
            if($validator ->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $newCategory = new category();
            $newCategory ->name = $request->name;
            $newCategory->save();
            return redirect()->route('category.index')->with('success', 'Category created successfully.');

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
        // $song = DB::table('category')->join('song', 'category.id', '=', 'song.category_id')->select('song.name', 'description','img','name_singer')->get();
        // return view('category/category', ['song'=>$song]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Category = category::find($id);
        return view('category/edit', compact('Category'));
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
            $validator = Validator::make($request->all(), 
            ['name'=> 'required']);
            if($validator ->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $newCategory = category::find($id);
            $newCategory ->name = $request->name;
            $newCategory->save();

            return redirect()->route('category.index')->with('success', 'Category created successfully.');
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
