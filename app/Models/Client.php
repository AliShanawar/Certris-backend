<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function docs()
    {
        return $this->hasMany(Document::class);
    }
}
