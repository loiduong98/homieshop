<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Model\news;

class NewsController extends Controller
{
    public function getList(){
        $news = news::orderBy('id_news','DESC')->get();
    	return view('admin.news.list',['news'=>$news]);
    }
    public function getAdd(){
        return view('admin.news.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'title'=>'required',
                'content'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'content.required'=>'Bạn chưa nhập nội dung',
            ]);
        $news = new news;
        $news->title = $request->title;
        $news->content = $request->content;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/news/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/news",$image);
            $news->image = $image;
        }
        else
        {
            $news->image = "";
        }
        $news->save();
        return redirect('admin/news/add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id_news){
        $news = news::find($id_news);
        return view('admin.news.edit',['news'=>$news]);
    }
    public function postEdit(Request $request,$id_news)
    {
        $news = news::find($id_news);
        $this->validate($request,
            [
                'title'=>'required',
                'content'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'content.required'=>'Bạn chưa nhập nội dung',
            ]);
        $news->title = $request->title;
        $news->content = $request->content;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');  

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("upload/news/".$image))
            {
                $image = Str::random(4)."_".$name;
            }
            $file->move("upload/news",$image);
            $news->image = $image;
        }
        else
        {
            $news->image = "";
        }
        $news->save();
        return redirect('admin/news/edit/'.$id_news)->with('thongbao','Sửa thành công');
    }
    public function getDelete($id_news)
    {

        $news = news::find($id_news);
        $news->delete();
        return redirect('admin/news/')->with('thongbao','Xóa thành công');
    }
}
