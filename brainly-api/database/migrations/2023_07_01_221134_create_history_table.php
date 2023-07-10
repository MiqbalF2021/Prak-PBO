<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('quest_id');
            $table->unsignedBigInteger('answer_id');
            $table->integer('rate');
            $table->timestamps();

            $table->foreign('author')->references('id')->on('users');
            $table->foreign('quest_id')->references('id')->on('quests');
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
