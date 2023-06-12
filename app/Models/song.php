<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $table ="song";
    public function singer(){
        return $this->belongTo('App\Models\singer', 'singer_id');
    }
    public function category(){
        return $this->belongTo('App\Models\category', 'category_id');
    }
    protected $fillable =['name', 'description','file_mp3','img','name_singer','singer_id','category_id','category'];
}
