<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    public function index()
    {
        return view('admin.tour');
    }
    public function createIndex()
    {
        return view('admin.action.tour-create');
    }
    public function editIndex($id)
    {
        $data = Tour::findOrFail($id);
        return view('admin.action.tour-edit')->with('data', $data);
    }

    public function create(Request $request, $id = null )
    {
        $data = $request->all();		// lấy dữ liệu nhận được từ request
        $rules = [
			"name"          =>["required"],	// bắt buộc
			"image"         => ["nullable","mimes:jpeg,bmp,png,jpg", "max:500"], // không bắt buộc, tối đa 500kb
			"description"   => ["required","max: 255"],	// bắt buộc, tối đa 255 ký tự
			"price" 		=> ["required","numeric","max:99999999"], // bắt buộc, phải là số, tối thiểu > 0, tối đa <99999999
            "duration" 		=> ["required","numeric","min:1","max:30"], // bắt buộc, phải là số, tối thiểu > 0, tối đa <30
        ];
		$fields = [
			"name"          => "Tên tour",
			"image" 		=> "Ảnh",
			"description"	=> "Mô tả",
			"price" 		=> "Giá",
            "duration" 		=> "Thời gian",
		];
		$validator = Validator::make($data, $rules, [], $fields);
		$validator->validate();
		if ($id == null) {
			$action = "Thêm";
		} else {
			$action = "Cập nhật";
		}
		try {
			unset($data["_token"]);
			$file = $request->file('image');
			if ($file != null) {
				$filename = $file->hashName();
				$file->storeAs("/public/image", $filename);
				$data["image"] = $filename;
			}
			$sp = Tour::updateOrCreate(['id' => $id], $data);
			return redirect()
				->route('admin.tours')
				->with('success_mesg', "$action dữ liệu thành công");
		} catch (Exception $ex) {
			return redirect()
				->back()
				->withInput()
				->with('error_mesg', "$action dữ liệu thất bại (Chi tiết: " . $ex->getMessage() . ")");
		}
    }
    public function store(Request $request)
    {
        //
    }
    public function destroy($id)
    {
            Tour::destroy($id);
            return redirect()->back();
    }
}
