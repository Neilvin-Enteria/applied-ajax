<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['student_name', 'adviser_id'];
    protected $primaryKey = 'student_id';

    public function isAdvisedBy(){
        return $this->belongsTo(Teacher::class);
    }
}
