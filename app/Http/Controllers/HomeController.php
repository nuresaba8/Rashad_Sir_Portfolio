<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\Award;
use App\Models\Contact;
use App\Models\ContributionToBASIS;
use App\Models\Experience;
use App\Models\International;
use App\Models\News;
use App\Models\TVShows;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function experience()
    {
        $experiences = Experience::where('status', 1)->get();
        return view('experience', compact('experiences'));
    }

    public function contribution()
    {
        $contributions = ContributionToBASIS::where('status', 1)->get();
        return view('contribution', compact('contributions'));
    }

    public function articles()
    {
        $articles = Article::where('status', 1)->get();
        return view('articles', compact('articles'));
    }

    public function tv_shows()
    {
        $tv_shows = TVShows::where('status', 1)->get();
        return view('tv_shows', compact('tv_shows'));
    }

    public function news()
    {
        $news = News::where('status', 1)->get();
        return view('news', compact('news'));
    }

    public function international()
    {
        $internationals = International::where('status', 1)->get();
        return view('international', compact('internationals'));
    }

    public function awards()
    {
        $awards = Award::where('status', 1)->get();
        return view('awards', compact('awards'));
    }

    public function get()
    {
        $contact = Contact::first(); // Assuming only one
        return view('contact', compact('contact'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:1000',
            'consent' => 'accepted',
        ]);

        try {
            Mail::to('nuresaba686@gmail.com')->send(new ContactMail($validated));

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}
