<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\TrustedProject;
use App\Models\GetInTouch;
use App\Models\NewsRoom;
use App\Models\QuickLink;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Industries;
use App\Models\PrivacyPolicyTermsCondition;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function Home()
    {
        $fact = TrustedProject::first();
        $get = GetInTouch::get();
        $testimonials = Testimonial::get();
        $gallery = Gallery::latest()->get();
        $services = Service::where('delete_status',0)->orderBy('created_at', 'desc')->take(3)->get();
        return view('web.home', compact('fact', 'get', 'testimonials', 'gallery', 'services'));
    }

    public function About_Us()
    {
        $about = AboutUs::get();
        $fact = TrustedProject::first();
        return view('web.about-us', compact('about', 'fact'));
    }

    public function ContactUs()
    {
        return view('web.contact-us');
    }

     public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to DB
        $contact = Contact::create($validated);

        // Send mail to your email
        Mail::raw("New Contact Message\n\nName: {$contact->name}\nEmail: {$contact->email}\nPhone: {$contact->phone}\nSubject: {$contact->subject}\n\nMessage:\n{$contact->message}", function ($msg) use ($contact) {
            $msg->to('Info@avpaco.com')  // 
                ->subject('New Contact Enquiry');
        });

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }

    public function OurService()
    {
        $services = Service::where('delete_status', 0)->get();
        return view('web.our-services', compact('services'));
    }

   public function OurTeam()
    {
        $coreTeam = User::where('delete_status', 0)
                        ->where('block_status', 0)
                        ->where('role', 0)
                        ->get();
    
        $associateTeam = User::where('delete_status', 0)
                             ->where('block_status', 0)
                             ->where('role', 1)
                             ->get();
    
        return view('web.our-teams', compact('coreTeam', 'associateTeam'));
    }


    public function Taxations()
    {
        return view('web.taxation');
    }

    public function AuditAssurance()
    {
        return view('web.audit-assurance');
    }

    public function BusinessSetup()
    {
        return view('web.business-setup');
    }

    public function AccountingOutsourcing()
    {
        return view('web.accounting-outsourcing');
    }

    public function AdvisoryConsulting()
    {
        return view('web.advisory-consulting');
    }

    public function Industries()
    {
        $industries = Industries::where('block_status', 0)->where('delete_status', 0)->get();
        return view('web.industries', compact('industries'));
    }

    public function PrivacyPolicy()
    {
        $policy = PrivacyPolicyTermsCondition::first();
        return view('web.privacy-policy', compact('policy'));
    }

    public function TermCondition()
    {
        $policy = PrivacyPolicyTermsCondition::first();
        return view('web.term-condition', compact('policy'));
    }

    public function NewsRoom()
    {
        $news = NewsRoom::where('delete_status', 0)->get();
        return view('web.news-room', compact('news'));
    }

    public function QuickLink()
    {
        $news = QuickLink::where('delete_status', 0)->get();
        return view('web.quick-links', compact('news'));
    }
}
