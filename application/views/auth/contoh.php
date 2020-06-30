<!-- Tabel Batasan Menurut Jenis Pengajuan -->
<table class="greyGridTable">
    <thead>
        <th>
        <td>No.</td>
        <td>Jenis Batasan</td>
        <td>Keterangan</td>
        </th>
    </thead>
    <tbody>
        <tr>
            <td>1. </td>
            <td>Pegajuan Unsur C Poin 2.E + 3 Maksimal 5% dari Total Unsur Penelitian</td>
            <td>ket</td>
        </tr>
        <?php if ($kode_batasan == 1) { ?>
            <tr>
                <td>2. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 2) { ?>
            <tr>
                <td>2. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 atau 1.C.6 </td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 3) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Minimal Terdapat 2 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 4) { ?>
            <tr>
                <td>2. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 5) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2 / 1.C.3 (Untuk Magister)</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>5. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4 (Untuk Doktor)</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 6) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Minimal Terdapat 4 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>5. </td>
                <td>Sudah Pernah atau Sedang Mengajukan Gelar Doktor</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 7) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>5. </td>
                <td>Sudah Pernah atau Sedang Mengajukan Gelar Doktor / Magister</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 8) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2</td>
                <td>ket</td>
            </tr>
        <?php } elseif ($kode_batasan == 9) { ?>
            <tr>
                <td>2. </td>
                <td>Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                <td>ket</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4</td>
                <td>ket</td>
            </tr>
        <?php } ?>
    </tbody>

</table>