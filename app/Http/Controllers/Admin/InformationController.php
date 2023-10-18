<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function entry(Template $template): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.pages.template.information-entry', ['title' => 'Information Entry']);
    }
}
