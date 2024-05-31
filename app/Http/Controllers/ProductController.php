<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products_disp_data($img_name)
    {
        $path = storage_public('/public/img/comp/' . $path);
        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);
        $data = Response::make($file, 200);
        $data->header("Content-Type", $type);

        return $data;

    }
}
