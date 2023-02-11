<?php

namespace App\Http\Controllers;

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
        return view('dashboard', ['AllMeals' => $AllMeals])/* ->with('success', 'Get meals wit') */; //associative array composed of key: 'AllMeals' and value: $AllMeals
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
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $request->validate([
            'name' => 'required|min:6',
            'day' => 'required',
            'type' => 'required',
        ]);
        $Meal['name'] = $request->name;
        $Meal['description'] = $request->description;
        $Meal['day'] = $request->day;
        $Meal['type'] = $request->type;
        $Meal['slug'] = Str::slug($request->name, '-');
        Meal::create($Meal);
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
    public function edit($slug)
    {
        $Meal = Meal::where('slug', $slug)->first();
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
            'name' => 'required|min:6',
            'day' => 'required',
            'type' => 'required',
        ]);
        $Meal['name'] = $request->name;
        $Meal['description'] = $request->description;
        $Meal['day'] = $request->day;
        $Meal['type'] = $request->type;
        $Meal['slug'] = Str::slug($request->name, '-');
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
