<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $primaryKey = 'teachers_id';
    protected $fillable = 'teacher_name';

    public function advisesStudents(){
        return $this->hasMany(Student::class, 'advisor_id');
    }

}
