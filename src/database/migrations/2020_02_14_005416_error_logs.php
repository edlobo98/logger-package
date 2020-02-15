<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ErrorLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ex_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("error_id");
            $table->string('err_name');
            $table->timestamp('hour_occurred');
            $table->string('err_message');
            $table->string('stack_trace');
            $table->string('server');
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
        //
    }
}
