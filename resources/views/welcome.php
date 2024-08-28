<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            background-color: #d3d3d3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .ktp-container {
            width: 600px;
            height: 410px;
            padding: 20px;
            background-color: #ADD8E6; /* Light blue background */
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
        .ktp-details {
            width: calc(100% - 140px); /* Adjusted width to accommodate the photo */
        }
        h1 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .ktp-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ADD8E6; /* Light blue background */
        }
        .ktp-table th, .ktp-table td {
            padding: 5px;
            font-size: 14px;
        }
        .ktp-table th {
            text-align: left;
            font-weight: bold;
        }
        .ktp-table td {
            text-align: left;
        }
        .header {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            padding-bottom: 10px;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            padding-top: 20px;
        }
        .photo-container {
            width: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        .photo-container img {
            width: 100px;
            height: 120px;
            object-fit: cover;
            border: 1px solid #000;
            margin-bottom: 10px;
        }
        .signature-container {
            text-align: center;
        }
        .signature-container img {
            width: 80px;
            height: 40px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="ktp-container">
        <div class="ktp-details">
            <div class="header">PROVINSI JAWA TIMUR<br>KABUPATEN PONOROGO</div>
            <table class="ktp-table">
                <tr>
                    <th>NIK</th>
                    <td>: 2236819317197</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>: KHOIRUL HIDAYAH</td>
                </tr>
                <tr>
                    <th>Tempat/Tgl Lahir</th>
                    <td>: PONOROGO, 23-06-2003</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: PEREMPUAN</td>
                    <th>Gol. Darah</th>
                    <td>: A</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: DUKUH KRAJAN</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">RT/RW</th>
                    <td>: 003/002</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">Kel/Desa</th>
                    <td>: TEMPURAN</td>
                </tr>
                <tr>
                    <th style="padding-left: 20px;">Kecamatan</th>
                    <td>: SAWOO</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>: ISLAM</td>
                </tr>
                <tr>
                    <th>Status Perkawinan</th>
                    <td>: BELUM KAWIN</td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>: PELAJAR/MAHASISWA</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>: WNI</td>
                </tr>
                <tr>
                    <th>Berlaku Hingga</th>
                    <td>: SEUMUR HIDUP</td>
                </tr>
            </table>
        </div>
        <div class="photo-container">
            <img src="img/photo.jpg" alt="Foto"> <!-- Placeholder for photo -->
            <div class="footer">
                <div>PONOROGO,</div>
                <div>19-12-2021</div>
                <div class="signature-container">
                    <img src="img/signature.png" alt="Tanda Tangan"> <!-- Placeholder for signature -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
