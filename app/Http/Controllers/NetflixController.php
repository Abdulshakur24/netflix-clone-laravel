<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NetflixController extends Controller
{
    public function index()
    {
        $fetcher = function ($slug, $type = "results") {
            return Http::withToken(config('services.tmdb.token'))->get($slug)->json()[$type];
        };

        $populars = $fetcher('https://api.themoviedb.org/3/movie/popular');

        $trending = $fetcher('https://api.themoviedb.org/3/trending/movie/day');

        $netflixgenres = $fetcher('https://api.themoviedb.org/3/genre/movie/list', 'genres');

        $comedies = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=35');

        $action = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=28');

        $western = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=37');

        $horror = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=27');

        $thriller = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=53');

        $animation = $fetcher('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=16');

        $genres = collect($netflixgenres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        // dd([
        //     'popular' => $populars,
        //     'genres' => $genres,
        //     'trending' => $trending,
        //     'comedies' => $comedies,
        //     'western' => $western,
        //     'action' => $action,
        //     'horror' => $horror,
        //     'thriller' => $thriller,
        //     'animation' => $animation,
        // ]);

        $index = array_rand($populars);

        $popular = (object) $populars[$index];

        return view('main', [
            'popular' => $popular,
            'populars' => $populars,
            'genres' => $genres,
            'trending' => $trending,
            'comedies' => $comedies,
            'western' => $western,
            'action' => $action,
            'horror' => $horror,
            'thriller' => $thriller,
            'animation' => $animation,
        ]);
    }

    public function show($id)
    {
        $playMovie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        return view('components.movies.show', [
            'movies' => $playMovie,
        ]);
    }
}
