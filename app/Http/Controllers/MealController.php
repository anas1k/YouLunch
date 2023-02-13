<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllMeals = Meal::all();
        /* toast('Get meals with success', 'success'); */
        return view('dashboard',  ['AllMeals' => $AllMeals]); //associative array composed of key: 'AllMeals' and value: $AllMeals
        /* return view('meals.index', compact('AllMeals')); */
    }
    public function welcome()
    {
        $Starters = Meal::all()->where('type', 'Starter');
        $Mains = Meal::all()->where('type', 'Main');
        $Desserts = Meal::all()->where('type', 'Dessert');
        return view('welcome',  ['Starters' => $Starters, 'Mains' => $Mains, 'Desserts' => $Desserts]);
        /* return view('meals.index', compact('AllMeals')); */
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
    public function store(StoreRequest $request)
    {
        /* dd($request->all()); *//*
        $request->validate([
            'name' => 'required|min:5',
            'day' => 'required',
            'type' => 'required',
        ]); */

        // $Meal['name'] = $request->name;
        // $Meal['description'] = $request->description;
        // $Meal['day'] = $request->day;
        // $Meal['type'] = $request->type;
        // $Meal['slug'] = Str::slug($request->name, '-');
        // $request['slug'] = Str::slug($request->name, '-');
        // dd("aaa");
        Meal::create($request->validated());
        toast('Meal created with success', 'success');
        return redirect()->route('meals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $Meal = Meal::where('id', $id)->first();
        $Meal = Meal::find($id);
        /* dd($Meal); */
        return view('meal.edit', ['meal' => $Meal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name' => 'required|min:5',
            'day' => 'required',
            'type' => 'required',
        ]);
        $Meal['name'] = $request->name;
        $Meal['description'] = $request->description;
        $Meal['day'] = $request->day;
        $Meal['type'] = $request->type;
        // $Meal['slug'] = Str::slug($request->name, '-');
        Meal::where('id', $meal->id)->update($Meal);
        toast('Meal updated with success', 'success');
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        /* Meal::find($meal->id)->delete(); */

        Meal::destroy($meal->id);
        toast('Meal deleted with success', 'success');
        return redirect()->route('meals.index');
    }
}
