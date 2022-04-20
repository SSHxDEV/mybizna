<?php

namespace Modules\Hrm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class WorkExperience extends Model
{

    protected $fillable = [];
    protected $table = "hrm_work_experience";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {

        $table->unsignedInteger('id')->primary();
        $table->integer('employee_id')->nullable()->index('employee_id');
        $table->string('company_name', 100)->nullable();
        $table->string('job_title', 100)->nullable();
        $table->date('from')->nullable();
        $table->date('to')->nullable();
        $table->text('description')->nullable();
        $table->timestamps();
    }
}