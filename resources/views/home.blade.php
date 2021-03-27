@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('PPDB SMK Wikrama') }}</div>

                    <div class="card-body">
                        <form action="{{ route('ppdb.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" value="{{ Auth()->user()->id }}" name="user_id">
                                <label for="nis">NIS</label>
                                <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>

                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value disable>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    placeholder="Masukkan Tempat Lahir">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" id="kelas" name="kelas">
                                    <option value disable>Pilih Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value disable>Pilih Jurusan</option>
                                    <option value="RPL">RPL</option>
                                    <option value="MMD">MMD</option>
                                    <option value="HTL">HTL</option>
                                    <option value="TKJ">TKJ</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
