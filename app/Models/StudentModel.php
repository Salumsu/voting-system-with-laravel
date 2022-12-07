<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    public $table = 'tblstudent';
    public $timestamps = false;

    protected $primaryKey = 'studentid';
}
