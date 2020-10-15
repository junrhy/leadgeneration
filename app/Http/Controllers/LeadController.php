<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use Carbon\Carbon;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $leads = Lead::all();

        return view('lead.index')
                ->with('leads', $leads);
    }

    public function save(Request $request)
    {
    	$lead = new Lead;
    	$lead->first_name = $request->first_name;
    	$lead->last_name = $request->last_name;
        $lead->birthdate = Carbon::createFromFormat('F-d-Y', $request->birthdate);
    	$lead->contact_no = $request->contact_no;
    	$lead->email = $request->email;
    	$lead->webinar_date = $request->webinar_date;
        $lead->registered_date = Carbon::now();
    	$lead->save();
    }

    public function destroy($id)
    {
        $lead = Lead::find($id);
        $lead->delete();
    }
}
