<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Model\type_products;

class TypeProductController extends Controller
{
    public function getList(){
        $type_products = type_products::orderBy('id_typeproduct','DESC')->get();
    	return view('admin.type_products.list',['type_products'=>$type_products]);
    }
    public function getAdd(){
        return view('admin.type_products.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:type_products',
                'description'=>'required',
            ],
            [
                'name.unique'=>'Tên sản phẩm đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả',
                'name.min'=>'Tên sản phẩm quá ngắn',
                'name.max'=>'Tên sản phẩm quá dài',
            ]);
        $type_products = new type_products;
        $type_products->name = $request->name;
        $type_products->description = $request->description;
        // dd($request->description);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/type_products/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/type_products",$image);
            $type_products->image = $image;
        }
        else
        {
            $type_products->image = "";
        }
        $type_products->save();
        return redirect('admin/type_products/add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id_typeproduct){
        $type_products = type_products::find($id_typeproduct);
        return view('admin.type_products.edit',['type_products'=>$type_products]);
    }
    public function postEdit(Request $request,$id_typeproduct)
    {
        $type_products = type_products::find($id_typeproduct);
        $type_products->name = $request->name;
        $type_products->description = $request->description;
        // dd($request->description);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/type_products/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/type_products",$image);
            $type_products->image = $image;
        }
        else
        {
            $type_products->image = "";
        }
        $type_products->save();
        return redirect('admin/type_products/edit/'.$id_typeproduct)->with('thongbao','Sửa thành công');
    }
    public function getDelete($id_typeproduct)
    {

        $product = product::find($id_typeproduct);
        $product->delete();
        return redirect('admin/type_products/')->with('thongbao','Xóa thành công');
    }
}

