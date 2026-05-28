<!DOCTYPE html>
<html>
<head>

    <title>Katalog Skripsi</title>

</head>

<body>

    <h2>
        PERPUSTAKAAN - KATALOG SKRIPSI
    </h2>

    <hr>

    <table border="1" width="100%" cellpadding="5">

        <tr bgcolor="#dddddd">

            <td width="25%">
                Fakultas
            </td>

            <td>

                <select>

                    <option>Teknik</option>
                    <option>Ekonomi</option>
                    <option>Hukum</option>
                    <option>FISIP</option>

                </select>

            </td>

        </tr>

        <tr bgcolor="#eeeeee">

            <td>
                Pencarian
            </td>

            <td>

                <form action="/katalog-skripsi" method="GET">

                    <input
                        type="text"
                        name="search"
                        placeholder="Judul Skripsi"
                    >

                    <button type="submit">
                        Cari
                    </button>

                </form>

            </td>

        </tr>

    </table>

    <br>

    <h3>
        Daftar Judul Skripsi / Tesis
    </h3>

    <table border="1" width="100%" cellpadding="5">

        <tr bgcolor="#cccc99">

            <th>Pilih</th>

            <th>No</th>

            <th>Judul Skripsi</th>

            <th>Pengarang</th>

            <th>Fakultas</th>

            <th>Tahun</th>

        </tr>

        @foreach($skripsi as $item)

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

                {{ $item->judul_skripsi }}

            </td>

            <td>

                {{ $item->pengarang }}

            </td>

            <td>

                {{ $item->fakultas }}

            </td>

            <td>

                {{ $item->tahun }}

            </td>

        </tr>

        @endforeach

    </table>

    <br>

    {{ $skripsi->links() }}

</body>
</html>