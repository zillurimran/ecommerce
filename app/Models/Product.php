<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product;
    public static function saveProduct($request){
        self::$product = new Product();
        self::$product->product_name = $request->product_name;
        self::$product->category_name = $request->category_name;

        self::$product->brand_name = $request->brand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::getImgUrl($request);
        self::$product->save();
    }

    private static function getImgUrl($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'adminAsset/product-image/';
        $imgUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }

    public static function status($id){
        self::$product = Product::find($id);
        if(self::$product->status==1){
            self::$product->status=0;
        }else{
            self::$product->status=1;
        }
        self::$product->save();
    }

    public static function updateProduct($request){
            self::$product = Product::find($request->product_id);
            self::$product->product_name = $request->product_name;
            self::$product->category_name = $request->category_name;
            self::$product->brand_name = $request->brand_name;
            self::$product->price = $request->price;
            self::$product->description = $request->description;
//            self::$product->image = self::getImgUrl($request);
            if($request->file('image')){
                if(self::$product->image !== null){
                    unlink(self::$product->image);
                }
                self::$product->image = self::getImgUrl($request);
            }
            self::$product->save();
    }

    public static function deleteProduct($request){
        self::$product = Product::find($request->product_id);
        if(file_exists(self::$product->image)){
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
