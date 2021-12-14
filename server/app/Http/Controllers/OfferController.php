<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create(Request $req){
        $newOffer = json_decode($req->getContent());
        $offer = new Offer();
        $offer->linguaggio = $newOffer->linguaggio;
        $offer->icona = $newOffer->icona;
        $offer->azienda = $newOffer->azienda;
        $offer->ral = $newOffer -> ral;
        $offer->esperienza = $newOffer->esperienza;
        $offer->location = $newOffer->location;
        $offer->descrizione = $newOffer->descrizione;
        $offer->save();
        return response()->json("create", 200);
    }

    public function all(){
        return Offer::all();
    }

    public function one($id){
        return Offer::where("id", $id)->first();
    }

    public function modify(Request $req, $id){
        $newOffer = json_decode($req->getContent());
        $offer = Offer::where("id", $id)->first();
        $offer->linguaggio = $newOffer->linguaggio;
        $offer->icona = $newOffer->icona;
        $offer->azienda = $newOffer->azienda;
        $offer->ral = $newOffer -> ral;
        $offer->esperienza = $newOffer->esperienza;
        $offer->location = $newOffer->location;
        $offer->descrizione = $newOffer->descrizione;
        $offer->save();
        return response()->json("modify", 200);

    }

    public function linguaggi(Request $req){
        $linguaggio = json_decode($req->getContent());
        return Offer::where("linguaggio", $linguaggio->linguaggio)->get();

    }

    public function orderRal(Request $req){
        $order = json_decode($req->getContent());
        return Offer::orderBy("ral", $req->name)->get();
    }
}
