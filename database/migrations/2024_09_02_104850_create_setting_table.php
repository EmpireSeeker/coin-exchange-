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
            $table->string('site_name')->default('CoinManiac');
            $table->string('header_image');
            $table->string('cta_title')->default('Some Text Here');
            $table->text('cta_text')->default('Some description here');
            $table->string('social_x_link')->default('www.x.com/you');
            $table->string('social_ig_link')->default('www.ig.com/you');
            $table->string('social_tk_link')->default('www.tk.com/you');
            $table->mediumText('terms_of_service_text')->default('This is terms of service text');
            $table->text('about_text')->default('This is about tex');
            $table->text('support_text')->default('This is support text');
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
