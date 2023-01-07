<?php

namespace App\Http\Controllers;

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
        $menulist= Menu_Item::all();
        return view('menu',compact('menulist'));
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
     * @param  \App\Models\Menu_Item  $menu_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Menu_Item $menu_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu_Item  $menu_Item
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu_Item $menu_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu_Item  $menu_Item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu_Item $menu_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu_Item  $menu_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu_Item $menu_Item)
    {
        //
    }
}
