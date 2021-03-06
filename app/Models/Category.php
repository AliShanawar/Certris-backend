<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function sub()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function docs()
    {
        return $this->hasMany(Document::class);
    }
    public $timestamp = false;
}
