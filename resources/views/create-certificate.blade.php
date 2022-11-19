@extends('index')

@section('content')
    <table class="table table-bordered text-center vertical-align-center mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Fakultas</th>
                <th>Perguruan Tinggi</th>
                <th>Posisi Magang</th>
                <th>Export</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $intern)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $intern['nama'] }}</td>
                    <td>{{ $intern['nim'] }}</td>
                    <td>{{ $intern['fakultas'] }}</td>
                    <td>{{ $intern['perguruanTinggi'] }}</td>
                    <td>{{ $intern['posisi'] }}</td>
                    <td><a href="/pdf-export/{{ $intern['id'] }}" class="btn btn-dark">PDF Export</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
