<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image_path',
        'status'
    ];

    /**
     * Se encarga de subir la imagen a la carpeta /public/images
     * y retorna el nombre de ese archivo
     * @param  Request  $request
     * @return $fileName
     */

    public function uploadImage($request)
    {
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $fileName  = $file->getClientOriginalName();
            $file->move(public_path("images/"), $fileName);
            return $fileName;
        }
    }

    public function getProducts(){
        $products = DB::table('products')->where('status', 1)->paginate(10);
        return $products;
    }
}
