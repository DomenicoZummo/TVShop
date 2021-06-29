<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tv;
use App\Field;
use Illuminate\Http\Request;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvs = Tv::all();

        return view('admin.tvs.index', compact('tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();

        return view('admin.tvs.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = $request->all();

        $new_tv = new Tv();
        $new_tv->name = $var['name'];
        $new_tv->description = $var['description'];
        $new_tv->inch = $var['inch'];
        $new_tv->price = $var['price'];

        $new_tv->save();

        if(array_key_exists('fields', $var)) {
            $new_tv->fields()->attach($var['fields']);
        }

        return redirect()->route('admin.tvs.show', $new_tv['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tv = Tv::find($id);

        return view('admin.tvs.show', compact("tv"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tv = Tv::find($id);

        return view('admin.tvs.edit', compact('tv'));
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
        //
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
