<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Mediable;

class Faq extends Model
{
    use Mediable;

    protected $table = 'faqs';

    protected $fillable = [
        'id',
        'slack',
        'categorie_id',
        'created_at',
        'updated_at'
    ];


    public function scopeId($query ,$id)
    {
        return $query->where('id', $id)->first();
    }

    public function scopeSlack($query ,$slack)
    {
        return $query->where('slack', $slack)->first();
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\CategoriesFaq','categorie_id','id');
    }


}
