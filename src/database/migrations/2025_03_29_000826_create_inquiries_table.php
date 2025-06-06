<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('inquiries', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('gender');
    $table->string('type');
    $table->unsignedBigInteger('category_id'); 

    $table->foreign('category_id') 
          ->references('id')
          ->on('categories')
          ->onDelete('cascade'); 

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
    Schema::table('inquiries', function (Blueprint $table) {
        $table->dropForeign(['category_id']); 
    });

    Schema::dropIfExists('inquiries'); 
}

}
