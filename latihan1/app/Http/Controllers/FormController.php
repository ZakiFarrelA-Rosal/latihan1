<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and store the file
        $path = $request->file('form_photo')->store('form_photos','public');

        // Gather data to pass to the view
        $data = $request->only(['nama', 'kelas', 'judulposter']);
        $data['photo_path'] = $path;

        return view('Form_result', ['data' => $data]);
    }
}