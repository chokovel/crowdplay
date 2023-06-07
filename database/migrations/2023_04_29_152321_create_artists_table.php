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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('stagename')->nullable();
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('artprofession');
            $table->string('portfoliolink');
            $table->string('image');
            $table->text('bio');
            $table->boolean('verified')->default(false);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
