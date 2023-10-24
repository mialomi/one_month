<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Collection;
use App\Models\Money;
use App\Models\Place;
use App\Models\Season;
use App\Models\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $event = Event::all();
        return view('event.index')->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $seasons = Season::all();
        $collections = Collection::all();
        $places = Place::all();
        

        return view('event.create', compact('brands', 'seasons', 'collections', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        //llamamos a los datos ya validados
        $data = $request->validated();

        //en el caso que online events no esté marcado, le asignamos 0
        if(!array_key_exists('online_events', $data)){
            $data['online_events'] = 0;
        }
        
        //creamos un nuevo objeto money
        $money = Money::create([
            'brands_id' => $data['brands_id'],
            'spendings' => $data['spendings'] ?? null,
            'earnings' => $data['earnings'] ?? null,
        ]);
        
        //creamos un nuevo objeto Event
        $money_id = $money->id;
        $event = Event::create([
            'brands_id'=> $data['brands_id'],
            'seasons_id'=> $data['seasons_id'],
            'collections_id'=> $data['collections_id'],
            'places_id'=> $data['places_id'],
            'date_time'=> $data['date_time'],
            'online_events'=> $data['online_events'],
            'location' => $data['location'],
            'money_id'=> $money_id,
            
        ]);

        return redirect('/event')->with('message', 'Success!, Your show has been saved successfully');
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
