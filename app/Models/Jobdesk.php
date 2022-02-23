<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobdesk extends Model
{
    use HasFactory;
    protected $table = 'jobdesk';

    protected $fillable = [
        'KodeJobdesk',
        'NamaJobdesk',
    ];
    public $timestamps = false;
}
