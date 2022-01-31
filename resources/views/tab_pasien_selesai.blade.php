<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Antrian</th>
            <th>Nama</th>
            <th>Waktu</th>

            <th>Keluhan</th>
            <th>Dokter</th>
            <th>Status Pembayaran</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>


        @php
        $nomor = 1;
        @endphp
        @foreach ($selesai as $d)
        <tr id="tr{{$d->id}}">
            <td>{{ $nomor }}</td>
            <td>A{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->mulai_antri }}</td>

            <td>{{ $d->keluhan }}</td>

            <td>{{ $d->dokter_p }}</td>
            <td>
                @if ($d->status=="1")
                <span class="label label-lg font-weight-bold label-light-danger label-inline">Belum Lunas</span>

                @elseif ($d->status=="2")
                <span class="label label-lg font-weight-bold label-light-success label-inline">Sudah Lunas</span>

                @endif
            </td>
            <td nowrap="nowrap" style="width: 20%">
                @if ($d->status=="1")
                <form action="{{ route('invoice.update',2) }}" method="post" name="form1" autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <input type="hidden" name="id_trans" value="{{ $d->id }}" /> <button type="submit" name="submit"
                        id="btnsimpantransaksi" onclick="return confirm('Anda Yakin?')"
                        class="btn btn-danger font-weight-bold mr-2">Bayar</button>

                </form>
                @endif

                {{-- <a href="{{ url('/') }}/print-invoice/{{ $d->id }}" class=" btn btn-success font-weight-bold mr-2">
                    <i class="fas fa-print"></i> Print Invoice
                </a> --}}

                <a href="{{ url('/') }}/print-invoice/{{ $d->id }}"
                    onclick="window.open('{{ url('/') }}/print-invoice/{{ $d->id }}','_blank', 'toolbar=yes, scrollbar=yes, resizable=yes, top=50, left=50, width=800, height=500');return false;"
                    class=" btn btn-success font-weight-bold mr-2">
                    <i class="fas fa-print"></i> Print Invoice
                </a>

            </td>

        </tr>

        @php
        $nomor++;
        @endphp
        @endforeach




    </tbody>
</table>