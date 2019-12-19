<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Image extends Model
{
    /* Fillable */
    protected $fillable = [
        'title', 'path', 'product_id'
    ];
    /* @array $appends */
    public $appends = ['url', 'uploaded_time'];
    
    public function getUrlAttribute()
    {
        return Storage::disk('s3')->url($this->path);
    }
    public function getUploadedTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }

      public function user()
      {
        return $this->belongsTo(User::class, 'product_id');
      }
   
    public static function boot()
    {
        parent::boot();
        static::creating(function ($image) {
            $image->product_id = auth()->user()->id;
        });
    }



}
