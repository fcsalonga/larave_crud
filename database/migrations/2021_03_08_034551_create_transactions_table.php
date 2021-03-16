<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('category', 25)->nullable();
            $table->string('system_reference_no', 50)->nullable();
            $table->string('project');
            $table->string('purpose')->nullable();
            $table->string('type_of_debt')->nullable();
            $table->string('creditor')->nullable();
            $table->string('loan_number')->nullable();
            $table->string('guarantor')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('legal_basis',25)->nullable();
            $table->string('bsp_account_no', 50)->nullable();
            $table->date('loan_signing_date')->nullable();
            $table->date('subsidiary_signing_date')->nullable();
            $table->date('loan_effectivity_date')->nullable();
            $table->date('closing_date')->nullable();
            $table->date('maturity')->nullable();
            $table->string('payment_due',10)->nullable();
            $table->string('coupon_terms', 25)->nullable();
            $table->string('interest_rate', 10)->nullable();
            $table->date('la_cancellation_date')->nullable();
            $table->date('la_extension_date')->nullable();
            $table->date('la_closing_date')->nullable();
            $table->integer('ga_on_principal')->nullable();
            $table->integer('ga_on_interest')->nullable();
            $table->float('of_amount', 18, 2)->nullable();
            $table->string('of_nature')->nullable();
            $table->string('cob_currency',10)->nullable();
            $table->float('cob_amount', 18, 2)->nullable();
            $table->float('cob_peso_equi', 18, 2)->nullable();
            $table->string('cob_availment', 25)->nullable();
            $table->date('lac_date')->nullable();
            $table->string('lac_currency', 10)->nullable();
            $table->float('lac_amount', 18, 2)->nullable();
            $table->float('lac_peso_equi', 18, 2)->nullable();
            $table->string('lac_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
