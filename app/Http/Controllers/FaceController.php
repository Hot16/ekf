<?php

namespace App\Http\Controllers;

use App\Face;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faces = Face::with('Kid')->get();
        return view('index')->with('faces', $faces);
    }

    public function olderTwentee(){
        $date = Carbon::today()->subYears(20);
        $faces = Face::with('Kid')->whereDate('birth_date', '<', $date)->get();
        return view('index')->with('faces', $faces);
    }

    public function allWithKidsYSeven(){
        $faces = Face::with(['Kid' => function ($query){
            $query->whereDate('birth_date', '>', Carbon::today()->subYears(7));
        }])->get();

        return view('index')->with('faces', $faces);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.creatingFace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request = $request->all();
        $face = Face::create([
            'soname' => $request->soname,
            'name' => $request->name,
            'fathers_name' => $request->father_name,
            'full_name' => $request->soname.' '.$request->name.' '.$request->father_name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(Face $face)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(Face $face)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Face  $face
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Face $face)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Face  $face
     * @return \Illuminate\Http\Response
     */
    public function destroy(Face $face)
    {
        //
    }
}
