<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Menu_Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;




class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function services()
    {
        $pages = Page::with('accordions')->where('menu__items_id', 1)->get();

        return view('pages.services.index', compact('pages'));

    }

    public function aboutus()
    {
        $pages = Page::with('accordions')->where('menu__items_id', 3)->get();
        $news= News::get();
        return view('pages.aboutUs.index', compact('pages','news'));

    }

    public function useful()
    {
        $pages = Page::with('accordions')->where('menu__items_id', 4)->get();

        return view('pages.useful.index', compact('pages'));

    }

    public function contacts(){
        // $variables= Variable::get();
        // return view('pages.contacts.index', compact('variables'));
    }

    public function onMainPage(){
        $x = Service::get();
        $services = News::limit(2)->get();
        $partners = Partner::get();
        return view('main.main', compact('x', 'services', 'partners'));
    }

    public function listPages()
    {
        $menuItems = Menu_Item::get();
        $pages = Page::with('accordions')->get();
        return view('pages.admin.list', compact('pages', 'menuItems'));
    }

    public function pageItem(Request $request)
    {
        $data = $request->all();
        $menuItems = Menu_Item::get();
        
        $selectItem = $data['menu__items_id'];
       

        if ($data['menu__items_id'] == "0") {
            return redirect('/pages');
        } else {
            $pages = Page::where('menu__items_id', $data['menu__items_id'])->get();
            return view('pages.admin.list', compact('pages', 'menuItems', 'selectItem'));
        }
    }
   

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menuItems = Menu_Item::get();
        return view('pages.admin.create', compact('menuItems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'menu__items_id' => 'required',
            'title' => 'required',
            'body' => 'required',

        ]);
        $data = $request->all();
        Page::create($data);
        return redirect('/admin/dashboard/pages');
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
        $menuItems=Menu_Item::get();
        return view('pages.admin.edit',compact('page','menuItems'));
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
        $request->validate([
            'menu__items_id' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        $page->update($request->all());
        return redirect('/admin/dashboard/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page-> delete();
        return redirect('/admin/dashboard/pages');
    }
}
