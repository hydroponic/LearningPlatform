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
        return view('test',['tests'=>$tests,
            'themes'=>Theme::get(),
            'questions'=>Question::get()]);
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
    public function themes() {
        return view('themes', ['themes'=>Theme::get()]);
    }
    public function add(FilterRequest $request) {
        if ($request->isMethod('post'))
        return view('admin');
        else return view('add');
    }
    public function admin(AddRequest $request) {
        return view('admin', ['id'=>$request->id]);
    }
    public function quiz(QuizRequest $request) {
        if($request->isMethod('post'))

            return view('quiz', ['q'=>$request->q, 'answer_id'=>$request->answer_id, 'title'=>$request->id]);
        return view('quiz', ['title'=>$request->id]);
    }
    public function email(EmailRequest $request) {
        if($request->isMethod('post'))
            Email::create([
                'email'=>$request->email
            ]);
        return view('thx');
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

