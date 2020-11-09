<?php

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage("L", "A4", false, false);

    $pdf->SetFont("dejavusans", "", "12");

    $html = '
        <h1>Laporan Surat Masuk</h1>
        <br />
        <table border="1">
            <thead>
                <tr>
                    <td>No Agenda</td>
                    <td>ID</td>
                    <td>Jenis Surat</td>
                    <td>Tanggal Kirim</td>
                    <td>Tanggal Terima</td>
                    <td>No Surat</td>
                    <td>Pengirim</td>
                    <td>Perihal</td>
                </tr>
            </thead>

            <tbody>
    ';
    foreach ($datasurat as $surat) :
        $html .= '
            <tr>
                <td>'.$surat["no_agenda"].'</td>
                <td>'.$surat["id"].'</td>
                <td>'.$surat["jenis_surat"].'</td>
                <td>'.$surat["tanggal_kirim"].'</td>
                <td>'.$surat["tanggal_terima"].'</td>
                <td>'.$surat["no_surat"].'</td>
                <td>'.$surat["pengirim"].'</td>
                <td>'.$surat["perihal"].'</td>
            </tr>
        ';
    endforeach;
    $html .= '
            </tbody>
        </table>
    ';

    $pdf->writeHTML($html, true, false, false, false, "");

    $pdf->Output('Laporan Surat Masuk.pdf', 'I');

?>
