<?php

namespace App\Models;
use App\Enums\UserRole;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

public function vendorProfile(){
    return $this->hasOne(VendorProfile::class);
}
public function customerProfile(){
    return $this->hasOne(CustomerProfile::class);
}
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
    ];

    protected $hidden = [
        'password', 
        'remember_token'
        ];

    protected function casts():array{
        return[
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
        ];
    } 
        
    

     public function canAccessPanel(Panel $panel): bool
    {
        return match ($panel->getId()) {
            'admin' => $this->role === UserRole::ADMIN,
            'vendor' => $this->role === UserRole::VENDOR, 
            default => false,
        };
    }
    public function products(){
        return $this->hasMany(Product::class, 'vendor_id');
    }
}
