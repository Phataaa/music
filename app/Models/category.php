<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $table = "category";
    protected $fillable = ['name'];
    public function song(){
        return $this->hasMany('App\Models\song');
    }
}
