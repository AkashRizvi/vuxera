<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    //
    public function businessDetails()
    {
        return view('home.pages.uk-business-service-details');
    }
    public function webDetails()
    {
        return view('home.pages.web-service-details');
    }
    public function amazonDetails()
    {
        return view('home.pages.amazon-service-details');
    }
    public function logoDesignDetails()
    {
        return view('home.pages.logo-design-service-details');
    }
    public function itConsultationDetails()
    {
        return view('home.pages.it-consultation-services-details');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::raw(
            "Name: {$request->name}\n".
            "Email: {$request->email}\n\n".
            "Phone: {$request->phone}\n\n".
            "Message:\n{$request->message}",
            function ($message) use ($request) {
                $message->to('info@vuxera.com')
                        ->subject($request->subject);
            }
        );

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
