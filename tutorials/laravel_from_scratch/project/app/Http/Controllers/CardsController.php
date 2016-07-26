<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        //$card->load('notes.user');
        //return $card;

        //$card = Card::with('notes.user')->find(2);
        //return $card;
        return view('cards.show', compact('card'));
    }
}
