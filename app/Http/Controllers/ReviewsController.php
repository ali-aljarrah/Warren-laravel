<?php

namespace App\Http\Controllers;

use App\Services\GooglePlacesService;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    protected $googlePlaces;

    public function __construct(GooglePlacesService $googlePlaces)
    {
        $this->googlePlaces = $googlePlaces;
    }

    // Testimonials Page
    public function patientTestimonialsPage()
    {
        $placeId = env('WARREN_PLACE_ID');
        $reviews = $this->googlePlaces->getReviews($placeId);

        return view('patient-testimonials', compact('reviews'));
    }
}
