<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index(Request $request)
    {
        $agencies = Agency::with(['agencyType']);
        if ($zipCode = $request->get('zipCode')) {
            $agencies = $agencies->where(['zip_code' => $zipCode]);
        }
        return view('agency')->with('agencies', $agencies->get());
    }
}
