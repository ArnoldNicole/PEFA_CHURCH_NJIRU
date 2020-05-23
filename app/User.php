<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Admin;
use App\Mail\ResetPassword;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type','admin_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function boot(){
    parent::boot();

    static::created(function ($user){
        $user->profile()->create([
            'image'=>'profiles/default.png',
            'bio'=>'Working with Pefa is awesome',
            'description'=>'Working with Pefa is awesome',
        ]);
        $adminAccount=Admin::where('admin_code', $user->email);
        $adminAccount->update(['user_id'=>$user->id]);

    });

}

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function aword(){
      return $this->hasMany(aword::class)->orderBy('created_at', 'DESC');
    }

    public function profile(){
        return $this->hasOne(profile::class);
    }
    public function images(){
      return $this->hasMany(images::class)->orderBy('created_at', 'DESC');
    }
    public function news(){
      return $this->hasMany(news::class)->orderBy('created_at', 'DESC');
    }public function weeklyNews(){
      return $this->hasMany(weeklyNews::class)->orderBy('created_at', 'DESC');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    
}
