<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class ReceiptDetail extends Model
{

    protected $fillable = [];
    protected $table = "invoice_receipt_detail";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->integer('id')->primary();
        $table->integer('voucher_no')->nullable();
        $table->integer('invoice_no')->nullable();
        $table->decimal('amount', 20, 2)->default(0.00);
        $table->string('created_by', 50)->nullable();
        $table->string('updated_by', 50)->nullable();
        $table->timestamps();
    }
}