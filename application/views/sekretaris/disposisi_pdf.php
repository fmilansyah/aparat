<?php

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage("L", "A4", false, false);

    $pdf->SetFont("dejavusans", "", "12");

    $html = '
        <h1>Laporan Disposisi</h1>
        <br />
        <table border="1">
            <thead>
                <tr>
                    <td>No Disposisi</td>
                    <td>No Agenda</td>
                    <td>No Surat</td>
                    <td>Kepada</td>
                    <td>Keterangan</td>
                    <td>Status Surat</td>
                    <td>Tanggapan</td>
                </tr>
            </thead>

            <tbody>
    ';
    foreach ($disposisi as $data) :
        $html .= '
            <tr>
                <td>'.$data["no_disposisi"].'</td>
                <td>'.$data["no_agenda"].'</td>
                <td>'.$data["no_surat"].'</td>
                <td>'.$data["kepada"].'</td>
                <td>'.$data["keterangan"].'</td>
                <td>'.$data["status_surat"].'</td>
                <td>'.$data["tanggapan"].'</td>
            </tr>
        ';
    endforeach;
    $html .= '
            </tbody>
        </table>
    ';

    $pdf->writeHTML($html, true, false, false, false, "");

    $pdf->Output('Laporan Disposisi.pdf', 'I');

?>
