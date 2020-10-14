<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use DateTime;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();

        return view('lead.index')
                ->with('leads', $leads);
    }

    public function save(Request $request)
    {
    	$datetime = new DateTime;
    	$datetime->createFromFormat('d m Y', $request->webinar_date);

    	$lead = new Lead;
    	$lead->first_name = $request->first_name;
    	$lead->last_name = $request->last_name;
    	$lead->contact_no = $request->contact_no;
    	$lead->email = $request->email;
    	$lead->webinar_date = $datetime->format('Y-m-d H:i:s');
    	$lead->save();
    }
}
