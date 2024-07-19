<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get();
        return response()->json($movies);
    }
    public function show($id)
    {
        $movie = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
        return response()->json($movie);
    }
    
    public function getMoviesByGenreTitle($title)
    {
        $genre = Genre::where('gen_title', $title)->first();

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }


        $movies = Movie::whereHas('genres', function($query) use ($genre) {
            $query->where('genres.gen_id', $genre->gen_id);
        })->get();

        if ($movies->isEmpty()) {
            return response()->json(['message' => 'No movies found for this genre title'], 404);
        }

        return response()->json($movies);
    }

    public function getMoviesByRating($rating)
    {
       
        $movies = Movie::whereHas('ratings', function ($query) use ($rating) {
            $query->where('rev_stars', $rating);
        })->with(['ratings.reviewer'])->get();

        if ($movies->isEmpty()) {
            return response()->json(['message' => 'No movies found with this rating'], 404);
        }

        return response()->json($movies);
    }
}
