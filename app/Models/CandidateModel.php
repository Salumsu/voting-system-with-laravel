<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateModel extends Model
{
    use HasFactory;
    public $table = "tblcandidate";
    public $timestamps = false;
    protected $primaryKey = "candidateid";
}
