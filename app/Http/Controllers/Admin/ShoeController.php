<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shoe;
use Illuminate\Http\Request;
<<<<<<< HEAD:app/Http/Controllers/ShoeController.php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
=======
use App\Http\Controllers\Controller;
>>>>>>> b67d91ea387ab711302120c542673352a5eae859:app/Http/Controllers/Admin/ShoeController.php

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/ShoeController.php
        $newShoe = Shoe::all();
        dd($newShoe);

        //$shoes = Shoe::orderBy('updated_at', 'DESC')->paginate(12);
        return view('index', compact('newShoe'));
=======
        return view('admin.shoes.index', compact('shoes'));
>>>>>>> b67d91ea387ab711302120c542673352a5eae859:app/Http/Controllers/Admin/ShoeController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newShoe = new Shoe;
        return view('shoes.form', compact('newShoe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (Arr::exists($data, 'image')) {
            $path = Storage::put('uploads/shoes', $data['image']);
            //$data['image'] = $path;
        }

        $newShoe = new Shoe;
        $newShoe->fill($data);
        $newShoe->image = $path;
        $newShoe->save();

        return to_route('shoes.show', $newShoe)
            ->with('message', 'Prodotto aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
        return view('shoes.form', compact('shoe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe $shoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        //
    }
}