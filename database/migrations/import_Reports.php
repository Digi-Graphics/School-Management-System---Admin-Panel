<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_reports', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('code');
            $table->string('Qty');
            $table->string('price');
            $table->string('Supplier');
            $table->string('Invoice');
            $table->string('by');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_reports');
    }
};
