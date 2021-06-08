<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function store(Request $request){

        Log::create([
            'ip'=>$request->ip()
        ]);

        return response()->json(['ok']);
    }
}
