<?php

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage("L", "A4", false, false);

    $pdf->SetFont("dejavusans", "", "12");

    $html = '
        <h1 align="center">Laporan Surat Masuk</h1>
        <br />
        <table>
            <tr>
                <td>No Agenda</td>
                <td>'.$detail['no_agenda'].'</td>
            </tr>
            <tr>
                <td>ID</td>
                <td>'.$detail['id'].'</td>
            </tr>
            <tr>
                <td>Jenis Surat</td>
                <td>'.$detail['jenis_surat'].'</td>
            </tr>
            <tr>
                <td>Tanggal Kirim</td>
                <td>'.$detail['tanggal_kirim'].'</td>
            </tr>
            <tr>
                <td>Tanggal Terima</td>
                <td>'.$detail['tanggal_terima'].'</td>
            </tr>
            <tr>
                <td>No Surat</td>
                <td>'.$detail['no_surat'].'</td>
            </tr>
            <tr>
                <td>Pengirim</td>
                <td>'.$detail['pengirim'].'</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>'.$detail['perihal'].'</td>
            </tr>
        </table>
    ';

    $pdf->writeHTML($html, true, false, false, false, "");

    $pdf->Output('Laporan Surat Masuk.pdf', 'I');

?>
