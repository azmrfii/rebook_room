<h1>ini ruangan</h1>

<form action="{{ route('listRuangan.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <label for="">Nama Ruangan</label>
    <input type="text" name="nm_room" placeholder="nama ruangan">
    <br>
    <label for="">Lokasi Ruangan</label>
    <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan"></textarea>
    <br>
    <label for="">Foto Ruangan</label>
    <input type="file" name="foto_room">
    <br>
    <button type="submit">simpan</button>
</form>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Lokasi Ruangan</th>
            <th>Foto Ruangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($data as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->nm_room }}</td>
            <td>{{ $item->lokasi }}</td>
            <td><img src="{{ url('Image/Ruangan/' .$item->foto_room) }}" alt="" style="width: 150px; height: 100px;"></td>
            <td>
                <form action="{{ route('listRuangan.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('listRuangan.edit', $item->id) }}" class="btn btn-warning">edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus {{ $item->nm_room }}?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Lokasi Ruangan</th>
            <th>Foto Ruangan</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>
