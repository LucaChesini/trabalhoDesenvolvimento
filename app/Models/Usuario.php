<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    public function getAuthIdentifierName(){
        return 'id';
    }
    public function getAuthIdentifier(){
        return $this->id;
    }
    public function getAuthPassword(){
        return $this->password;
    }
}
