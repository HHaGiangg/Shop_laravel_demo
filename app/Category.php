<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'category_product_keywords', 'category_name', 'slug_category_product', 'category_desc', 'category_status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';
}
