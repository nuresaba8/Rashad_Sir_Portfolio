<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('Admin.News.index', compact('news'));
    }

    public function show(News $new)
    {
        return view('Admin.News.show', compact('new'));
    }


    public function create()
    {
        return view('Admin.News.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
            'source' => 'required',       // Optional if you use it
            'date' => 'required',           // Optional if you use it
            'category' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
            'source' => $request->source,       // Optional if you use it
            'date' => $request->date,           // Optional if you use it
            'category' => $request->category,
        ]);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }


    public function edit(News $new)
    {
        return view('Admin.News.edit', compact('new'));
    }

    public function update(Request $request, News $new)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
            'source' => 'required',       // Optional if you use it
            'date' => 'required',           // Optional if you use it
            'category' => 'required',
        ]);

        $imagePath = $new->image; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $new->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
            'source' => $request->source,       // Optional if you use it
            'date' => $request->date,           // Optional if you use it
            'category' => $request->category,
        ]);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }


    public function destroy(News $new)
    {
        $new->delete();
        return redirect()->route('news.index')->with('success', 'News deleted.');
    }

    public function toggleStatus(News $new)
    {
        $new->status = !$new->status;
        $new->save();

        return redirect()->back()->with('success', 'News status updated.');
    }
}
