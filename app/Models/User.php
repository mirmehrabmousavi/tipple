<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getPermissionGroups() {
        $group_permission=DB::table('permissions')
            ->select('group_name as name')
            ->groupBy('group_name')
            ->get();
        return $group_permission;
    }

    public static function getPermissionByGroups($group_name) {
        $permissions=DB::table('permissions')
            ->select('name','id')
            ->where('group_name',$group_name)
            ->get();
        return $permissions;
    }

    public static function roleHasPermissions($role,$permissions) {
        $hasPermission=true;
        foreach($permissions as $permission) {
            if(!$role->hasPermissionTo($permission->name)) {
                $hasPermission=false;
                return $hasPermission;
            }
        }
        return $hasPermission;
    }
}
