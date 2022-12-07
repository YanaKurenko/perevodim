<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\Partner;
use App\Models\Accordion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;




class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function services(Page $page)
    {
        $pages = Page::with('accordions')->where('menu__items_id', 1)->get();

        return view('pages.services.index', compact('pages'));

    }

    public function aboutus(Page $page)
    {
        $pages = Page::with('accordions')->where('menu__items_id', 3)->get();
        $news= News::get();
        return view('pages.aboutUs.index', compact('pages','news'));

    }

    public function useful(Page $page)
    {
        $pages = Page::with('accordions')->where('menu__items_id', 4)->get();

        return view('pages.useful.index', compact('pages'));

    }

    public function contacts(){
        return view('pages.contacts.index');
    }

    public function onMainPage(){
        // $pages= Accordion::with('pages')->where('menu__items_id', 1)->limit(6)->get();
        // dd($pages);
        // $random = Arr::random($allAccord);
        // dd($random);
        $pages = Page::limit(6)->get();
        $services = News::limit(2)->get();
        $partners = Partner::get();
        return view('main.main', compact('pages', 'services','partners'));
    }


   

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page  $page)
    {
          return view('pages.index', compact('page'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
