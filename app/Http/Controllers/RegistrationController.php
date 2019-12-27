<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Redirect;
use App\Registration;


class RegistrationController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:40',
            'sapNumber' => 'required',
            'email' => 'required|email:rfc,dns',
            'mobile' => 'required|max:12',
            'year' => 'required',
            'classDivision' => 'required',
            'referralId' => 'required',
            'course' => 'required',
            'classDivision' => 'required',
            'inTime' => 'required',
            'outTime' => 'required',
            'building' => 'required|max:50',
            'address1' => 'required|max:50',
            'address2' => 'required|max:50',
            'locality' => 'required',
            'pincode' => 'required|max:6|min:6',
            'payment' => 'required',
        ]);
        
        // Defining 1 = Payment by Card, 0 = Payment by Cash
        if($request->get('payment') == "card"){
            $payment = true;
        }
        else{
            $payment = false;
        }

        $user = new Registration();
        $user->name = $request->get('name');
        $user->sapNumber = $request->get('sapNumber');
        $user->email = $request->get('email');
        $user->mobile = $request->get('mobile');
        $user->year = $request->get('year');
        $user->classDivision = $request->get('classDivision');
        $user->referralId = $request->get('referralId');
        $user->course = $request->get('course');
        $user->classDivision = $request->get('classDivision');
        $user->inTime = $request->get('inTime');
        $user->outTime = $request->get('outTime');
        $user->building = $request->get('building');
        $user->address1 = $request->get('address1');
        $user->address2 = $request->get('address2');
        $user->locality = $request->get('locality');
        $user->pincode = $request->get('pincode');
        $user->payment = $payment;

        $user->save();

        //now since the user details are saved in the database, we need to redirect it accordingly

        if($payment){
            // pay by card, lets redirect it to razorpay website
            return Redirect::to('https://rzp.io/l/rKXX3rE');
        }
        else{
            
        }
        $email = $user->email;
        // we need to send an email saying thank you for registering with pool-it
        Mail::send(
            'emails.success', 
            [
                'name' => $user->name,
                'applNo'=> $user->id,
            ],
            function ($m) use($email) {
                $m->from('phdsection@nitt.edu', 'NIT Trichy Admissions');
                $m->to($email, 'Applicant' )->subject('NIT-Trichy Ph.D. Admissions, July 2016');
            }
        );
        dd($request, $validatedData, $user);
    }
}
