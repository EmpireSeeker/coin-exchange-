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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('header_image');
            $table->string('cta_title');
            $table->string('cta_text');
            $table->string('social_x_link');
            $table->string('social_ig_link');
            $table->string('social_tk_link');
            $table->string('terms_of_service_text');
            $table->string('support_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
