<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller {
    public function show(): View {
        $directories = Storage::disk('public')->directories();
        foreach ($directories as &$directory) {
            $directory = $this->getDirectoryLink($directory);
        }
        return view('home', compact('directories'));
    }

    public function getDirectoryLink(string $directory) {
        return '/pub/' . $directory;
    }
}
