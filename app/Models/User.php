<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // use HasFactory;
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = ['username', 'password', 'email', 'remember_token'];
    protected $primaryKey = 'user_id';

    // public function Test(){
    //     $this->insert([
    //         'username' => 'NicoleLinda',
    //         'password' => '520',
    //         'email' => '520@gamil.com',
    //         'remember_token' => '3'
    //     ]);
    // }
}
