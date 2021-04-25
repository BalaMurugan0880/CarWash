<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carbrand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBrand = carbrand::orderBy('id', 'DESC')->get();
        return view('admin.CarBrand.index', compact('carBrand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.CarBrand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'carbrand_name' => 'required|unique:carbrand',
            
        ],
            [
                'carbrand_name.required' => 'Enter name',
                'carbrand_name.unique' => 'This Brand already exist',
                
            ]);

        $carBrand = new carbrand();
        $carBrand->carbrand_name = $request->carbrand_name;
        $carBrand->user_id = Auth::user()->id;
        $carBrand->save();

        Session::flash('message', 'Car Brand created successfully');
        return redirect()->route('carbrand.index');
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
    public function edit(carbrand $carbrand)
    {
         return view('admin.CarBrand.edit', compact('carbrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carbrand $carbrand)
    {
      $this->validate($request, [
            'carbrand_name' => 'required|unique:carbrand,carbrand_name,' . $carbrand->id,
        ],
            [
                'carbrand_name.required' => 'Enter name',
                'carbrand_name.unique' => 'Car Brand already exist',
            ]);

      
        $carbrand->user_id = Auth::id();
        $carbrand->carbrand_name = $request->carbrand_name;
        $carbrand->save();

        Session::flash('message', 'Car Brand updated successfully');
        return redirect()->route('carbrand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::delete('delete from carbrand where id = ?',[$id]);

        Session::flash('delete-message', 'Module deleted successfully');
        return redirect()->route('carbrand.index'); 
    }
}
