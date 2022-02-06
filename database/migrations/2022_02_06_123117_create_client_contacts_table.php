<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contact', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->bigInteger('contact_id')->unsigned()->index();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->primary(['client_id', 'contact_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_contact');
    }
}
