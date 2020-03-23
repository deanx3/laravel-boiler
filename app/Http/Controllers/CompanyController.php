<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companys = company::all();
        return view('company.index', compact('companys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.create');
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


        $companys = new company;
        $companys->Destination = $request->input('Destination');
        $companys->Days = $request->input('Days');
        $companys->Date = $request->input('Date');
        $companys->Pickup_time = $request->input('Pickup_time');
        $companys->Price = $request->input('Price');
        $companys->Description = $request->input('Description');
        
        $companys->save();
        return redirect('company')->withSuccess('Data is enter Success Fully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $companys = company::find($id);
        return view('company.edit', compact('companys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $companys=company::find($id);
        $companys->Destination = $request->input('Destination');
        $companys->Days = $request->input('Days');
        $companys->Date = $request->input('Date');
        $companys->Pickup_time = $request->input('Pickup_time');
        $companys->Price = $request->input('Price');
        $companys->Description = $request->input('Description');
       
        $companys->save();
        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $companys = company::find($id);
        $companys->delete();
        return redirect('company');
    }
}
