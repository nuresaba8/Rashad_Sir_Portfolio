<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('Admin.Articles.index', compact('articles')); // make sure this file exists
    }

    public function show(Article $article)
    {
        return view('Admin.Articles.show', compact('article'));
    }


    public function create()
    {
        return view('Admin.Articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|image',
            'article_url' => 'nullable|url',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath,
            'article_url' => $request->article_url,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }


    public function edit(Article $article)
    {
        return view('Admin.Articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|image',
            'article_url' => 'nullable|url',
        ]);

        $imagePath = $article->image_url; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath,
            'article_url' => $request->article_url,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted.');
    }

    public function toggleStatus(Article $article)
    {
        $article->status = !$article->status;
        $article->save();

        return redirect()->back()->with('success', 'Article status updated.');
    }
}
