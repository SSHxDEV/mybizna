<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Type extends Model
{

    protected $fillable = ['name'];
    protected $migrationOrder = 5;
    protected $table = "partner_type";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->string('name', 20)->nullable()->unique('name');
    }
}