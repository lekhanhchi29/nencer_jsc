<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Receipt;
use Carbon\Carbon;


class ReceiptExport implements FromCollection, WithHeadings
{
    private $date;
    /**
     * @param mixed $date filter.
     */
    public function __construct($date)
    {
        $this->date = $date;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Lệnh query để lấy dữ liệu export.
        $receipts = Receipt::join(
            'categories', 'receipts.category_id','categories.id'
        )->select(
            'receipts.id','receipts.name','categories.name as category_name',
            'receipts.total_price','receipts.quantity','receipts.delivery_date',
            'receipts.note','receipts.type','receipts.status'
        )->whereDate('receipts.created_at', $this->date)->get();
        $totalReceipted = 0;
        //Kiểm tra nếu có dữ liệu thi convert lại trường type và status.
        if ( count($receipts) > 0) {
            foreach ($receipts as $receipt) {
                //Convert type to text
                if ($receipt->type == Receipt::InStock){
                    $receipt->type_txt = "Đơn nhập";
                }
                if ($receipt->type == Receipt::OutStock){
                    $receipt->type_txt = "Đơn xuất";
                }
                //Convert status 0: processing, 1 done.
                if ($receipt->status == Receipt::STATUS_PROCESSING){
                    $receipt->status_txt = "Đang xử lý";
                }
                if ($receipt->status == Receipt::STATUS_DONE){
                    $totalReceipted++;
                    $receipt->status_txt = "Hoàn thành";
                }
                $deliveryDate = Carbon::create($receipt->delivery_date);
                $receipt->delivery_date = $deliveryDate->format('Y-m-d');
                unset($receipt->type, $receipt->status);
            }
        }
        return $receipts;
    }

    /**
     * Set heading for sheet
     * @return string[]
     */
    public function headings(): array
    {
        return [
            'ID',
            'Tên đơn hàng',
            'Danh mục',
            'Tổng chi phí(VND)',
            'Số sản phẩm',
            'Ngày giao',
            'Ghi chú',
            'Loại',
            'Trạng thái'
        ];
    }
}
