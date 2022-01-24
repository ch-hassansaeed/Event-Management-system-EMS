<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BestSeller;
use App\Models\BookingDetail;
use App\Models\Cost;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\Event;
use App\Models\Sale;
use App\Models\SalesDetail;
use App\Models\SalesOverview;

class ReportsController extends Controller
{
    public function getSalesOverview(){
        $sale = Sale::get();
        $s_overview = new SalesOverview();
        
        $s_overview->total_sold = 0;
        $s_overview->total_revenue = 0;
        $s_overview->n_count = 0;
        $s_overview->s_count = 0;
        $s_overview->g_count = 0;
        $s_overview->p_count = 0;
        $s_overview->n_rev = 0;
        $s_overview->s_rev = 0;
        $s_overview->g_rev = 0;
        $s_overview->p_rev = 0;

        foreach($sale as $s){
            $cost = Cost::where('event_id', $s->event_id)->get();

            $s_overview->total_sold = $s_overview->total_sold + $s->total_sold;
            $s_overview->total_revenue = $s_overview->total_revenue + $s->total_revenue;
            $s_overview->n_count = $s_overview->n_count + $s->n_sold;
            $s_overview->s_count = $s_overview->s_count + $s->s_sold;
            $s_overview->g_count = $s_overview->g_count + $s->g_sold;
            $s_overview->p_count = $s_overview->p_count + $s->p_sold;
            $s_overview->n_rev = $s_overview->n_rev + ($s->n_sold * $cost[0]->normal);
            $s_overview->s_rev = $s_overview->s_rev + ($s->s_sold * $cost[0]->silver);
            $s_overview->g_rev = $s_overview->g_rev + ($s->g_sold * $cost[0]->gold);
            $s_overview->p_rev = $s_overview->p_rev + ($s->p_sold * $cost[0]->platinum);
        }
        return response($s_overview->toJson(JSON_PRETTY_PRINT), 200);
    }

    public function getSalesDetails(){
        $salesList = array();

        $event = Event::get();

        foreach($event as $e){
            $sales_detail = new SalesDetail();
            $sale = Sale::where('event_id', $e->id)->get();
            $cost = Cost::where('event_id', $e->id)->get();

            $sales_detail->event_id = $e->id;
            $sales_detail->e_name = $e->name;
            $sales_detail->e_organizer = $e->organizer;
            $sales_detail->e_date = $e->date;
            $sales_detail->t_type = $cost[0]->t_type;
            $sales_detail->n_rev = $sale[0]->n_sold * $cost[0]->normal;
            $sales_detail->s_rev = $sale[0]->s_sold * $cost[0]->silver;
            $sales_detail->g_rev = $sale[0]->g_sold * $cost[0]->gold;
            $sales_detail->p_rev = $sale[0]->p_sold * $cost[0]->platinum;
            $sales_detail->total_revenue = $sales_detail->n_rev + $sales_detail->s_rev + $sales_detail->g_rev + $sales_detail->p_rev; 

            $salesList[] = $sales_detail;
        }
        return response($salesList, 200);
    }

    public function getBookingDetails(){
        $bookings = array();

        $ticket = Ticket::get();

        foreach($ticket as $t){
            $booking_detail = new BookingDetail();
            $event = Event::where('id', $t->event_id)->get();
            $customer = Customer::where('id', $t->customer_id)->get();

            $booking_detail->event_id = $t->event_id;
            $booking_detail->no_of_tickets = $t->no_of_tickets;
            $booking_detail->cost = $t->costs;
            $booking_detail->t_type = $t->t_type;
            $booking_detail->e_name = $event[0]->name;
            $booking_detail->e_date = $event[0]->date;
            $booking_detail->c_name = $customer[0]->name;
            $booking_detail->c_email = $customer[0]->email;

            $bookings[] = $booking_detail;
        }

        return response($bookings, 200);
    }

}
