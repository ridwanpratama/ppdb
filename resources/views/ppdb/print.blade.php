@foreach ($data as $item)
<p><b>NIS:</b> {{ $item->nis }}</p>
<p><b>Nama:</b> {{ $item->nama }}</p>
<p><b>Jenis kelamin:</b> {{ $item->jk }}</p>
<p><b>Tempat Lahir:</b> {{ $item->tempat_lahir }}</p>
<p><b>Tanggal Lahir:</b> {{ $item->tanggal_lahir }}</p>
<p><b>Alamat:</b> {{ $item->alamat }}</p>
<p><b>Asal Sekolah:</b> {{ $item->asal_sekolah }}</p>
<p><b>Kelas:</b> {{ $item->kelas }}</p>
<p><b>Jurusan:</b> {{ $item->jurusan }}</p>
@endforeach