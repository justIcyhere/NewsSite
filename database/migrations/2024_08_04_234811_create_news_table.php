<?php

use App\Models\Categories;
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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('author', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->text('summarise')->nullable();
            // $table->integer('idCT')->nullable();
            $table -> foreignIdFor(Categories::class) -> constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
