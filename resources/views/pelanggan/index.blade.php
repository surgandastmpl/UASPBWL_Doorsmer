@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>DAFTAR PELANGGAN</h3>
    <a href="{{ url('pelanggan/create') }}">Tambah Data Pelanggan</a>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>NO HP</td>
            <td>JENIS LAYANAN</td>
            <td>NO KENDARAAN</td>
            <td>HARGA</td>
            <td>ADMIN</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_id_gol }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_harga }}</td>
            <td>{{ $row->pel_id_user }}</td>
            <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}" class="btn btn-secondary btn-sm">Edit</a></td>
            <td><form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection