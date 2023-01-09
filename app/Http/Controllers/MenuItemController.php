<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Menu_Item;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menulist= Menu_Item::get();
        return view('layouts.app',compact('menulist'));
    }

    public function list(){
        $menulist = Menu_Item::get();
        return view('menu.list', compact('menulist'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menulist = Menu_Item::orderby('id', 'asc')->get();
        $menu=Menu::get();
        return view('menu.create', compact('menulist', 'menu'));
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
            'menu_id'=>'required',
            'title' => 'required',
            'link' => 'required',

        ]);
        $data = $request->all();
        Menu_Item::create($data);
        return redirect('/admin/dashboard/menuitems');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu_Item  $menulist
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu_Item $menulist)
    {
       $menu=Menu::get();
        return view('menu.edit', compact('menulist', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu_Item  $menulist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu_Item $menulist)
    {
        $request->validate([
            'menu_id' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);
        $menulist-> update($request->all());
        return redirect('/admin/dashboard/menuitems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu_Item  $menulist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu_Item $menulist)
    {
        $menulist-> delete();
        return redirect('/admin/dashboard/menuitems');
    }
}
