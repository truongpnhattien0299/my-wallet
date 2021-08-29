<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Cloudder;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::all();
        return view('card.index', compact('card'));
    }

    public function create()
    {
        return view('card.create');
    }

    public function store(Request $request)
    {
        $card = new Card();
        $card->name = $request->input('name', null);
        $card->amount = $request->input('amount', null);

        if($request->hasFile('img'))
        {
            $filename = $request->img;
            Cloudder::upload($filename, 'mywallet/'. $filename->getClientOriginalName());
            $card->logo = Cloudder::show('mywallet/'. $filename->getClientOriginalName());
        }
        if($card->save())
        {
            return redirect()->route('cards.index')->with('succcess', 'Đã tạo mới một thẻ thàng công');
        }
        return redirect()->back()->withInput()->withErrors('Không thể tạo mới một thẻ');

    }
}
