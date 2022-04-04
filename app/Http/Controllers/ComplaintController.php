<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Carbon\Carbon;

class ComplaintController extends Controller
{
   public function complaint(Request $request)
   {
        $file = $request->file('photo');
        $fileName = time().'-'. $request->photo->extension();
        $request->photo->move(public_path('photo'), $fileName);
        Complaint::create([
         'nik' => $request->nik,
         'report_text' => $request->report_text,
         'photo' => $fileName,
         'title' => $request->title,
     ]);
     return redirect('/')->with('success','Laporan Berhasil Diajukan');
   }

   public function index(Request $request)
   {
      $onComplaint = Complaint::where('status', '0')->count();
      $onProcess = Complaint::where('status', 'process')->count();
      $onDone = Complaint::where('status', 'done')->count();
      $data = Complaint::orderByRaw("FIELD (status, '0', 'process', 'done' ) ASC")->latest()->get();
      return view('complaint.index',  [
         'data' => $data,
         'onComplaint' => $onComplaint,
         'onProcess' => $onProcess,
         'onDone' => $onDone,
      ]);
   }

   public function detail($id)
   {
      $data = Complaint::find($id);
      return view('complaint.detail', [
         'data'=>$data,
      ]);
   }

   public function update(Request $request, $id)
   {
      $data = Complaint::find($id);
      $data->update([
         'status' => 'process'
      ]);

      return back();
   }

   public function done(Request $request, $id)
   {
      $data = Complaint::find($id);
      $data->update([
         'status' => 'done'
      ]);

      return back();
   }
}