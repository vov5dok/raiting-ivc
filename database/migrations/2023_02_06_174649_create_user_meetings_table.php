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
        Schema::create('user_meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('meeting_id');
            $table->timestamps();

            // Index
            $table->index('user_id', 'user_meeting_user_idx');
            $table->index('meeting_id', 'user_meeting_meeting_idx');

            // Foreign key
            $table->foreign('user_id', 'user_meeting_user_fk')->on('users')->references('id');
            $table->foreign('meeting_id', 'user_meeting_meeting_fk')->on('meetings')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_meetings');
    }
};
