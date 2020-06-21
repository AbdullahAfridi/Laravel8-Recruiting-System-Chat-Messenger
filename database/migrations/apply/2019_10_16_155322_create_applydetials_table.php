<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplydetialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applydetials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table-> string('FullName');
            $table-> string('Jobtitle');
            $table-> string('Experience');
            $table-> string('PrimeSkills');
            $table-> string('WorkAutho');
            $table-> string('Contact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applydetials');
    }
}
