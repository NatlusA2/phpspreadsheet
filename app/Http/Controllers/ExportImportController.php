<?php

namespace App\Http\Controllers;
use App\Models\penduduk; // Pastikan Anda mengimpor model Penduduk
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;

class ExportImportController extends Controller
{
    public function exportPenduduk()
{
    $data = Penduduk::all(); // Mengambil semua data dari tabel penduduk

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Mengatur header kolom
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('C1', 'Alamat');
    $sheet->setCellValue('D1', 'Gender');

    $row = 2; // Mulai dari baris ke-2 untuk data
    foreach ($data as $item) {
        $sheet->setCellValue('A' . $row, $item->id);
        $sheet->setCellValue('B' . $row, $item->nama);
        $sheet->setCellValue('C' . $row, $item->alamat);
        $sheet->setCellValue('D' . $row, $item->gender);
        $row++;
    }

    $writer = new Xlsx($spreadsheet);
    $fileName = 'data_penduduk.xlsx';
    $writer->save($fileName);

    return response()->download($fileName);
}
}
