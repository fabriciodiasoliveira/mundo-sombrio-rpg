<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Services\ThumbService;

class UploadService {

    function upload_image(Request $request) {

        $file = $request->file('foto');
        $extension = $request->file('foto')->getClientOriginalExtension();
        $random = rand();
        $time = date('Ymd');
        $new_name = 'IMG_' . $time . $random . '.' . $extension;
        $file->move(config('pasta.original', 'Laravel'), $new_name);
        $this->generate_thumbnails($new_name);
        Log::info('Upload de arquivo concluído com sucesso. ' . $new_name);
        return $new_name;
    }

    function upload_image_fornecedor(Request $request) {

        $file = $request->file('foto');
        $extension = $request->file('foto')->getClientOriginalExtension();
        $random = rand();
        $time = date('Ymd');
        $new_name = 'IMG_' . $time . $random . '.' . $extension;
        $file->move(config('pasta.original', 'Laravel'), $new_name);
        $this->generate_thumbnails_fornecedor($new_name);
        Log::info('Upload de arquivo concluído com sucesso. ' . $new_name);
        return $new_name;
    }

    function destroy_image_mercadoria($name) {
        try {
            unlink(public_path(config('pasta.foto', 'Laravel') . $name));
            unlink(public_path(config('pasta.miniatura', 'Laravel') . $name));
            unlink(public_path(config('pasta.original', 'Laravel') . $name));
        } catch (\Exception $e) {
            Log::error('Erro ao excluir o arquivo ' . $name . '. Provavelmente o arquivo não existe.\n'.$e);
        }
    }

    function destroy_image_fornecedor($name) {
        try {
            unlink(public_path(config('pasta.miniatura', 'Laravel') . $name));
            unlink(public_path(config('pasta.original', 'Laravel') . $name));
        } catch (\Exception $e) {
            Log::error('Erro ao excluir o arquivo ' . $name . '. Provavelmente o arquivo não existe.\n'.$e);
        }
    }
    
    function generate_thumbnails($name) {
        $objThumbImage = new ThumbService(config('pasta.original', 'Laravel') . $name);
        $objThumbImage->createThumb(config('pasta.miniatura', 'Laravel') . $name, 100);
        $objThumbImage->createThumb(config('pasta.foto', 'Laravel') . $name, 500);
    }

    function generate_thumbnails_fornecedor($name) {
        $objThumbImage = new ThumbService(config('pasta.original', 'Laravel') . $name);
        $objThumbImage->createThumb(config('pasta.miniatura', 'Laravel') . $name, 100);
    }

}
