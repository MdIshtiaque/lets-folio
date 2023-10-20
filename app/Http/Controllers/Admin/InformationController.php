<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestBasicInformation;
use App\Models\BasicInfromation;
use App\Models\Template;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function entry(Template $template): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.pages.template.information-entry', ['title' => 'Information Entry']);
    }

    public function basicInformationSave(RequestBasicInformation $request): JsonResponse
    {
        try {

            $basicInformation = BasicInfromation::create($request->validated());

            upload($basicInformation, $request, 'photo');
            upload($basicInformation, $request, 'resume');
            $basicInformation->user_id = auth()->user()->id;
            $basicInformation->save();

            return response()->json(['success' => true]);
        }catch (Exception $exception) {

            return response()->json(['success' => false]);
        }
    }
}
