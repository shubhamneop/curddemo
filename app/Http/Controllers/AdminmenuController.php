<?php

namespace App\Http\Controllers;

use App\Adminmenu;
use App\AdminMenuItem;
use App\Samplemenu;
use Illuminate\Http\Request;

class AdminmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      
        $menu = AdminMenuItem::with('menu', 'children')->get();
        $menus = Adminmenu::with('submenu')->get();
        return view('listmenu', compact('menus'));
    }

    public function demo(){

        $menus = Samplemenu::with('parent','children')->where('parent_id',null)->get();
        return view('menuslist',compact('menus'));

    }

    public function createMenu(){

        $menus = Samplemenu::pluck('name', 'id');

        return view('addmenu', compact('menus'));
    }

    public function storeMenu(Request $request){

        Samplemenu::create($request->all());

        
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
        Adminmenu::create($request->all());
    }

    public function addSubMenu()
    {

        $menus = Adminmenu::pluck('name', 'id');

        return view('menuitem', compact('menus'));
    }

    public function storeSubMenu(Request $request)
    {
        $data = AdminMenuItem::create($request->all());
        return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Adminmenu  $adminmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Adminmenu $adminmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adminmenu  $adminmenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminmenu $adminmenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adminmenu  $adminmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminmenu $adminmenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adminmenu  $adminmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminmenu $adminmenu)
    {
        //
    }
}
