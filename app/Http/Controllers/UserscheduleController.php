<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Userschedule;
use Illuminate\Http\Request;

class UserscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules = Schedule::all()->toArray();

        return view('users.indexuser', compact('schedules'));
               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userschedule  $userschedule
     * @return \Illuminate\Http\Response
     */
    public function show(Userschedule $userschedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userschedule  $userschedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Userschedule $userschedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userschedule  $userschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userschedule $userschedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userschedule  $userschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userschedule $userschedule)
    {
        //
    }
}
