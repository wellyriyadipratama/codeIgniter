<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>NO. TELEPON</th>
        </tr>

        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><?php echo $mhs->alamat ?></td>
                <td><?php echo $mhs->email ?></td>
                <td><?php echo $mhs->no_telp ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>