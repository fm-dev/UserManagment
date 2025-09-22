<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FileManagement;
class Dashboard extends Controller
{
    //
    public function index(){
        $data = FileManagement::all();
        return view('pages.file',compact('data'));
    }
    public function TambahData(){
        return view('pages.tambah_file');
    }
    public function SimpanData(Request $req){
        try
        {
            $validated = $req->validate([
                'file'       => 'required|file|max:5120',     
                'nama_file'  => 'nullable|string|max:255',    
            ]);

            $path = $req->file('file')->store('uploads', 'public');

            $createdData = FileManagement::create([
                'created_by' => "system",
                'created_at' => now(),
                'path_file'  => $path,
                'nama_file'  => $req->file('file')->getClientOriginalName(),
                'label_file' => $validated['nama_file'] ?? null,
            ]);

            return redirect('/Dashboard')->with('success', 'File berhasil diupload.');
        }
        catch(\Exception $ex){
            echo $ex;
        }

    }
    public function download($id)
    {
        $file = FileManagement::findOrFail($id);

        // path relatif di storage/app/public
        $path = $file->path_file;

        if (!Storage::disk('public')->exists($path)) {
            abort(404, 'File tidak ditemukan.');
        }

        return Storage::disk('public')->download($path, $file->nama_file);
    }
    public function destroy($id)
    {
        $file = FileManagement::findOrFail($id);

        // hapus file dari storage (kalau ada)
        if (Storage::disk('public')->exists($file->path_file)) {
            Storage::disk('public')->delete($file->path_file);
        }

        // hapus record dari database
        $file->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus.');
    }
    
}
