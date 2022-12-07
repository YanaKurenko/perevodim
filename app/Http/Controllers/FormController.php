<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class FormController extends Controller
{

    public function sendmail(Request $request){
        
        $request->validate([
            'contact'=> 'required',
            'message'=> 'required',
            'file'=> 'required|mimes:.xls,xlsx,rtf,txt,odt,pdf,doc,docx|max:5000'

        ]);
     
        if ($request->isMethod('post') && $request->file('file')) {
            $file = $request->file('file');
            $upload_folder = 'public/folder/';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);
        }

        $data = [
            'contact' => $request->contact,
            'message' => $request->message,
            'file' => $request->file,

        ];
       
        $upload_folder = 'C:\Users\owner\Documents\Visual Studio 2017\Templates\Perevodim\perevodim\public\storage\folder\\' . $filename; // ADDRESS WHERE THE FILE IS STORE

       Mail::to("yana.kurenko@krabutech.ee")->send(new SendMail($data, $upload_folder), function ($message) use ($data,$upload_folder) {//, $filename
            $message->to("yana.kurenko@krabutech.ee")->subject($data);
            // foreach($data as $upload_folder){
            $message->attach($upload_folder);//,$filename
            // }
        });
        
        return redirect()->back();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
