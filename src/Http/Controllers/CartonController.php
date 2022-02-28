<?php

namespace Brandonjjon\Carton\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use GrahamCampbell\GitHub\GitHubManager;

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
