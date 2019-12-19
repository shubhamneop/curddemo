<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\address;
use Illuminate\Http\Request;

class addressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $address = address::where('fullname', 'LIKE', "%$keyword%")
                ->orWhere('address1', 'LIKE', "%$keyword%")
                ->orWhere('address2', 'LIKE', "%$keyword%")
                ->orWhere('zipcode', 'LIKE', "%$keyword%")
                ->orWhere('phoneno', 'LIKE', "%$keyword%")
                ->orWhere('mobileno', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $address = address::latest()->paginate($perPage);
        }

        return view('admin.address.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    { 
        $this->validate($request,[
          'fullname'=>'required',
          'address1'=>'required',
          'zipcode'=>'required|max:6',
          'country'=>'required|alpha',
          'state'=>'required|alpha',
          'mobileno'=>'required|numeric|min:10',
        ]);  
        $requestData = $request->all();
        
        address::create($requestData);

        return redirect('admin/address')->with('flash_message',__('alerts.address.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $address = address::findOrFail($id);

        return view('admin.address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $address = address::findOrFail($id);

        return view('admin.address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $address = address::findOrFail($id);
        $address->update($requestData);

        return redirect('admin/address')->with('flash_message',__('alerts.address.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        address::destroy($id);

        return redirect('admin/address')->with('flash_message',__('alerts.address.deleted'));
    }
}
