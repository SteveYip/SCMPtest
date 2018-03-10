<?php
namespace App;

trait HasRoles{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function not_expired_role()
    {
        return $this->belongsToMany('App\Role');
    }

    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function hasRole($role)
    {
        if (is_string($role)){
            return $this->not_expired_role->contains('name', $role);
        }

        return !! $role->intersect($this->not_expired_role)->count();
    }
}