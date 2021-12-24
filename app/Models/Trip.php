<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'max_visitors',
        'price',
        'date',
    ];

    // For Guide [one-many]
    public function guide(){
        return $this->belongsTo(User::class);
    }

    // For Reservation [many-many]
    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
    }

}
