<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\ProductsPhoto;
use App\Image;
use Fileupload;
use App\Sample;

class ImageController extends Controller
{
    //

    private $image;
    public function __construct(Image $image)
    {
        $this->image = $image;
    }


    public function index(){

      $photos = Sample::orderBy('id','DESC')->get();
    	return view('image',compact('photos'));
    }




     public function uploadSubmit(Request $request)
      {  


        $product = Product::create($request->all());
        foreach ($request->photos as $photo) {

                       $upload_path = 'product/';

        	   //       $profileImageSaveAsName = time() . "-product." . $photo->getClientOriginalExtension();

            //           $filename = $profileImageSaveAsName;
            //       $success = $photo->move($upload_path, $profileImageSaveAsName);
            // $filename = $photo->store('product');

                    $filename = Fileupload::upload($request,$photo,'uploads');   
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
    }


    public function profile(){
       $id = Auth::User()->id;
           $profile = User::all()->find($id);

         return view('home',compact('profile'));
    }

  
    public function getImages()
    {
        return view('images')->with('images', auth()->user()->images);
    }
    public function postUpload(Request $request)
    {
        $path = Storage::disk('s3')->put('images/originals', $request->file);
        $request->merge([
            'size' => $request->file->getClientSize(),
            'path' => $path
        ]);
        $this->image->create($request->only('path', 'title', 'size'));
        return back()->with('success', 'Image Successfully Saved');
    }


  public function imageupload(Request $request) {

    $this->validate($request,[
     'photos' => 'required',

    ]);

    foreach ($request->photos as $photo) {
         // dd($photo);

                       $upload_path = 'product/';

               //       $profileImageSaveAsName = time() . "-product." . $photo->getClientOriginalExtension();

            //           $filename = $profileImageSaveAsName;
            //       $success = $photo->move($upload_path, $profileImageSaveAsName);
            // $filename = $photo->store('product');

                    $filename = Fileupload::multiple($photo,'uploads');   

            Sample::create([
                'name' => $request->name,
                'filename' => $filename
            ]);
        }
        return redirect()->back();
  }

 















    
}
