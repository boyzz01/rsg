<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Antrian</th>
            <th>Nama</th>
            <th>Waktu</th>

            <th>Keluhan</th>
            <th>Dokter</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>


        @php
        $nomor = 1;
        @endphp
        @foreach ($ruangan as $d)
        <tr id="tr{{$d->id}}">
            <td>{{ $nomor }}</td>
            <td>A{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->mulai_antri }}</td>

            <td>{{ $d->keluhan }}</td>

            <td>{{ $d->dokter_p }}</td>
            <td nowrap="nowrap" style="width: 20%">
                <form action="{{ route('antrian.destroy', $d->id) }}" method="POST">
                    <a href="{{ url('/') }}/pemeriksaan/{{ $d->id }}/{{ $d->id_pasien }}"
                        class="btn btn-success font-weight-bold mr-2">
                        <i class="fas fa-teeth-open"></i> Pemeriksaan
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