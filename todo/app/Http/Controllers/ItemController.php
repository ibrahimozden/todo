<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::orderBy('updated_at','desc')->simplePaginate(10);
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $request->validate(
            [

                'name' => 'required',
                //'completed' => 'required',

            ],

            [
                'name.required' => 'Yapılacak iş alanı alanı zorunludur, boş bırakılamaz.',
                //'completed.required' => 'Lütfen tamamlanma bölümüne 1 veya 0 giriniz.',


            ]
        );
        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Yapılacaklar listesine başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //

        $request->validate(
            [

                'name' => 'required',
                //'completed' => 'required',
            ],

            [
                'name.required' => 'hata_kodu alanı zorunludur, boş bırakılamaz.',

            ]
        );
        $item->update($request->all());
        return redirect()->route('items.index')->with('success', 'Yapılacaklar listesi başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Yapılacaklar listesinden başarıyla silindi.');
    }

    public function searchitem(Request $request)
    {
        $search=$request->get('searchitem');
        $items=Item::where('name', 'like', '%' .$search. '%' )->paginate(2);
        return view('items.index', ['items' =>$items] );
    }
}
