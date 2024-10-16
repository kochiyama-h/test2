<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image'        
     ];


    // 多対多のリレーションを定義
    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'product_season');
    }

    //検索機能
    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        }
        return $query;
    }
}
