<style type="text/css">
    .select2-container {
        display: block;
    }

</style>
<div class="card-body">
    <div class="row mb-3">
        <div class="col-6">
            <h5>INV{{ $idtrans }}</h5>
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
            <div class="col-lg-4">
                <select class="form-control select2" id="kt_select2_4" name="id_tindakan" required>
                    <option label="Label"></option>
                    @for ($i = 0; $i < count($tindakan); $i++)
                        @if ($i == 0)
                            <optgroup label="{{ $tindakan[$i]->header }}">
                                <option value="{{ $tindakan[$i]->id }}" data-harga="{{ $tindakan[$i]->biaya }}">
                                    {{ $tindakan[$i]->nama }}
                                </option>
                            @else
                                @if ($tindakan[$i]->header == $tindakan[$i - 1]->header)
                                    <option value="{{ $tindakan[$i]->id }}"
                                        data-harga="{{ $tindakan[$i]->biaya }}">{{ $tindakan[$i]->nama }}
                                    </option>
                                @else
                            <optgroup label="{{ $tindakan[$i]->header }}">
                                <option value="{{ $tindakan[$i]->id }}" data-harga="{{ $tindakan[$i]->biaya }}">
                                    {{ $tindakan[$i]->nama }}</option>
                        @endif
                    @endif

                    @endfor

                </select>
            </div>

            <label for="elemen" class="col-lg-2 col-form-label text-right">Elemen Gigi</label>
            <div class="col-lg-4"><input type="text" class="form-control" name="elemen" value="" id="elemen"
                    required="" autocomplete="off"></div>

        </div>
        <div class="form-group row">
            <label for="ket" class="col-lg-2 col-form-label">Keterangan</label>
            <div class="col-lg-5">
                <textarea name="ket"></textarea>

            </div>
            <label for="harga" class="col-lg-1 col-form-label text-right">Harga</label>
            <div class="col-lg-2"><input type="number" class="form-control" name="harga" value="" id="harga"
                    required="" autocomplete="off"></div>
            <div class="col-lg-2"><button type="submit" name="simpantindakan"
                    class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

    <br>
    <div class="table table-bordered table-checkable">
        <table class="tabel-keranjang" id="tabel_keranjang" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Jenis Tindakan</th>
                    <th>Element</th>
                    <th>Keterangan</th>
                    <th>Harga/Biaya</th>
                    <th>Jumlah</th>

                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>



                @php
                    $nomor = 1;
                    $item = 0;
                    $total = 0;
                @endphp
                @foreach ($layanan as $d)
                    <tr id="tr{{ $d->id_layanan }}">

                        <td nowrap="nowrap">
                            <form action="{{ route('tindakan.destroy', $d->id_layanan) }}" method="POST">


                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"> <i
                                        class="la la-trash">
                                    </i>
                                </button>

                            </form>
                        </td>
                        <td>{{ $d->header }} ({{ $d->nama }})</td>
                        <td>{{ $d->elemen }}</td>
                        <td>{{ $d->ket }}</td>
                        <td>{{ number_format($d->harga, 0, ',', '.') }}
                        </td>
                        <td align="center">1</td>


                        <td align="right">
                            {{ number_format($d->harga, 0, ',', '.') }}
                        </td>


                    </tr>

                    @php
                        $nomor++;
                        $item += 1;
                        $subtotal = 1 * $d->harga;
                        $total += $subtotal;
                    @endphp
                @endforeach

            </tbody>

            <tbody>

                <tr style="margin-top: 20px">
                    <td colspan="5" align="right"><strong>Total</strong></td>
                    <td align="center"><strong>{{ $item }} Items</strong></td>

                    <td align="right"><strong></strong></td>
                </tr>

                <tr>
                    <td colspan="6" align="right"><strong>Total Harus
                            Dibayar</strong></td>
                    <td align="right">
                        <strong>{{ number_format($total, 0, ',', '.') }}</strong>
                    </td>
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
        </table>
        <form action="{{ route('invoice.update', 1) }}" method="post" name="form1" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id_invoice" value="{{ $invoice->id_invoice }}" />
            <input type="hidden" name="id_trans" value="{{ $idtrans }}" />
            <input type="hidden" name="id_pasien" value="{{ $biodata->id }}" />
            <input type="hidden" name="total" value="{{ $total }}" />
            <input type="hidden" name="status" value="1" />
            <button type="submit" name="submit" id="btnsimpantransaksi"
                onclick="return confirm('Semua Data Sudah Benar dan Selesaikan Pemeriksaan Pasien?')"
                class="btn btn-primary mt-4 mb-2 float-right">Selesaikan Pemeriksaan</button>

        </form>
    </div>
</div>
