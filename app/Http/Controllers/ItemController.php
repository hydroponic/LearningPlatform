<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function get() {
        $req = DB::table('item')->get();
        foreach ($req as $r) {
            $res[$r->id]=['content'=>$r->content, 'program'=>$r->program];
        }
        return view('item')->with(['content'=>$res]);
    }
}
