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
        Schema::create('tagging', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->index('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            $table->index('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(Blueprint $table): void
    {
        $table->dropForeign('lists_course_id_foreign');
        $table->dropIndex('lists_course_id_index');
        $table->dropColumn('course_id');

        $table->dropForeign('lists_tag_id_foreign');
        $table->dropIndex('lists_tag_id_index');
        $table->dropColumn('tag_id');
        Schema::dropIfExists('tagging');
    }
};
