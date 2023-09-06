<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://restcountries.com/v3/all');
        $countries = $response->json();
        return view('countries.index', compact('countries'));
    }
}
