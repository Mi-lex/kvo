<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentsController extends Controller
{
    public function download(Document $document)
    {
        return response()->download($document->path(), $document->original_name);
    }
}
