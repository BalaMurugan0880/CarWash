<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carmodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModel = carmodel::orderBy('id', 'DESC')->get();
        return view('admin.CarModel.index', compact('carModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $carBrand = DB::table('carbrand')->select('carbrand.carbrand_name','carbrand.id')->get();
       return view('admin.CarModel.create', compact('carBrand'));
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
            'carmodel_name' => 'required|unique:carmodel',
            'carbrand_id' => 'required',
            'price' => 'required',
            
        ],
            [
                'carmodel_name.required' => 'Enter name',
                'carbrand_id.required' => 'Select A Car Brand',
                'price.required' => 'Enter Price',
                'carmodel_name.unique' => 'This Model already exist',
                
            ]);

        $carModel = new carmodel();
        $carModel->carmodel_name = $request->carmodel_name;
        $carModel->carbrand_id = $request->carbrand_id;
        $carModel->price = $request->price;
        $carModel->user_id = Auth::user()->id;
        $carModel->save();

        Session::flash('message', 'Car Model created successfully');
        return redirect()->route('carmodel.index');
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
    public function edit(carmodel $carmodel)
    {
       return view('admin.CarModel.edit', compact('carmodel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carmodel $carmodel)
    {
        $this->validate($request, [
            'carmodel_name' => 'required|unique:carmodel,carmodel_name,' . $carmodel->id,
            'carbrand_id' => 'required',
            'price' => 'required',
        ],
            [
                'carmodel_name.required' => 'Enter name',
                'carmodel_name.unique' => 'Car Model already exist',
            ]);

      
        $carmodel->user_id = Auth::id();
        $carmodel->carmodel_name = $request->carmodel_name;
        $carmodel->carbrand_id = $request->carbrand_id;
        $carmodel->price = $request->price;
        $carmodel->save();

        Session::flash('message', 'Car Model updated successfully');
        return redirect()->route('carmodel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::delete('delete from carmodel where id = ?',[$id]);

        Session::flash('delete-message', 'Module deleted successfully');
        return redirect()->route('carmodel.index'); 
    }
}
