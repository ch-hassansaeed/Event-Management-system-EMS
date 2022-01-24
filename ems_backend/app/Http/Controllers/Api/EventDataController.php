<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\Event;
use App\Models\EventData;
use App\Models\Sale;
use Illuminate\Http\Request;

class EventDataController extends Controller
{
    public function getTrendingEvents(){
        $trending_events = array();
        $trending_list = Sale::orderBy('total_revenue', 'DESC')
        ->limit(6)
        ->get();

        foreach($trending_list as $t){
            $current_event_data = new EventData();
            $event = Event::where('id', $t->event_id)->get();
            $cost = Cost::where('event_id', $t->event_id)->get();
            $sale = Sale::where('event_id', $t->event_id)->get();

            $current_event_data->event_id = $t->event_id;
            $current_event_data->e_name = $event[0]->name;
            $current_event_data->e_desc = $event[0]->description;
            $current_event_data->e_location = $event[0]->location;
            $current_event_data->e_date = $event[0]->date;
            $current_event_data->e_organizer = $event[0]->organizer;
            $current_event_data->e_catagory = $event[0]->catagory;
            $current_event_data->e_image_url = $event[0]->image_title;
            $current_event_data->t_type = $cost[0]->t_type;
            $current_event_data->n_val = $cost[0]->normal;
            $current_event_data->s_val = $cost[0]->silver;
            $current_event_data->g_val = $cost[0]->gold;
            $current_event_data->p_val = $cost[0]->platinum;
            $current_event_data->total_sold = $sale[0]->total_sold;
            $current_event_data->total_revenue = $sale[0]->total_revenue;

            $trending_events[] = $current_event_data;
        }

        return response($trending_events, 200);
    }

    public function getSportsEvents(){
        $sports_events = array();
        $sports_list = Event::where('catagory', 'sports')->get();

        foreach($sports_list as $s){
            $current_event_data = new EventData();
            $cost = Cost::where('event_id', $s->id)->get();
            $sale = Sale::where('event_id', $s->id)->get();

            $current_event_data->event_id = $s->id;
            $current_event_data->e_name = $s->name;
            $current_event_data->e_desc = $s->description;
            $current_event_data->e_location = $s->location;
            $current_event_data->e_date = $s->date;
            $current_event_data->e_organizer = $s->organizer;
            $current_event_data->e_catagory = $s->catagory;
            $current_event_data->e_image_url = $s->image_title;
            $current_event_data->t_type = $cost[0]->t_type;
            $current_event_data->n_val = $cost[0]->normal;
            $current_event_data->s_val = $cost[0]->silver;
            $current_event_data->g_val = $cost[0]->gold;
            $current_event_data->p_val = $cost[0]->platinum;
            $current_event_data->total_sold = $sale[0]->total_sold;
            $current_event_data->total_revenue = $sale[0]->total_revenue;

            $sports_events[] = $current_event_data;
        }

        return response($sports_events, 200);
    }

    public function getFunEvents(){
        $fun_events = array();
        $fun_list = Event::where('catagory', 'fun')->get();

        foreach($fun_list as $f){
            $current_event_data = new EventData();
            $cost = Cost::where('event_id', $f->id)->get();
            $sale = Sale::where('event_id', $f->id)->get();

            $current_event_data->event_id = $f->id;
            $current_event_data->e_name = $f->name;
            $current_event_data->e_desc = $f->description;
            $current_event_data->e_location = $f->location;
            $current_event_data->e_date = $f->date;
            $current_event_data->e_organizer = $f->organizer;
            $current_event_data->e_catagory = $f->catagory;
            $current_event_data->e_image_url = $f->image_title;
            $current_event_data->t_type = $cost[0]->t_type;
            $current_event_data->n_val = $cost[0]->normal;
            $current_event_data->s_val = $cost[0]->silver;
            $current_event_data->g_val = $cost[0]->gold;
            $current_event_data->p_val = $cost[0]->platinum;
            $current_event_data->total_sold = $sale[0]->total_sold;
            $current_event_data->total_revenue = $sale[0]->total_revenue;

            $fun_events[] = $current_event_data;
        }

        return response($fun_events, 200);
    }

    public function getEventData($id){
        $event = Event::where('id', $id)->get();
        $current_event_data = new EventData();

        foreach($event as $e){
            $cost = Cost::where('event_id', $e->id)->get();
            $sale = Sale::where('event_id', $e->id)->get();

            $current_event_data->event_id = $e->id;
            $current_event_data->e_name = $e->name;
            $current_event_data->e_desc = $e->description;
            $current_event_data->e_location = $e->location;
            $current_event_data->e_date = $e->date;
            $current_event_data->e_duration = $e->duration;
            $current_event_data->e_organizer = $e->organizer;
            $current_event_data->e_catagory = $e->catagory;
            $current_event_data->e_image_url = $e->image_title;
            $current_event_data->t_type = $cost[0]->t_type;
            $current_event_data->n_val = $cost[0]->normal;
            $current_event_data->s_val = $cost[0]->silver;
            $current_event_data->g_val = $cost[0]->gold;
            $current_event_data->p_val = $cost[0]->platinum;
            $current_event_data->total_sold = $sale[0]->total_sold;
            $current_event_data->total_revenue = $sale[0]->total_revenue;
        }

        return response($current_event_data->toJson(JSON_PRETTY_PRINT), 200);
    }
}
