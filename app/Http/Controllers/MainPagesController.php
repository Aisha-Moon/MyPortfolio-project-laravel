<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    /**
     * Display a listing of the resource.
     */
     public function index(){
        $main = Main::first();
        return view('pages.main',compact('main'));
    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|string',
            'sub_title'=>'required|string',
        ]);
        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

    if($request->file('bc_img')){
         $img_file = $request->file('bc_img');
         $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
         $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
      }
    if($request->file('logo_img')){
         $img_file = $request->file('logo_img');
         $img_file->storeAs('public/img/','logo_img.' . $img_file->getClientOriginalExtension());
         $main->logo_img = 'storage/img/logo_img.' . $img_file->getClientOriginalExtension();
      }
    if($request->file('resume')){
         $pdf_file = $request->file('resume');
         $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
         $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
      }
        $main->save();
        return redirect('admin/main')->with('success', 'Main page data has been submitted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
