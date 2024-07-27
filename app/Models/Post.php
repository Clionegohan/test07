<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'category_id'
        ];
        
    protected $dates = ['deleted_at'];


    public function getPaginateByLimit(int $limit_count = 5)
    {
        //update_atでこう順に並べた後、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    //1postに対してカテゴリは1つしか定まらないので単数形
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
