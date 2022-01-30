<div class="card-body">

    <h5>Rencana Perawatan</h5>
    <br>
    <form action="{{ route('rm.update',4) }}" method="post" name="form1" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group row">

            <input type="hidden" name="id_trans" value="{{ $idtrans }}" />
            <input type="hidden" name="id_pasien" value="{{ $biodata->id }}" />
            <input type="hidden" id='tgl' name="tgl" value="{{ date('Y-m-d') }}">
            <label class="col-2 col-form-label">Diagnosa</label>
            <div class="col-4">
                <input class="form-control" type="text" value="" placeholder="Diagnosa" name="diagnosa"
                    id="example-text-input" />
            </div>

            <label for="jumlahtindakan" class="col-lg-2 col-form-label text-right">Perawatan</label>
            <div class="col-lg-4"><input type="text" class="form-control" name="perawatan" placeholder="Perawatan"
                    id="jumlahtindakan" required="" autocomplete="off"></div>

        </div>

        <div class="form-group row">

            <label class="col-2 col-form-label">Keterangan</label>
            <div class="col-3">
                <textarea name="keterangan" placeholder="Keterangan jika ada"></textarea>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><button type="Submit" name="Submit" class="btn btn-primary">Tambah</button></div>

        </div>

    </form>
    <div class="table table-checkable responsive">
        <table class="tabel-keranjang" id="tabel_keranjang" width="100%" cellspacing="0">
            <thead>
                <tr>

                    <th>Aksi</th>
                    <th>Diagnosa</th>
                    <th>Perawatan</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>



                @php
                $nomor = 1;
                $item = 0;
                $total =0;
                @endphp
                @foreach ($rp as $d)
                <tr id="tr{{$d->id}}">

                    <td nowrap="nowrap" style="width: 8%">
                        <form action="{{ route('rp.destroy', $d->id) }}" method="POST">


                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"> <i
                                    class="la la-trash">
                                </i>
                            </button>

                        </form>
                    </td>
                    <td>{{ $d->diagnosa }}</td>
                    <td>{{ $d->perawatan }}</td>
                    <td>{{ $d->keterangan }}</td>
                    <td>{{ $d->tgl }}</td>


                </tr>

                @php
                $nomor++;

                @endphp
                @endforeach

            </tbody>


        </table>
    </div>

</div>