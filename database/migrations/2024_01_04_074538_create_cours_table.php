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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug');
            $table->mediumText('sub_title');
            $table->uuid('uuid');
            $table->text('description');
            $table->text('contenu');
            $table->unsignedBigInteger('categorie_id');
            $table->string('niveau');
            $table->integer('duree');
            $table->decimal('prix', 8, 2);
            $table->timestamp('date_start');
            $table->timestamp('date_end');
            $table->unsignedBigInteger('formateur_id');
            $table->string('image_cours')->nullable();
            $table->string('video_intro')->nullable();

            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
