<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategoriesAttribute;
use App\ProductCategoriesOptions;
use App\ProductCategoriesDescription;

class ProductCategories extends Model
{
    protected $table = "tbl_product_categories";

    public function Attribute(){
        return $this->hasMany(ProductCategoriesAttribute::class, 'category_id', 'id');
    }

    public function Options(){
        return $this->hasMany(ProductCategoriesOptions::class, 'category_id', 'id');
    }

    public function Description(){
        return $this->hasMany(ProductCategoriesDescription::class, 'category_id', 'id');
    }
}
