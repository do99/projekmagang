<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_m_project';
    protected $primaryKey = 'project_id';

    public function dClient() {
        return $this->hasOne(Client::class, 'client_id', 'client_id');
    }

}
