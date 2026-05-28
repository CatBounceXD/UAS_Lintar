<!DOCTYPE html>
<html>
<head>

    <title>Katalog Buku</title>

</head>

<body>

    <h2>
        PERPUSTAKAAN - KATALOG BUKU
    </h2>

    <hr>

    <table border="1" width="100%" cellpadding="5">

        <tr bgcolor="#dddddd">

            <td width="25%">
                Perpustakaan
            </td>

            <td>

                <select>

                    <option>1-Pusat</option>
                    <option>Cabang</option>

                </select>

            </td>

        </tr>

        <tr bgcolor="#eeeeee">

            <td>
                Pencarian
            </td>

            <td>

                <input type="text" placeholder="Judul Buku">

                <button>
                    Cari
                </button>

            </td>

        </tr>

    </table>

    <br>

    <h3>Daftar Judul Buku</h3>

    <table border="1" width="100%" cellpadding="5">

        <tr bgcolor="#cccc99">

            <th>Pilih</th>

            <th>No</th>

            <th>Judul Buku</th>

            <th>Call Number</th>

        </tr>

        @foreach($buku as $item)

        <tr
            @if($loop->iteration % 2 == 0)
                bgcolor="#ffcccc"
            @else
                bgcolor="#ccccff"
            @endif
        >

            <td align="center">

                <input type="checkbox">

            </td>

            <td>

                {{ $loop->iteration }}

            </td>

            <td>

                {{ $item->judul_buku }}

            </td>

            <td>

                {{ $item->call_number }}

            </td>

        </tr>

        @endforeach

    </table>

</body>
</html>