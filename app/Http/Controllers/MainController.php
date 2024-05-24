<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\QnARequest;
use App\Http\Requests\QuizRequest;
use App\Models\Email;
use App\Models\Messages;
use App\Models\Question;
use App\Models\Test;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function home() {
        return view('index', ['tests'=>Test::get()->sortByDesc('id'),
            'themes'=>Theme::get(),
            'questions'=>Question::get()]);
    }

    public function tests(FilterRequest $request) {
        if ($request->filled('theme')) {
            $tests=Test::where('theme_id', '=', $request->theme)->get();
        }
        else $tests = Test::get();
        if ($request->isMethod('post'))
        if ($request->filled('text')) {
            $tests=Test::where('title', 'like', '%'.$request->text.'%')->get();
        }
        return view('test',['tests'=>$tests,]);
    }

    public function contacts(QnARequest $request) {
        if ($request->isMethod('post')) {
            if($request->filled('subject'))

                $f = Messages::create([
                    'subject' => $request->subject,
                    'text' => $request->message,
                    'email' => $request->email,
                    'name' => $request->name
                ]);

                return view('contact', ['model' => false]);
        }
        return view('contact', ['model'=>true]);
    }
    public function purchase() {
        $users = DB::table('my_cources')->where('user', Auth::user()->only('email'))->get('cources');
        $ffs=Test::all();
        $res=array();
        $tmp=$users->value('cources');
        foreach (session('cart') as $member)
        {
            if($tmp)
                $tmp.=',';
            $tmp.=$member;
        }
        DB::table('my_cources')->where('user', Auth::user()->only('email'))->update(['cources'=>$tmp]);
        session()->forget('cart');
        return view('thx');
    }
    public function ready() {

        return view('ready');
    }
}

