<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use DB;
class CategoryController extends Controller
{
        public function manageCategory()

    {

        $categories = category::where('parent_id', '=', 0)->get();

        $allCategories = category::pluck('title','id')->all();

        return view('categoryTreeview',compact('categories','allCategories'));

    }




    public function index(){

            
$categories = DB::table('categories as c1')
    ->leftJoin('categories as c2','c2.parent_id','=','c1.id')
    ->leftJoin('categories as c3','c3.parent_id','=','c2.id')
    ->leftJoin('categories as c4','c4.parent_id','=','c3.id')
    ->select('c1.id as c1_id','c1.title as c1_name','c2.id as c2_id','c2.title as c2_name','c3.id as c3_id','c3.title as c3_name','c4.id  as c4_id','c4.title as c4_name')
    ->where('c1.parent_id','=',0)
    ->get();

     return view('index',compact('categories'));
            

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function addCategory(Request $request)

    {

        $this->validate($request, [

        		'title' => 'required',

        	]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        

        category::create($input);

        return back()->with('success', 'New Category added successfully.');

    }


//
}
