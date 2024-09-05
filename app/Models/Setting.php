<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'header_image',
        'phone_number',
        'cta_title',
        'cta_text',
        'social_fb_link',
        'social_x_link',
        'social_ig_link',
        'social_tk_link',
        'terms_of_service_text',
        'support_text',
    ];
}
