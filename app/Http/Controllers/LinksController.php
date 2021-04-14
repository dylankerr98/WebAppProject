<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller {


    public function index() {
        $links = Link::latest()->get();
        return view('links.index', ['links' => $links]);

    }


    public function create() {
        //
    }


    public function store(Request $request) {
        //
    }


    public function show($id) {
        $link = Link::find($id);
        return view('links.show', ['link' => $link]);

    }


    public function edit($id) {
        //
    }


    public function update(Request $request, $id) {
        //
    }


    public function destroy($id) {
        //
    }
}
