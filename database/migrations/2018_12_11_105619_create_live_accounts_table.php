<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency');
            $table->string('user_id');
            $table->string('account_type');
            $table->string('leverage');
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number',10)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('live_accounts');
    }
}
