<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soc_id')->unsigned();
            $table->string('name',100);
            $table->string('co_owner_name',100);
            $table->integer('flat_no');
            $table->integer('floor_no');
            $table->string('status',1)->default('y');
            $table->timestamps();
        });
        Schema::table('member_master', function (Blueprint $table) {
            $table->index('soc_id');
            $table->foreign('soc_id')->references('id')->on('society_master')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_master');
    }
}
