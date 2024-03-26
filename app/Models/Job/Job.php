<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table ='jobs';

    protected $fillable=[
        'id',
        'job_title',
        'job_region',
        'job_type',
        'vacancy',
        'expirience',
        'salary',
        'gender',
        'application_dateline',
        'job_description',
        'responsibilities',
        'education_expirience',
        'other_benefits',
        'image'
    ];
    public $timestamps= true;
}
