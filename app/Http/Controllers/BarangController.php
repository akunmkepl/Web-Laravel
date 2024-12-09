<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function getBarang()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:3000/api/barang', 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            return view('barang.index', [
                'error' => 'Gagal mengambil data: ' . $error,
                'data' => []
            ]);
        }

        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return view('barang.index', [
                'error' => 'Gagal memproses data API',
                'data' => []
            ]);
        }

        return view('barang.index', [
            'error' => null,
            'data' => $data['data'] ?? [] 
        ]);
    }
}

