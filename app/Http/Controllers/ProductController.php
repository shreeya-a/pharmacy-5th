<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Section;

use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    public  function product()
    {
        $product = Product::all();
        return view('product.product',compact('product'));
    }
    public  function addProduct()
    {
        $category = Category::all();
        $section = Section::all();

        return view('product.addProduct', ['category' => $category], ['section' => $section]);
    }
    public function saveProduct(Request $req)
    {
        $req->validate([
            'product' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($req->hasFile('image')) {

            $req->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $productObj = new Product();

            $name = $req->file('image');
            $file_path = $name->store('product', 'public');
            $productObj->image = $file_path;

            $productObj->product = $req->product;
            $productObj->price = $req->price;
            $productObj->description = $req->description;
            $productObj->category_id = $req->category;
            $productObj->section_id = $req->section;
            $productObj->featured = $req->input('featured')==TRUE? '1':'0';
            $productObj->popular = $req->input('popular')==TRUE? '1':'0';
            $productObj->prescribed = $req->input('prescribed')==TRUE? '1':'0';

            $productObj->save();
        return redirect()->route('product')->with('success',"Product added successfully");

        }
    }
        // return redirect()->route('product');
    public function deleteProduct($id)
        {
            $productObj= Product::find($id);
          

                $path = 'storage/'. $productObj->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
            
            $productObj->delete();
            return redirect()->route('product')->with('success',"Product deleted successfully");

            
        }
        public function editProduct($id)
        {
            $product= Product::find($id);
            $category = Category::all();
            $section = Section::all();
            return view('product.editProduct', ['product' => $product,'category' => $category,'section' => $section]);
        
            
        }
        public function updateProduct(Request $req)
        {
            $productObj = Product::find($req->id);
        
            if ($req->hasFile('image')) {

                $destination = 'storage/'. $productObj->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $name = $req->file('image');
                $file_path = $name->store('product', 'public');
                $productObj->image = $file_path;            
            }
        
            $productObj->product = $req->product;
            $productObj->price = $req->price;
            $productObj->description = $req->description;
            $productObj->category_id = $req->category;
            $productObj->section_id = $req->section;
            $productObj->featured = $req->input('featured')==TRUE? '1':'0';
            $productObj->popular = $req->input('popular')==TRUE? '1':'0';
            $productObj->prescribed = $req->input('prescribed')==TRUE? '1':'0';
            $productObj->update();

        return redirect()->route('product')->with('success',"Product updated successfully");
        
    }
}
    

