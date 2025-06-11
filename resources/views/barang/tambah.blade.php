<select name="kategori_id" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    @foreach ($kategori as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
    @endforeach
</select>
