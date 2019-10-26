<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Model\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request)
    {

        $user = \Auth::user()->id;
        $store[] = $request->all();
        array_pop($store[0]);
        $store = $store[0];
        $store['user_id'] = $user;
        $store['book_id'] = 1;
        $store = Listings::create($store);
        $store->update([
            'picture' => $request->img->store('image/listing', 'public'),
        ]);
    }


    public function show(Listings $listing)
    {
        return view('Listing.show',compact('listing'));
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
