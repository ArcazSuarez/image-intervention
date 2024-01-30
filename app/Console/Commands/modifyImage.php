<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Laravel\Facades\Image;

class modifyImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:modify-image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $image = imagecreatefrompng(public_path('image.png'));

        $gdColor = $this->hexToGDColor("#FF0000");
        $x = 500;
        $y = 600;
        $font = public_path('arial.ttf');
        $fontSize = 60;
        $text = 'Sawakas!';

        imagefttext($image,$fontSize,1,$x,$y,$gdColor,$font,$text);

        imagejpeg($image,public_path('newNew.jpg'), 100);
    }

    function hexToGDColor($hexColor) {
        $hexColor = str_replace("#", "", $hexColor);
        $intColor = hexdec($hexColor);
        return $intColor;
    }
}
