<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function uploadFile(Request $request, string $name = 'photo'): string
    {
        $file = $request->file($name);

        // Menggabungkan informasi email dengan ekstensi file asli
        $fileName = $request->email . '.' . $file->getClientOriginalExtension();

        // make directory if not exists based on $name
        $directoryPath = base_path('public/img/' . $name);
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }

        // save file
        $file->move($directoryPath, $fileName);

        // return file path to show in input
        return 'img/' . $name . '/' . $fileName;
    }

    public function getAvatar($request): Request
    {
        $pathFile = $this->uploadFile($request);
        $request->merge(['avatar' => $pathFile]);

        return $request;
    }
}
