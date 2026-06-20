@extends('layouts.main')

@section('page')

<style>

.page-title{
    background:#2c3e50;
    color:white;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
}

.table-data{
    width:100%;
    border-collapse:collapse;
    background:white;
}

.table-data th{
    background:#34495e;
    color:white;
    padding:12px;
}

.table-data td{
    padding:12px;
}

.table-data tbody tr:nth-child(odd){
    background:#f8f9fa;
}

.table-data tbody tr:nth-child(even){
    background:#edf2f7;
}

</style>

<div class="page-title">
    Data Quesioner Perpustakaan
</div>

<table class="table-data">

    <thead>
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Kunjungan</th>
            <th>Akses Web</th>
            <th>Saran</th>
        </tr>
    </thead>

    <tbody>

        @foreach($quesioner as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->user->name }}</td>

            <td>{{ $item->frekuensi_kunjungan }}</td>

            <td>{{ $item->frekuensi_akses_web }}</td>

            <td>{{ $item->saran }}</td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection