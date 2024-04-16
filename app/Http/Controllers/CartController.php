<?php

namespace App\Http\Controllers;

use App\Models\MyCources;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getcart()
    {
        $users = DB::table('my_cources')->where('user', Auth::user()->only('email'))->get('cources');
        $ffs=Test::all();
        $res=array();
        $tmp=preg_split('/,/', $users->value('cources'));
        if($tmp[0]) {
            foreach ($ffs as $f) {
                $g = $f->toArray();
                $us[$g['id']]=$g['title'];
            }
           foreach ($tmp as $r)
          {
               array_push($res, $us[$r]);
            }
          }
            return view('cart', ['cources'=>$res, 'user'=>Auth::user(),'cour'=>Test::get()]);
    }
    public function getcart2()
    {
        $users = DB::table('my_cources')->where('user', Auth::user()->only('email'))->get('cources');
        $ffs=Test::all();
        $res=array();
        $res2=array();
        $tmp=preg_split('/,/', $users->value('cources'));
        if($tmp[0]) {
            foreach ($ffs as $f) {
                $g = $f->toArray();
                $us[$g['id']] = $g['id'];
            }
                foreach ($ffs as $f) {
                    $g = $f->toArray();
                    $is[$g['id']]=$g['dsc'];
            }
            foreach ($tmp as $r)
            {
                array_push($res, $us[$r]);
                array_push($res2, $is[$r]);
            }

        return view('my', ['descs'=>$res2, 'cources'=>$res, 'user'=>Auth::user(),'cour'=>Test::get()]); }
        else return view('my', ['descs'=>NULL, 'cources'=>$res, 'user'=>Auth::user(),'cour'=>Test::get()]);
    }
}
