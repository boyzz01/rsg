<style type="text/css">
    .select2-container {
        display: block;
    }
</style>
<div class="card-body">
    <div class="row mb-3">
        <div class="col-6">
            <h5>INV{{ date('Ymd') }}{{ $idtrans }}</h5>
        </div>
        <div class="col-6 text-right">
            <h6>{{ $biodata->nama }}</h6>
        </div>
    </div>
    <form action="{{ route('tindakan.store') }}" method="post" name="form1" autocomplete="off">
        {{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="id_pasien" value="{{ $biodata->id }}">
            <input type="hidden" name="no_trans" value="{{ $idtrans }}" autocomplete="off">
            <label for="namatindakan" class="col-lg-2 col-form-label">Jenis
                Tindakan</label>
            <div class="col-lg-5">
                <select class="form-control select2" id="kt_select2_4" name="id_tindakan" required>
                    <option label="Label"></option>
                    @for ($i = 0 ; $i < count($tindakan) ; $i++) @if ($i==0) <optgroup
                        label="{{ $tindakan[$i]->header }}">
                        <option value="{{ $tindakan[$i]->id }}">{{ $tindakan[$i]->nama}}
                        </option>

                        @else
                        @if ($tindakan[$i]->header==$tindakan[$i-1]->header)
                        <option value="{{ $tindakan[$i]->id }}">{{ $tindakan[$i]->nama}}
                        </option>
                        @else
                        <optgroup label="{{ $tindakan[$i]->header }}">
                            <option value="{{ $tindakan[$i]->id }}">{{
                                $tindakan[$i]->nama}}</option>
                            @endif
                            @endif

                            @endfor

                </select>
            </div><label for="jumlahtindakan" class="col-lg-1 col-form-label text-right">Harga</label>
            <div class="col-lg-2"><input type="number" class="form-control" name="jumlah" value="" id="jumlahtindakan"
                    required="" autocomplete="off"></div>

        </div>
        <div class="form-group row">
            <label for="ket" class="col-lg-2 col-form-label">Keterangan</label>
            <div class="col-lg-5">
                <textarea name="ket"></textarea>

            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><button type="submit" name="simpantindakan" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

    <br>
    <div class="table table-bordered table-checkable">
        <table class="tabel-keranjang" id="tabel_keranjang" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Jenis</th>
                    <th>Nama</th>

                    <th>Harga/Biaya</th>
                    <th>Jumlah</th>

                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>



                @php
                $nomor = 1;
                $item = 0;
                $total =0;
                @endphp
                @foreach ($layanan as $d)
                <tr id="tr{{$d->id}}">

                    <td nowrap="nowrap">
                        <form action="{{ route('tindakan.destroy', $d->id) }}" method="POST">


                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"> <i
                                    class="la la-trash">
                                </i>
                            </button>

                        </form>
                    </td>
                    <td>{{ $d->header }}</td>
                    <td>{{ $d->nama }}</td>

                    <td>{{ $d->biaya }}</td>
                    <td align="center">{{ $d->jumlah }}</td>


                    <td align="right">{{$d->jumlah*$d->biaya }}</td>


                </tr>

                @php
                $nomor++;
                $item+=$d->jumlah;
                $subtotal=$d->jumlah*$d->biaya;
                $total+=$subtotal;
                @endphp
                @endforeach

            </tbody>

            <tbody>

                <tr style="margin-top: 20px">
                    <td colspan="4" align="right"><strong>Total</strong></td>
                    <td align="center"><strong>{{ $item }} Items</strong></td>

                    <td align="right"><strong></strong></td>
                </tr>
                <form action="https://demo-sisfonet.xyz/klinik-gigi/layanan/simpantransaksi" method="post"
                    id="formbayar"></form>
                <tr>
                    <td colspan="5" align="right"><strong>Total Harus
                            Dibayar</strong></td>
                    <td align="right"><strong>{{ $total }}</strong></td>
                </tr>

                {{-- <tr>
                    <td colspan="5" align="right"><strong>Bayar
                            Sekarang</strong></td>
                    <td align="right"><input type="text" size="12" class="ml-auto pl-0 uang text-right garis-bawah"
                            name="bayarsekarang" id="bayarsekarang" value="0" onclick="this.select();" required=""
                            autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="5" align="right"><strong>Sisa</strong></td>
                    <td align="right"><input type="text" size="12" class="ml-auto pl-0 text-right garis-bawah"
                            name="sisabayar" id="sisabayar" readonly="on" autocomplete="off"></td><input type="hidden"
                        id="sisaclear" autocomplete="off">
                </tr> --}}
            </tbody>
        </table><button type="submit" name="simpantransaksi" id="btnsimpantransaksi"
            class="btn btn-primary mt-4 mb-2 float-right">Simpan</button>
    </div>
</div>