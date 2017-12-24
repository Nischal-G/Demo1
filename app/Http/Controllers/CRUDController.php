<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CRUDController extends Controller
{

	public function index(Request $request)
    {
        $custom = Customer::orderBy('id','DESC')->paginate(5);
        return view('crud.index',compact('custom'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customerName' => 'required',
            // 'retailMiti' => 'required',
            // 'daysEcp' => 'required',
            // 'model' => 'required',
            // 'mobileNo' => 'required',
            // 'salesExe' => 'required',
            // 'salesPrice' => 'required',
            'amountReceived' => 'required',
            // 'principleDue' => 'required',
            // 'interest' => 'required',
            // 'totalDue' => 'required',
            // 'remarks' => 'required',
        ]);

        Customer::create($request->all());
        return redirect()->route('crud.index')->with('success','Customer created successfully');
    }

    public function show($id)
    {
        // $custom = Customer::find($id);
        // return view('crud.show',compact('custom'));
    }

    public function edit($id)
    {
        $custom = Customer::find($id);
        return view('crud.edit',compact('custom'));
    }

     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'customerName' => 'required',
            'retailMiti' => 'required',
            'daysEcp' => 'required',
            'model' => 'required',
            'mobileNo' => 'required',
            'salesExe' => 'required',
            'salesPrice' => 'required',
            'amountRecived' => 'required',
            'principleDue' => 'required',
            'interest' => 'required',
            'totalDue' => 'required',
            'remarks' => 'required',
        ]);

        Customer::find($id)->update($request->all());
        return redirect()->route('crud.index')->with('success','Customers detail updated successfully');
    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('crud.index');

    }
    
}
