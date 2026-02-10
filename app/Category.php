<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = ['parent_id', 'name', 'content', 'slug', 'image'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}