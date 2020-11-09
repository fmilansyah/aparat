<?php

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage("L", "A4", false, false);

    $pdf->SetFont("dejavusans", "", "12");

    $html = '
        <h1 align="center">Bukti Disposisi</h1>
        <br />
        <table border="1">
            <tr>
                <td>Surat dari</td>
                <td>'.$detail['pengirim'].'</td>
                <td>Diterima tanggal</td>
                <td>'.$detail['tanggal_terima'].'</td>
            </tr>
            <tr>
                <td>Tanggal Surat</td>
                <td>'.$detail['tanggal_kirim'].'</td>
                <td>Nomor Agenda</td>
                <td>'.$detail['no_agenda'].'</td>
            </tr>
            <tr>
                <td>No Surat</td>
                <td>'.$detail['no_surat'].'</td>
                <td>Disposisi</td>
                <td>'.$detail['kepada'].'</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>'.$detail['perihal'].'</td>
                <td>Tanggapan</td>
                <td>'.$detail['tanggapan'].'</td>
            </tr>
        </table>
    ';

    $pdf->writeHTML($html, true, false, false, false, "");

    $pdf->Output('Bukti Disposisi.pdf', 'I');

?>
