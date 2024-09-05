<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting; // Ensure the correct model is imported

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['site_name' => 'CoinManiac'],
            [
                'header_image' => null,
                'phone_number' => '123-456-7890',
                'cta_title' => 'Some Text Here',
                'cta_text' => null,
                'social_fb_link' => 'www.fb.com/you',
                'social_x_link' => 'www.x.com/you',
                'social_ig_link' => 'www.ig.com/you',
                'social_tk_link' => 'www.tk.com/you',
                'terms_of_service_text' => null,
                'about_text' => null,
                'support_text' => null,
            ]
        );
    }
}

