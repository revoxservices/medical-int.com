<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use App\Models\Scopes\StoreScope;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','slack', 'label', 'created_at', 'updated_at'];


    public function scopeActive($query){
        return $query->where('master_academic_levels.status', 1);
    }

    public function scopeId($query ,$id)
    {
        return $query->where('id', $id)->first();
    }
}
