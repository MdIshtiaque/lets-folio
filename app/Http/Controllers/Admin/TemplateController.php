<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function templateList(): View
    {

        $templates = Template::orderBy('id', 'DESC')->get();

        return view('Admin.pages.template.list' ,['title' => 'Templates', 'templates' => $templates]);
    }

    public function templateView(Request $request, $path) {

        return view($path);
    }
}
