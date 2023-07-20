@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tambah Pelanggan</h3>

        <form action="{{ url('/pelanggan') }}" method="POST">
             @csrf
            <div class="mb-2">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="pel_nama">
            </div>
            <div class="mb-2">
                <label>NO HP</label>
                <input type="text" class="form-control" name="pel_hp">
            </div>
            <div class="mb-2">
                <label>jENIS LAYANAN</label>
                <select class="form-control select2" name="pel_id_gol" id="pel_id_gol" required>
                @foreach ($gol as $item)
                <option value="{{ $item->gol_id }}">{{ $item->gol_nama }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label>NO KENDARAAN</label>
                <input type="text" class="form-control" name="pel_seri">
            </div>
            <div class="mb-2">
                <label>HARGA</label>
                <input type="text" class="form-control" name="pel_harga">
            </div>
            <div class="mb-2">
                <label>ADMIN</label>
                <select class="form-control select2" name="pel_id_user" id="pel_id_user" required>
                @foreach ($use as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-2">
                <input type="submit" value="SIMPAN">
            </div></form>
    </div>
@endsection