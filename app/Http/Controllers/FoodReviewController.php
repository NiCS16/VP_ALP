<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodReview;

class FoodReviewController extends Controller
{
    public function index()
{
    $foodreviews = FoodReview::all();
    return response()->json($foodreviews);
}

public function store(Request $request)
{
    $foodreview = FoodReview::create($request->all());
    return response()->json($foodreview, 201);
}

public function show(FoodReview $foodreview)
{
    return response()->json($foodreview);
}

public function update(Request $request, FoodReview $foodreview)
{
    $foodreview->update($request->all());
    return response()->json($foodreview);
}

public function destroy(FoodReview $foodreview)
{
    $foodreview->delete();
    return response()->json(null, 204);
}
}
