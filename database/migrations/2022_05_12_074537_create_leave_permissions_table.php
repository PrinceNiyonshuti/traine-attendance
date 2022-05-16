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
        Schema::create('leave_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainee_id');
            $table->foreignId('leave_id');
            $table->text('briefing')->nullable();
            $table->text('comment')->nullable();
            $table->integer('leaveStatus')->default(0);
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
        Schema::dropIfExists('leave_permissions');
    }
};
