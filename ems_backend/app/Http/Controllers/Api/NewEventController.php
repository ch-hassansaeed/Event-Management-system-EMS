<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Event;
use App\Models\Sale;
use App\Models\Ticket;
use SebastianBergmann\Environment\Console;

class NewEventController extends Controller
{
    public function createNewEvent(Request $request){
        $event = new Event();
        $cost = new Cost();
        $sale = new Sale();

        $event->name = $request->e_name;
        $event->catagory = $request->e_catagory;
        $event->organizer = $request->e_organizer;
        $event->location = $request->e_location;
        $event->date = $request->e_date;
        $event->description = $request->e_desc;
        $event->duration = $request->e_duration;
        $event->image_title = $request->e_image_url;
        $event->save();

        $sale->event_id = $event->id;
        $sale->n_sold = 0;
        $sale->s_sold = 0;
        $sale->g_sold = 0;
        $sale->p_sold = 0;
        $sale->total_sold = 0;
        $sale->total_revenue = 0;
        $sale->save();

        $cost->event_id = $event->id;
        $cost->t_type = $request->t_type;
        $cost->normal = $request->normal;
        $cost->silver = $request->silver;
        $cost->gold = $request->gold;
        $cost->platinum = $request->platinum;
        $cost->save();

        return response()->json([
            "message" => "Event created"
          ], 201);
    }

    public function editEvent(Request $request, $id){
        if (Event::where('id', $id)->exists()) {
            $event = Event::find($id);

            echo $request;
            $event->date = is_null($request->date) ? $event->date : $request->date;
            $event->description = is_null($request->description) ? $event->description : $request->description;
            $event->duration = is_null($request->duration) ? $event->duration : $request->duration;
            $event->location = is_null($request->location) ? $event->location : $request->location;
            $event->image_title = is_null($request->e_image_url) ? $event->image_title : $request->e_image_url;
            $event->organizer = is_null($request->e_organizer) ? $event->organizer : $request->e_organizer;
            $event->save();

            return response()->json([
                "message" => "records updated successfully"
              ], 200);
        }
        else{
            return response()->json([
                "message" => "Event not found"
              ], 404);
        }
    }

    public function editEventAlt(Request $request){
        if (Event::where('id', $request->id)->exists()) {
            $event = Event::find($request->id);

            echo $request;
            $event->date = is_null($request->e_date) ? $event->date : $request->e_date;
            $event->description = is_null($request->e_desc) ? $event->description : $request->e_desc;
            $event->duration = is_null($request->e_duration) ? $event->duration : $request->e_duration;
            $event->location = is_null($request->e_location) ? $event->location : $request->e_location;
            $event->image_title = is_null($request->e_image_url) ? $event->image_title : $request->e_image_url;
            $event->organizer = is_null($request->e_organizer) ? $event->organizer : $request->e_organizer;
            $event->save();

            return response()->json([
                "message" => "records updated successfully"
              ], 200);
        }
        else{
            return response()->json([
                "message" => "Event not found"
              ], 404);
        }
    }

    public function deleteEvent($id){
        $event = Event::find($id);
        $ticket = Ticket::where('event_id', $id)->get();
        $sale = Sale::where('event_id', $id)->get();
        $cost = Cost::where('event_id', $id)->get();
        
        foreach($ticket as $t){
            $t->delete();
        }

        foreach($sale as $s){
            $s->delete();
        }

        foreach($cost as $c){
            $c->delete();
        }

        $event->delete();

        return response()->json([
            "message" => "records deleted successfully"
          ], 200);
    }
}
