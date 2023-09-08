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
        $response = Http::withOptions(['verify' => false])->get('https://restcountries.com/v3.1/all?fields=name,cca2');
        $countries = $response->json();
        return view('countries.index', compact('countries'));
    }

    public function show($country)
    {
        return view('countries.show', compact('country'));
    }
}
