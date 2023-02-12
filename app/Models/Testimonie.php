<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Mediable;

class Testimonie extends Model
{
    use Mediable;

    protected $table = 'testimonies';

    protected $fillable = [
        'id',
        'slack',
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

    public function thumbnail(){
        return $this->media()->where('mime_type', "Testimonies")->where('featured', 1)->where('mediable_id', $this->id)->first();
    }

    public function storeAndSetThumbnail($uploaded, $name, $size){
               $media = $this->media()->create([
                   'filename' => $uploaded,
                   'featured' => 1,
                   'original_filename' => $name,
                   'mime_type' => 'Testimonies'
               ]);

               $media->file_size = $size;
               $media->save();

    }

    public function deleteThumbnail(){

               $media =  $this->media()->where('mime_type', "Testimonies")->where('featured', 1)->where('mediable_id', $this->id)->first();

               if($media!=null){
                   $string = $media->filename;
                   $exists = Storage::disk('pages')->exists('/testimonies'.'/'.$string);
                   $elemnt = Storage::disk('pages')->delete('/testimonies'.'/'.$string);
                   $media->delete();
               }else{

               }

    }



}
