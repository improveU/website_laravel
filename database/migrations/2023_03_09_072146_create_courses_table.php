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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->tinyText('introduction');
            $table->text('course_description');
            $table->string('image_path');
            $table->unsignedInteger('views');

            $table->index('creator_id');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');

            $table->index('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(Blueprint $table): void
    {
        $table->dropForeign('lists_creator_id_foreign');
        $table->dropIndex('lists_creator_id_index');
        $table->dropColumn('creator_id');

        $table->dropForeign('lists_category_id_foreign');
        $table->dropIndex('lists_category_id_index');
        $table->dropColumn('category_id');
        Schema::dropIfExists('courses');
    }
};
