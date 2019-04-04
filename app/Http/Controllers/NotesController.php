<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Document;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->documents_path = public_path('/documents');
    }

    public function list()
    {
        $notes = Note::all();
        
        return view('pages.documents', compact('notes'));
    }

    public function create()
    {
        return view('pages.create-note');    
    }

    public function store(Request $request)
    {
        $documents = $request->file('file');

        if (!is_array($documents)) {
            $documents = [$documents];
        }
 
        if (!is_dir($this->documents_path)) {
            mkdir($this->documents_path, 0777);
        }

        $document_models = $this->get_document_models($documents);

        $note = Note::create([
            'description'  => $request->description
        ]);
            
        $note->documents()->saveMany($document_models);
    }

    private function get_document_models(array $documents) : array
    {
        $document_models = [];

        foreach ($documents as $document) {
            $name = sha1(date('YmdHis') . str_random(30));
            $filename = $name . '.' . $document->getClientOriginalExtension();
 
            $document->move($this->documents_path, $filename);

            $document_model = new document([
                'filename'      => $filename,
                'original_name' => basename($document->getClientOriginalName())
            ]);

            $document_models[] = $document_model;
        }

        return $document_models;
    }
}
