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
       if (Schema::hasTable('survey')) { return; }
        Schema::create('survey', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid', 30)->nullable()->index();
            $table->integer('user_id')->nullable()->index();
            $table->string('email')->nullable();
            $table->string('created_by', 50)->nullable()->index();
            $table->integer('assigned_to')->nullable()->index();
            $table->text('details');
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
        Schema::dropIfExists('survey');
    }
};
