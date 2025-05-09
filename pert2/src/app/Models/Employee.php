<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'birthdate',
        'department_id',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function getFullName(): string
    {
       return trim("{$this->fname} {$this->mname} {$this->lname}");
    }
}
