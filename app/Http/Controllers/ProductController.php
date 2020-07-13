<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use http\Message;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct(){
        $product = Product::with("Category")->paginate(20);//nạp sẵn phần cần nạp trong collection
        return view("product.list",["products"=>$product]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
    }
    public function newProduct(){
        // phai lay du lieu tu cac bang phu
        $category = Category::all();
        return view("product.new",[
                "categories"=>$category
            ]
        );
    }
    public function saveProduct(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $request->validate([
            "product_name"=>"required",
            "product_desc"=>"required",
            "product_price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:1",
            "category_id"=>"required"
        ]);
        try {

            Product::create([
                "product_name"=>$request->get("product_name"),
                "product_image"=>$request->get("product_image"),
                "product_image1"=>$request->get("product_image1"),
                "product_image2"=>$request->get("product_image2"),
//                "product_image3"=>$request->get("product_image3"),
//                "product_image4"=>$request->get("product_image4"),
                "product_desc"=>$request->get("product_desc"),
                "product_price"=>$request->get("product_price"),
                "qty"=>$request->get("qty"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $exception){
        return redirect()->back();
//            return $exception->getMessage();
        }
        return redirect()->to("/admin/list-product");
    }

    public function editProduct($id){
        $category = Category::all();
        $product = Product::findOrFail($id);
        return view("product.edit",[
            "categories"=>$category,
            "product" => $product]);
    }
    public function updateProduct($id,Request $request){
        $products = Product::findOrFail($id);
        $request->validate([
            "product_name"=>"required|min:3|unique:products,product_name,($id)",
            "product_desc"=>"required",
            "product_price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:1",
            "category_id"=>"required",
        ]);
        try {


            $products->update([
                "product_name"=>$request->get("product_name"),
                "product_image"=>$request->get("product_image"),
                "product_image1"=>$request->get("product_image1"),
                "product_image2"=>$request->get("product_image2"),
//                "product_image3"=>$request->get("product_image3"),
//                "product_image4"=>$request->get("product_image4"),
                "product_desc"=>$request->get("product_desc"),
                "product_price"=>$request->get("product_price"),
                "qty"=>$request->get("qty"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-product");
    }
    public function deleteProduct($id){
        $products = Product::findorFail($id);
        try {
            $products->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-product");
    }
    public function searchUser(Request $request){
        $output = '';
        if ($request->ajax()) {
            $products = Product::where('product_name', 'like', '%'.$request->search.'%')
                ->orwhere('product_desc', '%'.$request->search.'%')
                ->orwhere('product_price', '%'.$request->search.'%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                                <td>'. $product->id .'</td>
                                <td>'. $product->product_name .'</td>
                                <td><img src="'. $product->product_image .'" style="width: 50px; height: 50px"></td>
                                <td><img src="'. $product->product_image1 .'" style="width: 50px; height: 50px"></td>
                                <td><img src="'. $product->product_image2 .'" style="width: 50px; height: 50px"></td>
                                <td>'. $product->product_desc .'</td>
                                <td>'. $product->product_price .'</td>
                                <td>'. $product->qty .'</td>
                                <td>'. $product->category_id .'</td>
                                <td>'. $product->created_at .'</td>
                                <td>'. $product->updated_at .'</td>
                                <td>
                                    <a href="http://127.0.0.1:8000/admin/edit-product/'. $product->id .'" class="btn btn-outline-dark">Edit</a>
                                </td>
                                <td>
                                    <form action="http://127.0.0.1:8000/admin/delete-product/'. $product->id .'" method="post">
                                        <input type="hidden" name="_method" value="DELETE">                                        <input type="hidden" name="_token" value="dAKuGx9nKdhb78Z0djNgUel4rJrC3qQXDbvkYF8M">                                        <button type="submit" onclick="return confirm(\'chac khong?\');" class="btn btn-outline-dark">Delete</button>
                                    </form>
                                </td>
                            </tr>';
                }
            }
            return Response($output);
        }
    }
}

