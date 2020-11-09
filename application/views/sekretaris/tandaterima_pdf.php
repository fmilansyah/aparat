<?php

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage("L", "A4", false, false);

    $pdf->SetFont("dejavusans", "", "12");

    $html = '
        <h1 align="center">Tanda Terima Surat</h1>
        <br />
        <table border="1">
            <tr>
                <td>Telah Terima Dari</td>
                <td>'.$detail['pengirim'].'</td>
            </tr>
            <tr>
                <td>No Agenda</td>
                <td>'.$detail['no_agenda'].'</td>
            </tr>
            <tr>
                <td>No Surat</td>
                <td>'.$detail['no_surat'].'</td>
            </tr>
            <tr>
                <td>Tanggal Surat</td>
                <td>'.$detail['tanggal_kirim'].'</td>
            </tr>
            <tr>
                <td>Tanggal Terima</td>
                <td>'.$detail['tanggal_terima'].'</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>'.$detail['no_surat'].'</td>
            </tr>

        </table>
        <table>
            <tr align="center">
                <td>Yang Menyerahkan</td>
                <td>Yang Menerima</td>
            </tr>
            <br />
            <br />
            <br />
            <br />
            <tr align="center">
                <td>'.$detail['pengirim'].'</td>
                <td>Sekretaris</td>
            </tr>
        </table>
    ';

    $pdf->writeHTML($html, true, false, false, false, "");

    $pdf->Output('Tanda Terima.pdf', 'I');

?>
