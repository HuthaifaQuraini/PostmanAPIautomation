<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function Search_Deliveries(Request $request){
        $json_object=[
            "name" => "Huz Quraini v1",
            "age" => 27];
            return response()->json([
                'status' => 'success',
                'message' => 'Items retrieved successfully.',
                'data' => $json_object
            ], 200);
    }
}
