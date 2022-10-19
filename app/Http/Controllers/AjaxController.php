<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class AjaxController extends Controller
{
    protected function checkActive(Request $request)
    {
        $id = $request->product_id;

        $active = $request->active;

        $product = product::find($id);

        $product->active = $active;

        $product->save();

        echo "thanh cong";

    }

    public function convertLinkPro()
    {
        $product = product::get();

        foreach ($product as $key => $value) {
            
            $products = product::find($value->id);
            $products->link = convertSlug($products->name);
            $products->save();

        }
        echo "thanh cong";
    }
}
