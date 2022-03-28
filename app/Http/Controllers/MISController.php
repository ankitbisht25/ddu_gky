<?php

namespace App\Http\Controllers;

use App\Models\MIS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Mail;
use Auth;

class MISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misForm()
    {
        return view('public.mis.create_mis');
    }

    public function createMis(Request $req)
    {
        $this->validate($req, [
            'mis_code' => 'required',
            'mis_type' => 'required|max:20',
            'name' => 'required|max:40',
            'email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required|min:10|max:255'
        ]);

        $file1 = $req->file('image_doc');
        $file2 = $req->file('sign_doc');
        $filename1 = $req->mis_code.'_image.'.$file1->getClientOriginalExtension();
        $filename2 = $req->mis_code.'_sign.'.$file2->getClientOriginalExtension();

        $req->mis_type=="mis_head" ? $role_id="7" : $role_id="8";

        $mis = new MIS();
        $mis->mis_code = $req->mis_code;
        $mis->mis_type = $role_id;
        $mis->name = $req->name;
        $mis->email = $req->email;
        $mis->phone_no = $req->contact_no;
        $mis->address = $req->address;
        $mis->photo = $filename1;
        $mis->signature = $filename2;
        $mis->added_by = Auth::user()->id;
        $mis->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bishtsonu251011@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'MIS',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });

        $user = new User();
        $user->role_id = $role_id;
        $user->user_code = $req->mis_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        $path = 'Documents/MIS';
        $file1->move($path,$filename1);
        $file2->move($path,$filename2);

        return redirect()->back()->with('alert_status','MIS Added Successfully');
    }

    public function misList(){
        $mis_data = MIS::with('getUserType')->get();      
        return view('public.mis.mis_list', compact("mis_data"));
    }
}
