<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $pages = Page::all();

        return view('pages.index', compact('pages'));
    }

    public function show($id) {
        $page = Page::findOrFail($id);

        return view('pages.show', compact('page'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required|min:3',
            'hidden' => 'required',
        ]);
        Page::create($request->all());

        return redirect('/pages');
    }
}
