<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Statu extends Model{
    protected $table = 'status';
    public $timestamps = false;
    protected $fillable = ['name'];
}

?> 