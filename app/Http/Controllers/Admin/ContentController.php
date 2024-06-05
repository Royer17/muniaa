<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class ContentController extends Controller
{
    public function delete($content_id)
    {
        $content = Content::find($content_id);
        
        if (file_exists($content->url)) {
            unlink($content->url);
        }
        $content->delete();
        
        return response()->json(['title' => 'Operación Exitosa', 'message' => 'Se ha eliminado correctamente el archivo.', 'symbol' => 'success'], 200);
    }
}
