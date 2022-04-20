<?php

namespace Modules\Hrm\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Holiday extends Model
{

    protected $fillable = [];
    protected $table = "hrm_holiday";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->unsignedBigInteger('id')->primary();
        $table->string('title', 200);
        $table->timestamp('start')->useCurrent();
        $table->timestamp('end')->nullable()->default(null);;
        $table->text('description');
        $table->string('range_status', 5);
        $table->timestamps();
    }
}