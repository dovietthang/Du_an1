<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ['name','avatar', 'email', 'role','address','phone_number	',
                            'password', 'updated_at' ,'phone_number'];
}

?> 