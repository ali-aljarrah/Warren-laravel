<?php

namespace App\Services;

use GuzzleHttp\Client;

class GooglePlacesService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('GOOGLE_PLACES_API_KEY');
    }

    public function getReviews($placeId)
    {
        try {
            $url = 'https://maps.googleapis.com/maps/api/place/details/json';
            $response = $this->client->get($url, [
                'query' => [
                    'place_id' => $placeId,
                    'fields' => 'reviews',
                    'key' => $this->apiKey,
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            dd($data);

            if (isset($data['result']['reviews'])) {
                return $data['result']['reviews'];
            }

            return [];
        } catch (\Throwable $th) {
            abort(500);
        }

    }
}
