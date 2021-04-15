<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LinksController extends Controller {


    public function index() {

        $links = Link::latest()->get();
        return view('links.index', ['links' => $links]);

    }

    public function show(Link $link) {

        return view('links.show', ['link' => $link]);
    }


    public function create() {

        return view('links.create');
    }


    public function store(Request $request) {

        $date = $this->getDate();

        request()->validate([
            'title' => ['required', 'max:255'],
            'url' => 'required',
            'category' => 'required'
        ]);

        Link::create([
            'title' => request('title'),
            'url' => request('url'),
            'category' => request('category'),
            'publication_date' => $date,
            'date_last_accessed' => $date,
        ]);

        return redirect('/links');
    }


    public function edit(Link $link) {

        return view('links.edit', ['link' => $link]);
    }


    public function update(Link $link) {

        $date = $this->getDate();

        $link->update(request()->validate([
            'title' => 'required',
            'url' => 'required',
            'category' => 'required',
            'date_last_accessed' => $date
       ]));

        return redirect('/links/' . $link->id);
    }


    public function destroy(Link $link) {

        $link->delete();
        return redirect('/links');
    }

    protected function getDate(){

        $dt = Carbon::now();
        return $dt->toDateString();
    }

}
