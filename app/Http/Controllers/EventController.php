<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Collection;
use App\Models\Money;
use App\Models\Place;
use App\Models\Season;
use App\Models\Event;
use App\Http\Requests\EventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $events = Event::paginate(10);
        return view('event.index')->with('events', $events);
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
        
        //creamos un nuevo objeto evento 
        $event = Event::create([
            'brands_id'=> $data['brands_id'],
            'seasons_id'=> $data['seasons_id'],
            'collections_id'=> $data['collections_id'],
            'places_id'=> $data['places_id'],
            'date_time'=> $data['date_time'],
            'online_events'=> $data['online_events'],
            'location' => $data['location'],

        ]);
        //creamos nuevo objeto money
        $money = Money::create([   
            'spendings' => $data['spendings'] ?? null,
            'earnings' => $data['earnings'] ?? null,
        ]);
        
        //actualizamos money_id en event
        $event->update(['money_id' => $money->id]);


        return redirect('/event')->with('message', 'Success!, Your show has been saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $event = Event::find($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id);
       // dd($show);
        $seasons = Season::all();
        $collections = Collection::all();
        $places = Place::all();
        $money = Money::all();
        

        return view('event.edit', compact('event', 'seasons', 'collections', 'places', 'money'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, int $id)
    {
        $event = Event::find($id);
    
        $updated_data = $request->validated();
        if(!array_key_exists('online_events', $updated_data)){
            $updated_data['online_events'] = 0;
        }
        //dd($updated_data);

        $event->update([

            'seasons_id' => $updated_data['seasons_id'],
            'collections_id' => $updated_data['collections_id'],
            'places_id'=> $updated_data['places_id'],
            'date_time'=> $updated_data['date_time'],
            'online_events'=> $updated_data['online_events'],
            'location'=> $updated_data['location'],

        ]);

        /*$event->seasons_id = $updated_data['seasons_id'];
        $event->collections_id = $updated_data['collections_id'];
        $event->places_id = $updated_data['places_id'];
        $event->date_time = $updated_data['date_time'];
        $event->online_events = $updated_data['online_events'];
        $event->location = $updated_data['location'];
        $event->save();
        //dd($event);*/

        $money = $event->money;

        /*$money->spendings = $updated_data['spendings'];
        $money->earnings = $updated_data['earnings'];
        $money->save();
        //dd($money);*/

        $money -> save([
            'spendings' => $updated_data['spendings'],
            'earnings' => $updated_data['earnings'],
        ]);
        
        return redirect('/event')->with('message', 'Success!, Your show has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $event = Event::find($id);
        $id_money_event = $event->money_id;
        $money = Money::find($id_money_event);
        $money->delete();

        $event->delete();

        return redirect('/event')->with('message', 'Success!, Your show has been deleted successfully');
    }
}
