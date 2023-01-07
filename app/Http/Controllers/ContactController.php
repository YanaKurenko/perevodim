<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variables = Variable::get();
        return view('pages.contacts.index', compact('variables'));
    }

    public function list() {
        $variables = Variable::get();
        // dd($variables);
        return view('pages.contacts.list', compact('variables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variables = Variable::orderby('id','asc')->get();
        return view('pages.contacts.create', compact('variables'));
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
            'key' => 'required',
            'value' => 'required',
            
        ]);
        $data = $request->all();
        Variable::create($data);
        return redirect('/admin/dashboard/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variable  $variable
     * @return \Illuminate\Http\Response
     */
    public function show(Variable $variable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variable  $variable
     * @return \Illuminate\Http\Response
     */
    public function edit(Variable $variable)
    {
        return view('pages.contacts.edit', compact('variable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variable  $variable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variable $variable)
    {
        $request->validate([
            'key' => 'required',
            'value' => 'required',
        ]);
        $variable->update($request->all());
        return redirect('/admin/dashboard/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variable  $variable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variable $variable)
    {
        $variable-> delete();
        return redirect('/admin/dashboard/list');
    }
}
