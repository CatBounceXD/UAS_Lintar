@extends('layouts.main')

@section('page')
<div class="container">
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr style="background-color: black; color: white; text-align: left;">
                <th>BIODATA - LENGKAPI DATA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 15px; font-size: 16px; line-height: 1.5;">
                    Bagi Mahasiswa Profesi Dokter dan mahasiswa S1 angkatan 2021, 
                    untuk melengkapi data silahkan klik Tombol Lengkapi Data
                    <br><br>
                    <a href="{{ url('/lengkapdata/dashboard') }}" style="background-color: #f0f0f0; padding: 5px 15px; border: 1px solid #ababab; text-decoration: none; color: black; display: inline-block; border-radius: 3px; font-size: 14px; box-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
                        Lengkapi Data
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection