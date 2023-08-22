<?php
namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;
class MoviesController extends Controller{
  public function index(){
    $movies = Movies::all();
    return view('movies.index', compact('movies'));
  }
}