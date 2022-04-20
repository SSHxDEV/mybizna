<?php

namespace Modules\Hrm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class PayrollPayCalendarEmployee extends Model
{

    protected $fillable = [];
    protected $table = "hrm_payroll_pay_calendar_employee";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     *
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->unsignedInteger('id')->primary();
        $table->integer('pay_calendar_id');
        $table->bigInteger('empid');
    }
}