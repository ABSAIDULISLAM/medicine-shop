<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.barcode.index');
    }

    public function generate(Request $request)
    {
        $product = $request->input('product');
        $product_id = $request->input('product_id');
        $rate = $request->input('rate');
        $print_qty = (int)$request->input('print_qty');

        return view('admin.settings.barcode.generate', compact('product', 'product_id', 'rate', 'print_qty'));
    }

    public function generateBarcode($code)
    {
        $barcode_image = $this->createBarcode($code);
        return response($barcode_image)->header('Content-type', 'image/png');
    }

    private function createBarcode($code)
    {
        $width = 300;
        $height = 60;
        $font_size = 12;

        $image = imagecreatetruecolor($width, $height);
        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);

        imagefilledrectangle($image, 0, 0, $width, $height, $white);

        $data = $this->generateBarcodeData($code);
        $bar_width = $width / strlen($data);

        for ($i = 0; $i < strlen($data); $i++) {
            $color = $data[$i] == '1' ? $black : $white;
            imagefilledrectangle($image, $i * $bar_width, 0, ($i + 1) * $bar_width, $height, $color);
        }

        ob_start();
        imagepng($image);
        $image_data = ob_get_contents();
        ob_end_clean();

        imagedestroy($image);

        return $image_data;
    }

    private function generateBarcodeData($code)
    {
        // Simple barcode data generation for demonstration purposes
        // Convert the code into binary representation (0 and 1)
        $binary = '';
        for ($i = 0; $i < strlen($code); $i++) {
            $binary .= str_pad(decbin(ord($code[$i])), 8, '0', STR_PAD_LEFT);
        }

        return $binary;
    }
}
