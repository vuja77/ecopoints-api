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
        Schema::create('homework_uploads', function (Blueprint $table) {
            $table->id();        
            $table->foreignId('homework_id')->constrained(
                table: 'homeworks'
            );
            $table->foreignId('user_id')->constrained();
            $table->string("url")->nullable();
            $table->string("file_path")->nullable();
            $table->string("post_content");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework_uploads');
    }
};
