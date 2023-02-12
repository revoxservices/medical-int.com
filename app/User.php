<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password', 'lname', 'dob', 'doa', 'mobile', 'address', 'city_id',
        'state_id', 'country_id', 'gender', 'pin_code', 'status', 'verified', 'role', 'married_status','user_img', 'detail', 'braintree_id', 'fb_url', 'twitter_url', 'youtube_url', 'linkedin_url', 'email_verified_at', 'code', 'google_id', 'facebook_id', 'amazon_id', 'gitlab_id', 'linkedin_id', 'twitter_id', 'jwt_token', 'zoom_email'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country()
    {
      return $this->belongsTo('App\Models\Allcountry','country_id', 'id');
    }

    public function enterprise()
    {
      return $this->belongsTo('App\Models\Enterprise','enterprise_id','id');
    }

    public function state()
    {
      return $this->belongsTo('App\Models\Allstate','state_id','id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\Allcity','city_id','id');
    }
    public function courses()
    {
        return $this->hasMany('App\Models\Course','user_id');
    }
    public function answer()
    {
        return $this->hasMany('App\Models\Question','user_id');
    }

    public function announsment()
    {
        return $this->hasMany('App\Models\Announcement','user_id');
    }

    public function review()
    {
        return $this->hasMany('App\Models\ReviewRating','user_id');
    }

    public function reportreview()
    {
        return $this->hasMany('App\Models\ReportReview','user_id');
    }

    public function viewprocess()
    {
        return $this->hasMany('App\Models\ViewProcess','user_id');
    }

    public function wishlist()
    {
        return $this->hasMany('App\Models\Wishlist','user_id');
    }

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog','user_id');
    }

    public function relatedcourse()
    {
        return $this->hasMany('App\Models\RelatedCourse','user_id');
    }

    public function courseclass()
    {
        return $this->hasMany('App\Models\CourseClass','user_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order','user_id');
    }

    public function pending()
    {
        return $this->hasMany('App\Models\PendingPayout','user_id');
    }

    public function liveclass()
    {
        return $this->hasMany('App\Models\LiveCourse','user_id');
    }

    public function completed()
    {
        return $this->hasMany('App\Models\CompletedPayout','user_id');
    }

    public function bundle()
    {
        return $this->hasMany('App\Models\BundleCourse','user_id');
    }

    public function plans()
    {
        return $this->hasMany('App\Models\PlanSubscribe','user_id');
    }

    public static function auth(){

        return Auth::user();
    }


    public static function validate($email){

            $existenceUser= User::where('email', $email)->get();

            if ($existenceUser->count() == 1) {
                return $existenceUser;
            }else{
                return null;
            }
    }


    public function scopeId($query ,$id)
    {
        return $query->where('id', $id)->first();
    }


    public function scopeToken($query ,$token)
    {
        return $query->where('token', $token)->first();
    }

    public function scopeEmail($query ,$email)
    {
        return $query->where('email', $email)->first();
    }

    


    public static function generate(){

        $token = User::random();
        $existenceToken = User::existence($token);

        if ($existenceToken!= null) {
            User::existence($token);
        }else{
        return $token;
        }
    }

    public static function random(){

            $incluye=true;
            $longitud=10;
            $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

            if($incluye) {
                $arrPassResult="";
                for($i=0;$i<$longitud;$i++){
                    $arrPassResult.=$caracteres[rand(0,strlen($caracteres)-1)];
                }
            }

            return $arrPassResult;
    }

    public static function existence($token){

            return User::where("token", '=', $token)->first();
    }


    /**
     * Encrypt the user's password.
     *
     * @param string $passwword
     * @return void
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


}

