<?php

namespace App\Http\Controllers;

use App\Models\Maint;
use Illuminate\Http\Request;

class MaintController extends Controller
{
    public function AddData(){
        return view('dashboard');
    }

    public function save(Request $request){
        Maint::create([
            'date' => $request->date,
            'type' => $request->type,
            'cost' => $request->cost,
        ]);

        return redirect()->back();
    }
}
