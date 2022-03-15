<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Character;
use Illuminate\Support\Facades\Session;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Characters";
        $characters = Character::orderBy('id','desc')->get();
        return view('/admin/characters/index',compact('title','characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Character";
        return view('/admin/characters/create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form
        $valid = $request->validate([
            'name' => 'required|string|min:2|max:32',
            'anime' => 'required|string|min:3|max:75',
            'genre' => 'required|string|min:3|max:255',
            'creator'=>'required|string|min:3|max:100',
            'body' => 'required|max:1000|min:15',
            'image'=> 'image:mimes:jpg,png',
        ]);

        // check with image


        if(!empty($valid['image']) && is_object($valid['image'])) {
            $file_name = $valid['image']->getClientOriginalName();
            $valid['image']->storeAs(
                'public',
                $file_name
            );
            $ch = [
                'name' => $valid['name'],
                'anime' => $valid['anime'],
                'genre' => $valid['genre'],
                'creator' => $valid['creator'],
                'body' => $valid['body'],
                'image' => $file_name,
            ];
        } else {
            $ch = [
                'name' => $valid['name'],
                'anime'=> $valid['anime'],
                'genre' => $valid['genre'],
                'creator' => $valid['creator'],
                'body' => $valid['body'],
            ];
        }


        // new character
        $char = Character::create($ch);

        // flash msg
        if(!empty($char->id)){
            Session::flash('success','Character was saved!');
        } else{
            Session::flash('error','There was a problem saving the Character');
        }

        // redirect

         return redirect('/admin/characters');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $char = Character::find($id);
        $title = "Edit Character";
        return view('/admin/characters/edit',compact('title','char'));
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
         // validated
         $valid = $request->validate([
            'name' => 'required|string|min:2|max:32',
            'anime' => 'required|string|min:3|max:75',
            'genre' => 'required|string|min:3|max:255',
            'creator'=>'required|string|min:3|max:100',
            'body' => 'required|max:1000|min:15',
            'image'=> 'image|mimes:jpg,png',
         ]);

        // Save updated record
        $char = Character::find($id);

        // Update image field if an image was uploaded
        if(!empty($valid['image']) && is_object($valid['image'])) {
             $file_name = $valid['image']->getClientOriginalName();
             $valid['image']->storeAs(
                'public',
                $file_name
             );
             $char->image = $file_name;
        }

        // Update the rest of the fields
        $char->name = $valid['name'];
        $char->anime = $valid['anime'];
        $char->genre = $valid['genre'];
        $char->creator = $valid['creator'];
        $char->body = $valid['body'];

        // Set Flash Messages
        if($char->save()) {
            Session::flash('success', 'Character was saved!');
        } else {
            Session::flash('error', 'Character was NOT saved!');
        }

        // Redirect to Character List
        return redirect('/admin/characters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Character::destroy($id)){
            Session::flash('success','Character Deleted.');
        } else{
            Session::flash('error','Character Not Deleted');
        }
        return redirect('/admin/characters');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $characters = Character::where('name','LIKE','%'.$search.'%')->paginate(5);
        $title = "Search Results";
        return view('/admin/characters/index',compact('title','characters'));

    }
}
