<?php

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

function slugCreate($modelName, $slug_text, $slugColumn = 'slug')
{
    $slug = Str::slug($slug_text, '-');
    $i = 1;
    while ($modelName::where($slugColumn, $slug)->exists()) {
        $slug = Str::slug($slug_text, '-') . '-' . $i++;
    }
    return $slug;
}

function slugUpdate($modelName, $slug_text, $modelId, $slugColumn = 'slug')
{
    $slug = Str::slug($slug_text, '-');
    $i = 1;
    while ($modelName::where($slugColumn, $slug)->where('id', '!=', $modelId)->exists()) {
        $slug = Str::slug($slug_text, '-') . '-' . $i++;
    }
    return $slug;
}

function fileUpload($file, $path, $withd = 400, $height = 400)
{
    $image_name = uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
    $imagePath = $path . '/' . $image_name;
    Image::make($file)->resize($withd, $height, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path($imagePath));

    return $imagePath;
}

function orderId()
{
    $timestamp = now()->format('YmdHis');
    $randomString = Str::random(6);
    return $timestamp . $randomString;
}

function responsejson($message, $data = "success")
{
    return response()->json(
        [
            'data' => $data,
            'message' => $message
        ]
    );
}

function userid()
{
    return auth()->user()->id;
}


function upload_image($filename, $path, $width = 400, $height = 400)
{
    $imagename = uniqid() . '.' . $filename->getClientOriginalExtension();
    $new_webp = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $imagename);

    Image::make($filename)->encode('webp', 90)->fit($width, $height)->save($path . $new_webp);
    $image_upload = $path . $new_webp;
    return $image_upload;
}

function Upload($file, $path, $width = 400, $height = 400)
{
    $image_name = uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
    $new_webp = pathinfo($image_name, PATHINFO_FILENAME) . '.webp';
    $imagePath = $path . '/' . $new_webp;

    Image::make($file)->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path($imagePath));

    return $imagePath;
}


function handleUpdatedUploadedImage($file, $path, $data, $delete_path, $field)
{
    $name = time() . $file->getClientOriginalName();

    $file->move(base_path('public/') . $path, $name);
    if ($data[$field] != null) {
        if (file_exists(base_path('public/') . $delete_path . $data[$field])) {
            unlink(base_path('public/') . $delete_path . $data[$field]);
        }
    }
    return $name;
}

if (!function_exists('uploadany_file')) {
    function uploadany_file($filename, $path = 'uploads/licence-holders/')
    {
        $uploadPath = $path;
        $i = 1;

        $extension = $filename->getClientOriginalExtension();
        $name =  uniqid() . $i++ . '.' . $extension;
        $filename->move($uploadPath, $name);

        return $uploadPath . $name;
    }
}



function convertfloat($originalNumber)
{
    return str_replace(',', '', $originalNumber);
}

// convert to word from number 
function convertToWords($number) {
    $ones = array(
        0 => 'Zero', 1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven',
        8 => 'Eight', 9 => 'Nine', 10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen',
        15 => 'Fifteen', 16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen', 19 => 'Nineteen'
    );
    $tens = array(
        0 => '', 1 => '', 2 => 'Twenty', 3 => 'Thirty', 4 => 'Forty', 5 => 'Fifty', 6 => 'Sixty', 7 => 'Seventy',
        8 => 'Eighty', 9 => 'Ninety'
    );
    $hundreds = array(
        'Hundred', 'Thousand', 'Million', 'Billion', 'Trillion', 'Quadrillion', 'Quintillion'
    );
    $number = number_format($number, 2, '.', '');
    $num_arr = explode('.', $number);
    $wholes = (int) $num_arr[0];
    $decimal = isset($num_arr[1]) ? (int) $num_arr[1] : 0;

    $words = '';

    if ($wholes > 0) {
        $words = '';
        $hunit = (int)($wholes / 100);
        $hrem = $wholes % 100;
        if ($hunit > 0) {
            $words .= $ones[$hunit] . ' ' . $hundreds[0];
        }
        if ($hrem > 0) {
            $words .= $words != '' ? ' ' : '';
            if ($hrem < 20) {
                $words .= $ones[$hrem];
            } else {
                $tunit = (int)($hrem / 10);
                $trem = $hrem % 10;
                if ($tunit > 0) {
                    $words .= $tens[$tunit];
                }
                if ($trem > 0) {
                    $words .= $words != '' ? ' ' : '';
                    $words .= $ones[$trem];
                }
            }
        }
        $words .= ' Taka ';
    }

    if ($decimal > 0) {
        $words .= 'and ' . $decimal . '/100';
    } else {
        $words .= 'only';
    }

    return ucfirst($words);
}
