<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Payment extends Model
{

    protected $fillable = [];
    protected $table = "payment";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('name');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    }
}