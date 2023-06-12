<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $table = "singer";
    public function song(){
        return $this->hasMany('App\Models\song');
    }
    protected $fillable = ['name','img'];
}
