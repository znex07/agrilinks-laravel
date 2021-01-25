<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_registration', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('reg_type');
            $table->string('gender');
            $table->string('bday');
            $table->string('owrep');
            $table->string('nameorg');
            $table->string('list_equipment',2000);
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
