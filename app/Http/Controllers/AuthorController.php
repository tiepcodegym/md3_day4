<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
       $authors = DB::table('authors')->get();
       return view('backend.author.list', compact('authors'));
    }

    public function showFormCreate()
    {
        return view('backend.author.create');
    }

    public function create(Request $request)
    {
        DB::table('authors')->insert([
            'name' => $request->name,
            'country' => $request->country
        ]);
        return redirect('authors');
    }

    public function show($id)
    {
        $author = DB::table('authors')->where("id",$id)->get()->first();
        return view('backend.author.detail', compact('author'));
    }

    public function destroy($id)
    {
        DB::table('authors')->where('id', $id)->delete();
        return redirect('authors');
    }
}
