<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchNetflix extends Component
{
    public $searchNetflix = '';

    public function render()
    {
        $searchNetflixResults = [];

        if (strlen($this->searchNetflix >= 3)) {
            $searchNetflixResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->searchNetflix)
                ->json()['results'];
        }

        // dd($searchNetflixResults);

        return view('livewire.search-netflix', [
            'searchNetflixResults' => collect($searchNetflixResults)->take(7),
        ]);
    }
}
