<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bunga;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    private $param;

    public function __construct()
    {
        $this->param['title'] = 'Bunga';
        $this->param['pageTitle'] = 'Bunga';
        $this->param['pageIcon'] = 'file-invoice-dollar';
    }

    public function index(Request $request)
    {

        try {
            $this->param['bunga'] = Bunga::first();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withStatus('Terjadi Kesalahan');
        }

        return \view('backend.bunga.bunga', $this->param);
    }

    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate(
            [
                'bunga' => 'required',
            ],
            [
                'required' => ':attribute tidak boleh kosong.',
            ],
            [
                'bunga' => 'Bunga'
            ]
        );
        try {
            $bunga = Bunga::find($id);
            $bunga->bunga = $request->get('bunga');

            $bunga->save();

            return redirect()->route('bunga.index')->withStatus('Data berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withError('Terjadi kesalahan : ' . $e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database : ' . $e->getMessage());
        }
    }
}
