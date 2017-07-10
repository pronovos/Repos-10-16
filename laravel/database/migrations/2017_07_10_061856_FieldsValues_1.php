<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldsValues1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
            Schema::create('fieldsValue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fields_id');
            $table->string('value');
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
            Schema::dropIfExists('fieldsValue');
        }
    
}
