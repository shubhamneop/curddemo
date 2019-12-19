<?php

namespace App\Helpers;
use Illuminate\Http\Request;

class FileUpload 
{

public static function upload(Request $request, $fieldname = 'image', $directory = 'unknown' ) {

    if( $request->hasFile($fieldname ) ) {
            $filename =  $request->file($fieldname);

            $FileSaveAsName = $fieldname."_".uniqid() . "." .
            $filename->getClientOriginalExtension();

        if (!$request->file($fieldname)->isValid()) {
            flash('Invalid Image!')->error()->important();
            return redirect()->back()->withInput();
        }
        return $filename->storeAs($directory,$FileSaveAsName,'public');
    }
       $FileSaveAsName = 'image'."_".uniqid() ."." .
            $fieldname->getClientOriginalExtension();

        
        return $fieldname->storeAs($directory,$FileSaveAsName,'public');
  }


  public static function multiple($fieldname,$directory){

  	       $FileSaveAsName = 'image'."_".uniqid() ."." .
            $fieldname->getClientOriginalExtension();

        
        return $fieldname->storeAs($directory,$FileSaveAsName,'public');
  } 

}


