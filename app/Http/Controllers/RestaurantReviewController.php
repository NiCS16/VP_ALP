<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestaurantReview;

class RestaurantReviewController extends Controller
{
    public function index()
{
    $restaurantreviews = RestaurantReview::all();
    return response()->json($restaurantreviews);
}

public function store(Request $request)
{
    $restaurantreview = RestaurantReview::create($request->all());
    return response()->json($restaurantreview, 201);
}

public function show(RestaurantReview $restaurantreview)
{
    return response()->json($restaurantreview);
}

public function update(Request $request, RestaurantReview $restaurantreview)
{
    $restaurantreview->update($request->all());
    return response()->json($restaurantreview);
}

public function destroy(RestaurantReview $restaurantreview)
{
    $restaurantreview->delete();
    return response()->json(null, 204);
}
}
