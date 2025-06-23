<?php

namespace App\Http\Controllers;

use App\Models\ContributionToBASIS;
use Illuminate\Http\Request;

class ContributionToBASISController extends Controller
{
        public function index()
    {
        $contributions = ContributionToBASIS::latest()->get();
        return view('Admin.Contribution_To_BASIS.index', compact('contributions')); // make sure this file exists
    }

    public function show(ContributionToBASIS $contribution)
    {
        return view('Admin.Contribution_To_BASIS.show', compact('contribution'));
    }


    public function create()
    {
        return view('Admin.Contribution_To_BASIS.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'nullable|image',
            'category' => 'nullable|in:web,mobile,ui',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        ContributionToBASIS::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('contributionToBasis.index')->with('success', 'Contribution To Basis created successfully.');
    }


    public function edit(ContributionToBASIS $contribution)
    {
        return view('Admin.Contribution_To_BASIS.edit', compact('contribution'));
    }

    public function update(Request $request, ContributionToBASIS $contribution)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'nullable|image',
            'category' => 'nullable|in:web,mobile,ui',
        ]);

        $imagePath = $contribution->image_path; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $contribution->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('contributionToBasis.index')->with('success', 'Contribution To Basis updated successfully.');
    }


    public function destroy(ContributionToBASIS $contribution)
    {
        $contribution->delete();
        return redirect()->route('contributionToBasis.index')->with('success', 'Contribution To Basis deleted.');
    }

    public function toggleStatus(ContributionToBASIS $contribution)
    {
        $contribution->status = !$contribution->status;
        $contribution->save();

        return redirect()->back()->with('success', 'Contribution To Basis status updated.');
    }
}
