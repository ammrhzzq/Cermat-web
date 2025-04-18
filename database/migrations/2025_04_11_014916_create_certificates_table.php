<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('cert_type');
            $table->string('iso_num');
            $table->string('comp_name');
            $table->string('comp_address1');
            $table->string('comp_address2')->nullable();
            $table->string('comp_address3')->nullable();
            $table->string('comp_phone1')->nullable();
            $table->string('comp_phone2')->nullable();
            $table->date('reg_date');
            $table->date('issue_date');
            $table->date('exp_date');
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
        Schema::dropIfExists('certificates');
    }
}
