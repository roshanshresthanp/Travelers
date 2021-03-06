<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\Inquiry;

class ContactController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth',['except'=>['inquiryStore','store']]);
        }


    public function store(Request $request){
        $contact = new Contact();
        $contact->message = $request->input('message');
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->save();   
        // $con = $request->all();
        return redirect('/contact')->with('success','Thank you !! We are happy to hear from you !!!');
    }
    public function show(){
        $con = Contact::all();
        return view('contacts.show',compact('con'));
    }
    public function delete($id){
        $con = Contact::find($id);
        $con->delete();
        return redirect('/contact/show')->with('success','Message deleted successfully !!');
    }
    public function inquiryStore(Request $request,$id){
        $inquiry = new Inquiry();
        $inquiry->name = $request->input('name');
        $inquiry->phone = $request->input('phone');
        $inquiry->message = $request->input('message');
        $inquiry->destination_name = $request->input('destination_name');
        $inquiry->save();
        // return $id;
        return redirect('/')->with('success','Thank you for joining with us, we ll call you asap  !!');
    }
    public function inquiryShow(){
        $inquiry = Inquiry::all();
        return view('contacts.inquiry_show',compact('inquiry'));
    }
    public function inquiryDelete($id){
        $in = Inquiry::find($id);
        $in->delete();
        return redirect('/inquiry')->with('error','Record deleted successfully !!');
    }
}
