<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

//Table name
    protected $table = "categories"; 

//Table columns.
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at'
    ];

    public function receipts()
    {
        return $this->hasMany(Receipt::class, "category_id","id");
    }
}
