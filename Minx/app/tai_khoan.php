<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class tai_khoan extends Model implements AuthenticatableContract, CanResetPasswordContract 
{
    use Authenticatable, CanResetPassword;
	protected $table = 'taikhoan';
	
	protected $fillable = ['ten_dang_nhap', 'mat_khau'];
	
	public $timestamps = false;
	
	public function getAuthPassword() {
		return $this->mat_khau;
	}
}
