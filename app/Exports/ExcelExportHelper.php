<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelExportHelper
{
    /**
     * Export data array ke Excel dan kirim sebagai response download.
     *
     * @param string $filename Nama file Excel, contoh: 'users.xlsx'
     * @param array $columns Array nama kolom (digunakan sebagai header dan key data)
     * @param array $data Array data (array of associative arrays)
     * @return StreamedResponse
     */
    public static function export(string $filename, array $columns, array $data): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom di baris pertama
        foreach ($columns as $colIndex => $colName) {
            $cell = Coordinate::stringFromColumnIndex($colIndex + 1) . '1';
            $sheet->setCellValue($cell, $colName);
        }

        // Isi data mulai dari baris ke-2
        foreach ($data as $rowIndex => $row) {
            foreach ($columns as $colIndex => $colName) {
                $value = $row[$colName] ?? '';
                $columnLetter = Coordinate::stringFromColumnIndex($colIndex + 1);
                $cell = $columnLetter . ($rowIndex + 2);
                $sheet->setCellValue($cell, $value);
            }
        }

        // Buat response stream download
        $writer = new Xlsx($spreadsheet);

        $response = new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        });

        $dispositionHeader = $response->headers->makeDisposition(
            'attachment',
            $filename
        );

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $dispositionHeader);
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
