@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('PPDB SMK Wikrama') }}</div>

                    <div class="card-body">
                        @forelse ($data as $item)
                            <p><b>NIS:</b> {{ $item->nis }}</p>
                            <p><b>Nama:</b> {{ $item->nama }}</p>
                            <p><b>Jenis kelamin:</b> {{ $item->jk }}</p>
                            <p><b>Tempat Lahir:</b> {{ $item->tempat_lahir }}</p>
                            <p><b>Tanggal Lahir:</b> {{ $item->tanggal_lahir }}</p>
                            <p><b>Alamat:</b> {{ $item->alamat }}</p>
                            <p><b>Asal Sekolah:</b> {{ $item->asal_sekolah }}</p>
                            <p><b>Kelas:</b> {{ $item->kelas }}</p>
                            <p><b>Jurusan:</b> {{ $item->jurusan }}</p>
                            <form action="{{ route('ppdb.destroy', [$item->id]) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</button>
                                <a href="{{ route('ppdb.edit', [$item->id]) }}" class="btn btn-primary btn-sm">Ubah Data</a>
                                <a href="{{ route('print') }}" class="btn btn-secondary btn-sm">Print</a>
                            </form>
                        @empty
                            <p>Tidak ada data</p> Silahkan isi kembali <a href="{{ route('home') }}">disini</a>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
