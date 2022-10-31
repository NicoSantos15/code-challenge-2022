<?php

namespace App\Http\Controllers;

use App\Http\Utilities\UnsplashAPI;
use App\Models\SearchModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchController extends Controller
{

    public function index(Request $request)
    {

        $data = UnsplashAPI::getImages($request->search);
        return Inertia::render('App', [
            'currentPage' => $data

        ]);
    }

    public function store(Request $request)
    {
        // SearchModel::create($request->all());
        $data = UnsplashAPI::getImages($request);

        Inertia::render('App', [
            'currentPage' => $data
        ]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        if ($request->has('id')) {
            SearchModel::find($request->input('id'))->update($request->all());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            SearchModel::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
