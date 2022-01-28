<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Antrian</th>
            <th>Nama</th>
            <th>Waktu</th>

            <th>Keluhan</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>


        @php
        $nomor = 1;
        @endphp
        @foreach ($antri as $d)
        <tr id="tr{{$d->id}}">
            <td>{{ $nomor }}</td>
            <td>A{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->mulai_antri }}</td>

            <td>{{ $d->keluhan }}</td>
            <td nowrap="nowrap" style="width: 20%">
                <form action="{{ route('antrian.destroy', $d->id) }}" method="POST">
                    <a href="javascript:;" class="btn btn-primary edit_btn2" id="{{$d->id}}"
                        title="Masukkan Pasien Keruangan">
                        <i class="far fa-arrow-alt-circle-right"></i>Masukkan Pasien Keruangan
                    </a>


                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"
                        onclick="return confirm('Hapus pasien ini dari antrian dan batalkan pemeriksaan?')"><i
                            class="la la-trash">
                        </i>
                    </button>

                </form>
            </td>

        </tr>

        @php
        $nomor++;
        @endphp
        @endforeach




    </tbody>
</table>