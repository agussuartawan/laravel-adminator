<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Customer';
        $customers = Customer::all();
        return view('customers.index', compact('customers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function find(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = Customer::orderBy('id', 'desc')
                                ->select('id', 'name', 'address', 'email')
                                ->limit(5)
                                ->get();
        } else {
            $data = Customer::orderBy('name', 'asc')
                                ->select('id', 'name', 'address', 'email')
                                ->where('name', 'LIKE', "%{$search}%")
                                ->limit(5)
                                ->get();
        }

        $results = [];
        foreach($data as $d){
            $results[] = array(
                'id' => $d->id,
                'text' => $d->name,
                'address' => $d->address,
                'email' => $d->email
            );
        }
        return response()->json($results);
    }
}
