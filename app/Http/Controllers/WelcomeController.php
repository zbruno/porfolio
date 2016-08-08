<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Mail;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Email me
     */
    public function email(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required|min:50',
        ], []);

        if ($validation->fails()) {
            return response(['errors' => $validation->errors()->all()], 402);
        }

        Mail::raw($request->input('message'), function ($message) use ($request) {
            $message->from($request->input('email'), $request->input('name'));
            $message->subject($request->input('subject'));
            $message->to('zachcbruno@gmail.com');
        });

        return response('Success', 200);
    }
}
