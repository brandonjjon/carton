<?php

namespace Brandonjjon\Carton\Http\Controllers;

use GrahamCampbell\GitHub\GitHubManager;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartonController extends Controller
{
    protected $github;

    /**
     * CartonController constructor.
     */
    public function __construct(
        GitHubManager $github
    ) {
        $this->github = $github;
    }

    /**
     * Display Carton index page.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        $gh = $this->github->repo()->contents()->show('parkervcp', 'eggs');
        // dd($gh);
        return view('carton::admin.carton.index');
    }
}
