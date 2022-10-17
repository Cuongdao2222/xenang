<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banners;

use App\Models\Product;



class indexController extends Controller
{
    public function index()
    {

        $banners = banners::get();
        return view('frontend.index', compact('banners'));
    }

    public function readFile(){
        $link = base_path().'/public/css/category.css';
        $fp = fopen($link, "r");//mở file ở chế độ đọc
        while (! feof ($fp)) {
            $c = fgetc($fp);
            if ($c == "\n") {
                echo "<br>";
            } else {
                echo $c;
            }
        }
        fclose($fp);
    }

    public function searchByInput(Request $request)
    {
        $clearData = trim($request->key);

        $data      = strip_tags($clearData);

        if(empty($data)){
            return redirect()->route('homeFe');

        }

        $resultProduct = [];

        $find_first = Product::select('id')->where('name','LIKE', '%'. $data .'%')->OrWhere('product_sku', 'LIKE', '%' . $data . '%')->get()->pluck('id');

        if(isset($find_first)){

            foreach ($find_first as  $value) {

                array_push($resultProduct, $find_first);
            }


        }


        if(isset($resultProduct)){

            $products = Product::whereIn('id', $resultProduct)->paginate(10);

             return view('frontend.search')
            ->with('datas', $products);

        }
        else{
            $data = [];
            return view('frontend.search', compact('datas'));
            // Flash::error('Không tìm thấy sản phẩm, vui lòng tìm kiếm lại"');
        }

       
    }
   
}
