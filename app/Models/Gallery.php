<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'image' ,'description','date', "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
