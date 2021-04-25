<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carmodel;
use App\Models\carbrand;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carBrand = DB::table('carbrand')->select('carbrand.carbrand_name','carbrand.id')->get();
        return view('home', compact('carBrand'));
    }

    public function get_by_carbrand(Request $request)
    {

        if (!$request->carbrand_id) {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        } else {
            $html = '';
            $carmodel = carmodel::where('carbrand_id', $request->carbrand_id)->get();
            foreach ($carmodel as $car) {
                $html .= '<option value="'.$car->id.'" style="color:#000 !important;">'.$car->carmodel_name.'</option>';
            }
        }

        return response()->json(['html' => $html]);
    }
}
