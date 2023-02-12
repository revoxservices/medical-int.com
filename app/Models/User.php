<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Academic;
use App\Models\Trajectory;



class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['id','slack', 'firstname','lastname' ,'cellphone','email','password','available','terms','factor','reel','linkedin','youtube','instagram','behance','two_factor_code','two_factor_expires','email_verified_at','remember_token','role_id','countrie_id','birth_at','created_at', 'updated_at', 'academics_id'];


    public function scopeActive($query){
        return $query->where('master_academic_levels.status', 1);
    }

    public function scopeId($query ,$id)
    {
        return $query->where('id', $id)->first();
    }

    public function scopeSlack($query ,$slack)
    {
        return $query->where('slack', $slack)->first();
    }

    public function scopeArtists($query)
    {
        return $query->where('role_id', 2)->get();
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


    public function testings()
    {
        return $this->hasMany('App\Models\Testing');
    }

    public function academics()
    {
        return $this->hasMany('App\Models\Education');
    }


    public function trajectories()
    {
        return $this->hasMany('App\Models\Trajectory');
    }


    public function skills(){
        return $this->belongsToMany(Skill::class,'user_skill')->withPivot('skill_id');
    }

    public function technologies(){
        return $this->belongsToMany(Technologie::class,'user_technologie')->withPivot('technologie_id');
    }


    public function academicArt()    {
        return $this->belongsTo(Academic::class, 'academic_id', 'id');
    }

    public function academic()    {
        return $this->belongsToMany(Education::class,'academic')->withPivot('academic_id');
    }



    public function role()
    {
        return $this->belongsTo('App\Models\Rol','role_id','id');
    }

    public function salary()
    {
        return $this->belongsTo('App\Models\Salary','salarie_id','id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule','schedule_id','id');
    }

    public function condition()
    {
        return $this->belongsTo('App\Models\ConditionUser','condition_id','id');
    }

    public function countrie()
    {
        return $this->belongsTo('App\Models\Countries','countrie_id','id');
    }

    /**
     * Generate 6 digits MFA code for the User
     */
    public function generateTwoFactorCode()
    {
        $this->timestamps = false; //Dont update the 'updated_at' field yet

        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(2);
        $this->save();
    }

    /**
     * Reset the MFA code generated earlier
     */
    public function resetTwoFactorCode()
    {
        $this->timestamps = false; //Dont update the 'updated_at' field yet
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->factor = 1;
        $this->save();
    }


    public static function auth(){

        return Auth::user();
    }



}
