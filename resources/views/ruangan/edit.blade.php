<h1>ini edit ruangan</h1>

<form action="{{ route('listRuangan.update', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Nama Ruangan</label>
    <input type="text" name="nm_room" placeholder="nama ruangan" value="{{ $data->nm_room }}">
    <br>
    <label for="">Lokasi Ruangan</label>
    <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan">{{ $data->lokasi }}</textarea>
    <br>
    <label for="">Foto Ruangan</label>
    <input type="file" name="foto_room">
    <br>
    <br>
    <button type="submit">edit</button>
    <a href="{{ route('listRuangan.index') }}">Back</a>
</form>
