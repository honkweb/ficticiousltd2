<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\client_contact;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientindex = Client::all();
        return view('client.index', compact('clientindex')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        Client::create($input);

        return redirect()->route('client.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientshow = Client::find($id);

        dd($clientshow->contact);

        return view('client.show', compact('clientshow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientedit = Client::find($id);
        
        return view('client.edit', compact('clientedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientupdate = Client::find($id);

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'email' => 'required'
        ]);

        $clientupdate->update($request->all());

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientdelete = Client::find($id);
        $clientdelete->delete();

        return redirect()->route('client.index');
    }
}
