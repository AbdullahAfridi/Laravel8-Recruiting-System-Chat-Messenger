<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Jobtitle');
            $table->string('Location');
            $table->string('Jobdesc');
            $table->integer('Companyrate');
            $table->integer('Canrate');
            $table->string('Recname');
            $table->boolean('Status')->default(0);
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
        Schema::dropIfExists('requirments');
    }
}
