<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Model\product;

class ProductController extends Controller
{
    public function getList(){
        $product = product::orderBy('id_product','DESC')->get();
    	return view('admin.product.list',['product'=>$product]);
    }
    public function getAdd(){
        return view('admin.product.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:products',
                'description'=>'required',
                'unit_price'=>'required',
                'promotion_price'=>'required'
            ],
            [
                'name.unique'=>'Tên sản phẩm đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả',
                'name.min'=>'Tên sản phẩm quá ngắn',
                'name.max'=>'Tên sản phẩm quá dài',
                'unit_price.required'=>'Bạn chưa nhập mô tả',
                'promotion_price.required'=>'Bạn chưa nhập mô tả',
            ]);
        $product = new product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->new = $request->new;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/product/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/product",$image);
            $product->image = $image;
        }
        else
        {
            $product->image = "";
        }
        $product->save();
        return redirect('admin/product/add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id_product){
        $product = product::find($id_product);
        return view('admin.product.edit',['product'=>$product]);
    }
    public function postEdit(Request $request,$id_product)
    {
        $product = product::find($id_product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->new = $request->new;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/users/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/product",$image);
            $product->image = $image;
        }
        else
        {
            $product->image = "";
        }
        $product->save();
        return redirect('admin/product/edit/'.$id_product)->with('thongbao','Sửa thành công');
    }
    public function getDelete($id_product)
    {

        $product = product::find($id_product);
        $product->delete();
        return redirect('admin/product/')->with('thongbao','Xóa thành công');
    }
}
