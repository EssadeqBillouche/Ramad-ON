<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        $categories = Category::all(); // Assumes you have a Category model

        return view('recipes', compact('recipes', 'categories'));
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.show', compact('recipe'));
    }

    public function store(Request $request)
    {

        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'category_id' => 'required|exists:categories,id',
                'preparation_time' => 'required|integer',
                'ingredients' => 'required|string',
                'instructions' => 'required|string',
                'image' => 'nullable|image|max:2048',
            ]);

        } catch (\Throwable $e) {
            dd($e->getMessage());
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('recipes', 'public');
        }

        Recipe::create($validated);

        return redirect()->route('recipes.index')->with('success', 'Recipe created successfully!');
    }
}
