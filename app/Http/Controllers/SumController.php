<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sum;

class SumController extends Controller
{
    /**
     * Display a listing of the resource.
    
    
     */
    public function index()
    {
        $title = "Hello World";
        return view('about')->with('title',$title);
    }



    public function display()
    {
        $title = "Hello World";
        return view('about')->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $number1 = (int)$request->number1;
        $number2 = (int)$request->number2;

        $title = "Example";

        


        $sumData = new Sum();
        $sumData->number1 = $number1;
        $sumData->number2 = $number2;
        $sumData->sum = $number1 + $number2;
        $sumData->save();
        


        return view('result')->with('sumData',$sumData)->with('title',$title);
        // return redirect()->back()->with('title', 'Comment stored successfully!');
        // return view('result')->with('sumData',$sumData)->with('title',$title);


        // return Redirect::to('/result')->with('sumData',$sumData)->with('title',$title);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
