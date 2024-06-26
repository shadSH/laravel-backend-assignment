<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use HasFactory, SoftDeletes , Notifiable;

    protected $guarded = ['id'];

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

}
