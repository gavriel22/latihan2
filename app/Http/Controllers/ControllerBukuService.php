<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use Illuminate\Http\Request;


class ControllerBukuService extends Controller
{
    public function testAPI()
    {
        return response() -> json([
            'status' => 'SUCCESS',
            'message' => 'API Berhasil di-load',
        ], 200);
    }

    //fungsi 1:SELECT
    public function getAll(){
        $query = ModelBuku::select('id', 'judul', 'pengarang')->get();
        return response() -> json($query, 200, array(), JSON_PRETTY_PRINT);
    }

     //Fungsi 2: INSERT
    public function addData(Request $req){
        ModelBuku::insert(
            [
                'judul' => $req->judul,
                'pengarang' => $req->pengarang,
            ]
        );
        return response() -> json([
            'status' => 'SUCCESS',
            'message' => 'Data Berhasil Disimpan',
        ], 200);
    }

    //Fungsi 3: DELETE
    public function delete(Request $req){
        $hapus = ModelBuku::where('id', $req->id) -> delete();
        if ($hapus) {
            return response() -> json([
                'status' => 'SUCCESS',
                'message' => 'Data Berhasil Dihapus',
            ], 200);
        }
    }

    //function Select by id
    public function getById(Request $r)
    {
        $query = ModelBuku::select('id', 'judul', 'pengarang');
        $query = $query->where('id', $r->id)->get();

        return response()->json($query, 200, array(), JSON_PRETTY_PRINT);
    }

    //function update
    public function update(Request $req)
    {
        $update = ModelBuku::where('id', $req->id)->update([
            'judul' => $req->judul,
            'pengarang' => $req->pengarang
        ]);
        if ($update) {
            return response()->json([
                'status' => 'SUCCESS',
                'message' => 'Data Berhasil Diubah',
            ], 200);
        }
    }
}
