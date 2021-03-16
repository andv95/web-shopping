<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Admin\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['name' => 'Logo', 'key' => 'logo', 'type' => Setting::TYPE_IMAGE, 'group' => 0],
            ['name' => 'logan', 'key' => 'logan', 'type' => Setting::TYPE_TEXT, 'group' => 0, 'description' => 'Today is a good day'],
            ['name' => 'Banner title', 'key' => 'banner_title', 'type' => Setting::TYPE_TEXT, 'group' => 0],
            ['name' => 'Banner content', 'key' => 'banner_content', 'type' => Setting::TYPE_TEXTAREA, 'group' => 0],
            ['name' => 'Banner image', 'key' => 'banner_image', 'type' => Setting::TYPE_IMAGE, 'group' => 0],
            ['name' => 'Copy right', 'key' => 'copy_right', 'type' => Setting::TYPE_TEXT, 'group' => 0],
//            ['name' => 'Instar image', 'key' => 'instar_image', 'type' => Setting::TYPE_IMAGE, 'group' => 0],
            ['name' => 'Instar link', 'key' => 'instar_link', 'type' => Setting::TYPE_TEXT, 'group' => 0],
//            ['name' => 'Facebook image', 'key' => 'facebook_img', 'type' => Setting::TYPE_IMAGE, 'group' => 0],
            ['name' => 'Facebook link', 'key' => 'facebook_link', 'type' => Setting::TYPE_TEXT, 'group' => 0],
            ['name' => 'Châm ngôn', 'key' => 'maxim', 'type' => Setting::TYPE_TEXTAREA, 'group' => 0, 'description' => 'Lucretius: It is great wealth to a soul to live frugally with a contented mind_
Andoan: Có làm thì mới có ăn']
        ]);
    }
}
