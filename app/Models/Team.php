<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Models\Employee;
class Team extends Model
{
	use Authenticatable, Authorizable, CanResetPassword;
    protected $table = 'teams';
    protected $fillable = [
        'id','name','description','updated_at','last_updated_by_employee','created_at','created_by_employee','delete_flag'
    ];
    public function employee()
    {
        return $this->hasMany(\App\Models\Employee::class , 'team_id', 'id');
    }
}