<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="assets/css/stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="box-formulir" >
        <h2>Formulir Pendaftaran</h2>

        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tanggal Daftar</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_daftar" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendakian</td>
                        <td>:</td>
                        <td>
                            <select class="input-control">
                                <option value="">--Pilih--</option>
                                <option value="">--Gn.Semeru--</option>
                                <option value="">--Gn.Rinjani--</option>
                                <option value="">--Gn.Prau--</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <H3>Data Diri</H3>
            <div class="box">
                <table border="0" class="table_form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki">Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan">Perempuan

                        </td>
                    </tr>
                    <tr>
                        <td>Nomer Handphone</td>
                        <td>:</td>
                        <td>
                            <input type="int" name="no_hp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar">
                        </td>
                    </tr>
                </table>
            </div>

        </form>
    </section>
</body>
</html>