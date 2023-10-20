<?php

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


if (!function_exists('upload')) {
    function upload($model, $request, $input = 'image')
    {
        if ($request->hasFile($input)) {
            $file = $request->file($input);
            $file_extension = $file->getClientOriginalExtension();
            $isPdf = $file_extension == 'pdf';
            $storage_path = public_path('uploads');

            # Create folder if not exists
            if (!file_exists($storage_path)) {
                mkdir($storage_path, 0755, true);
            }

            $file_name = uniqid(rand()) . time() . $file->getClientOriginalName();
            if ($isPdf) {
                $file->move($storage_path, $file_name);
                if (!empty($model->$input)) {
                    if (File::exists($storage_path . '/' . $model->$input)) {
                        unlink($storage_path . '/' . $model->$input);
                    }
                }
                $model->$input = $file_name;
                $model->save();
            } else {
                $file = Image::make($file);
                $file->save($storage_path . '/' . $file_name);
                if (!empty($model->$input)) {
                    if (File::exists($storage_path . '/' . $model->$input)) {
                        unlink($storage_path . '/' . $model->$input);
                    }
                }
                $model->$input = $file_name;
                $model->save();
            }
        }
    }
}
