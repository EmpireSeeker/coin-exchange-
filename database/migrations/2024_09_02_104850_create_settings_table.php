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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('CoinManiac');
            $table->string('header_image')->nullable(); // Make header_image nullable
            $table->string('phone_number');
            $table->string('cta_title')->default('Some Text Here');
            $table->text('cta_text')->nullable(); // Make cta_text nullable
            $table->string('social_fb_link')->default('www.fb.com/you');
            $table->string('social_x_link')->default('www.x.com/you');
            $table->string('social_ig_link')->default('www.ig.com/you');
            $table->string('social_tk_link')->default('www.tk.com/you');
            $table->mediumText('terms_of_service_text')->nullable(); // Make terms_of_service_text nullable
            $table->text('about_text')->nullable(); // Make about_text nullable
            $table->text('support_text')->nullable(); // Make support_text nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
