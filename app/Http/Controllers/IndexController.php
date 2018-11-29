<?php
namespace App\Http\Controllers;

use App\Repositories\RequestRepository;

class IndexController extends Controller
{
    /**
     * Show the index page for the authenticated user
     */
    public function show(RequestRepository $repo)
    {
        $requests = $repo->all();

        return view('index', compact('requests'));
    }
}