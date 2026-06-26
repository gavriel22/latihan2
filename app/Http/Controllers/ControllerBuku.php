<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//harus dihubungkan dengan model
use App\Models\ModelBuku;

class ControllerBuku extends Controller
{
    //fungsi 1:SELECT
    public function getAll(){
        $query = ModelBuku::select('id', 'judul', 'pengarang')->get();

        //syntax: return view('nama_blade', 'array yang dikirim')
        //dimana array yang dikirim" ['nama_array' => datanya]
        return view('HalamanBuku', ['buku' => $query]);
    }

    //Fungsi 2: INSERT
    public function addData(Request $req){
        ModelBuku::insert(
            [
                //syntax: 'nama_kolom_di_tabel' => nama_di_form_blade
                //nama_dari_blade 'dibawa' oleh parameter Request ($req)
                'judul' => $req->jdl,
                'pengarang' => $req->pgr,
            ]
        );
        //kembalikan ke HalamanBuku via route
        return redirect('/read');
    }

        //Fungsi 3: DELETE
        public function delete(Request $req){
            ModelBuku::where('id', $req->id)->delete();
            //ModelBuku::delete()->where('id', $req->id);

            //return ke halamanbuku via route
            return redirect('/read');
        }

        //Fungsi 4: GET BY ID (Untuk form update)
        public function getById(Request $req) {
            // Jika tidak ada ID di URL atau buku tidak ditemukan, kembalikan ke /read
            if (!$req->has('id')) {
                return redirect('/read');
            }
            $buku = ModelBuku::where('id', $req->id)->first();
            if (!$buku) {
                return redirect('/read');
            }
            return view('UpdateBuku', ['buku' => $buku]);
        }

        //Fungsi 5: UPDATE DATA
        public function updateData(Request $req) {
            ModelBuku::where('id', $req->id)->update([
                'judul' => $req->jdl,
                'pengarang' => $req->pgr
            ]);
            return redirect('/read');
        }
    }

