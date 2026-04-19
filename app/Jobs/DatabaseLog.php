<?php

namespace App\Jobs;

use App\Models\Receipt;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class DatabaseLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Xuất ra file Log bảng receipts.
        $receipts = Receipt::orderBy('id','DESC')->get();
        foreach ($receipts as $receipt) {
            $data = [
                'id'            => $receipt->id,
                'storage_id'    => $receipt->storage_id,
                'category_id'   => $receipt->category_id,
                'total_price'   => $receipt->total_price,
                'quantity'      => $receipt->quantity,
                'created_at'    => $receipt->created_at
            ];
            //Ghi vào file log
            Log::info(json_encode($data));
        }
    }
}
