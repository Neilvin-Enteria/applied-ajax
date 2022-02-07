<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = ['teacher_name'];
    protected $primaryKey = 'teacher_id';
    
    public function isAdvisorOf(){
        return $this->hasMany(Student::class, 'adviser_id');
    }

}
