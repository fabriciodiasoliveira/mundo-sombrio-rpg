<?php

namespace App\Http\Services;

use Symfony\Component\Process\Process;
use Intervention\Image\Facades\Image;

class ThumbService {

    private $source;

    public function __construct($sourceImagePath) {
        $this->source = $sourceImagePath;
    }

    public function createThumb($destImagePath, $tamanho) {
        $img = Image::make($this->source);
        $img->resize($tamanho, $tamanho, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destImagePath);
    }

}
