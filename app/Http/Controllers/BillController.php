<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\bills;

class BillController extends Controller
{
    public function getList(){
        $bills = bills::orderBy('id_bills','DESC')->get();
    	return view('admin.bill.list',['bills'=>$bills]);
    }
    // public function getAdd(){
    //     return view('admin.bill.add');
    // }
    // public function postAdd(Request $request)
    // {
    //     $this->validate($request,
    //         [
    //             'date_order'=>'required',
    //             'total'=>'required',
    //             'payment'=>'required',
    //         ],
    //         [
    //             'date_order.required'=>'Bạn chưa nhập ngày đặt hàng',
    //             'total.required'=>'Bạn chưa nhập tổng tiền',
    //             'payment.required'=>'Bạn chưa chọn hình thức thanh toán',
    //         ]);
    //     $bills = new bills;
    //     $bills->date_order = $request->date_order;
    //     $bills->total = $request->total;
    //     $bills->payment = $request->payment;
    //     $bills->note = $request->note;
    //     $bills->save();
    //     return redirect('admin/bill/add')->with('thongbao','Thêm thành công');
    // }
    public function getEdit($id_bills){
        $bills = bills::find($id_bills);
        return view('admin.bill.edit',['bills'=>$bills]);
    }
    public function postEdit(Request $request,$id_bills)
    {
        $bills = bills::find($id_bills);
            $this->validate($request,
                [
                    'date_order'=>'required',
                    'total'=>'required',
                    'payment'=>'required',
                ],
                [
                    'date_order.required'=>'Bạn chưa nhập ngày đặt hàng',
                    'total.required'=>'Bạn chưa nhập tổng tiền',
                    'payment.required'=>'Bạn chưa chọn hình thức thanh toán',
                ]);
            
            $bills->date_order = $request->date_order;
            $bills->total = $request->total;
            $bills->payment = $request->payment;
            $bills->note = $request->note;
            $bills->save();
        return redirect('admin/bill/edit/'.$id_bills)->with('thongbao','Sửa thành công');
    }
    public function getDelete($id_bills)
    {

        $bills = bills::find($id_bills);
        $bills->delete();
        return redirect('admin/bill/')->with('thongbao','Xóa thành công');
    }
}