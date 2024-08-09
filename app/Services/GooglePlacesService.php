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

            if (isset($data['result']['reviews'])) {
				$reviews = $data['result']['reviews'];

				usort($reviews, function ($a, $b) {
					return $b['time'] - $a['time'];
				});

                return $reviews;
            }

            return [];
        } catch (\Throwable $th) {
            return [];
        }

    }
}
