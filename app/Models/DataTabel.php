<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTabel extends Model
{

    protected $table = 'tb_m_project';

    public function dClient() {

        return $this->hasOne(Client::class, 'client_id', 'client_id');

    }

}
