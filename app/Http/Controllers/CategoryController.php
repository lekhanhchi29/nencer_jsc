<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Receipt;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Constracts\View\View
     */
    public function index()
    {
        $categories = Category::with('receipts')->get();

        foreach ($categories as $category) {
            //Duyet tung don hang cua tung category
            $totalReceiptInStock = 0;
            $totalReceiptOutStock = 0;
            $totalProduct = 0;
            foreach ($category->receipts as $receipt){
                //Kiểm tra xem đơn nhập thì cộng tổng
                if($receipt->type == Receipt::InStock) {
                    $totalReceiptInStock++;

                }
                //Kiểm tra xem đơn xuất thì cộng tổng
                if ($receipt->type == Receipt::OutStock) {
                    $totalReceiptOutStock++;

                }
                //Cộng đơn số lượng sản phẩm
                $totalProduct += $receipt->quantity;
            }
            //Sau khi tính toán xong thì gán giá trị cho đối tượng
            $category->total_receipt_in_stock = $totalReceiptInStock;
            $category->total_receipt_out_stock = $totalReceiptOutStock;
            $category->total_product = $totalProduct;
        }
        //dd($categories);
        return view('pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
