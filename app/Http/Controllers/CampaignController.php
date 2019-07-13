<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function detail($slug){
        // dd($slug);
        return view('app.campaign.detail');
    }

    public function campaigns(){
        $campaigns = Campaign::where('status','=','published')->with('user','images')->get();
        return view('app.campaigns',compact('campaigns'));
    }
}
