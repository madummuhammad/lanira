<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
class ProductController extends Controller
{
    public function product_detail($id)
    {
        $data['product']=Product::where('id',$id)->where('status','Publish')->first();
        return view('customer.productdetail',$data);
    }

    public function list_ready_stock($brand_id)
    {
        $data['slider']=Slider::get();
        $data['product']=Product::where('brand_id',$brand_id)->where('status','Publish')->paginate(12);
        $data['links']=$data['product']->links();
        return view('customer.product',$data);
    }

    public function list_po($brand_id)
    {
        return 'asfdsafd';
    }
}
