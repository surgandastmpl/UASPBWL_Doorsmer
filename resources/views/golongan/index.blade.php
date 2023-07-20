@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>JENIS LAYANAN</h3>
<a href="{{ url('golongan/create') }}">Tambah Layanan</a>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>KODE</td>
            <td>NAMA</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="btn btn-secondary btn-sm">Edit</a></td>
            <td><form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
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