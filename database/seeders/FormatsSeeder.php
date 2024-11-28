<?php

namespace Database\Seeders;

use App\Models\Formats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = array(
            '.jpeg' => 'image/jpeg',
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif',
            '.svg' => 'image/svg+xml',
            '.webp' => 'image/webp',
            '.mp4' => 'video/mp4',
            '.webm' => 'video/webm',
            '.ogv' => 'video/ogg',
            '.mov' => 'video/quicktime',
            '.avi' => 'video/x=msvideo',
            '.wmv' => 'video/x=ms=wmv',
            '.flv' => 'video/x=flv',
            '.mkv' => 'video/x=matroska',
            '.mpg' => 'video/m=eg',
            '.mpeg' => 'video/mpeg',
            '.docx' => 'application/vnd.ms-word',
            '.xlsx' => 'application/vnd.ms-excel',
            '.xls' => 'application/vnd.ms-excel',
            '.pptx' => 'application/vnd.ms-powerpoint',
            '.pdf' => 'application/pdf',
            '.txt' => 'text/plain',
            '.xml' => 'text/xml',
        );

        foreach ($files as $extension => $mime_type) {
            Formats::factory([
                'format_name' => $extension,
                'mime_type' => $mime_type,
                'description' => fake()->sentence(),
                'is_active' => fake()->boolean(),
            ])->create();
        }
    }
}
