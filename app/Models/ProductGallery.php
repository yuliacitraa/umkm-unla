<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photos', 'products_id'
    ];

    protected $hidden = [

    ];

    public function product() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
