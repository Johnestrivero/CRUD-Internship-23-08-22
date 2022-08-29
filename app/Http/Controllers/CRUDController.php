<?php

namespace App\Http\Controllers;

use App\Models\ContestParticipant;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function Create (){
        return view('Create');
    }

    public function Store (Request $request){
        $participant = new ContestParticipant();
        $participant->name = $request->name;
        $participant->elo = $request->elo;
        $participant->rank = $request->rank;
        $temp = $participant;
        $participant->save();
        return redirect()->route('Show');
    }

    public function Show (){
        
        $participants = ContestParticipant::get();
        //dd($participants);
        return view('Show', ['participants' => $participants]);
    }

    public function Delete(Request $request)
    {
        $participant = ContestParticipant::findOrFail($request->id);
        $participant->delete();
        //$request->session()->flash('status', 'Blog post was deleted!');
        return redirect()->route('Show');
    }

    public function Edit(Request $request){
        //dd($request);
        $participant = ContestParticipant::findOrFail($request->id);
        return view('Edit',['participant' => $participant, 'id' => $request->id]);
    }

    public function Update (Request $request){
        //dd($request->id);
        $participant = ContestParticipant::findOrFail($request->id);
        //dd(1);
        $participant->name = $request->name;
        $participant->elo = $request->elo;
        $participant->rank = $request->rank;
        $participant->save();
        return redirect()->route('Show');
    }
    
}
