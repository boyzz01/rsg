<section>

    <div class="modal fade" id="modalFisik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="{{ route('fisik.update',$fisik->id) }}" method="post" name="form1" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Update Pemeriksaan Fisik Pasien {{
                            $biodata->nama
                            }}
                        </h5>
                        <br>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body" style="padding:0">
                        <input type="hidden" id='id_pasien' name="id_pasien" value="{{ $biodata->id }}">
                        <input type="hidden" id='tgl' name="tgl" value="{{ date('Y-m-d H:m:s') }}">
                        <input type="hidden" id='dokter' name="dokter" value="{{ session()->get('nama') }}">
                        <div class="card-body">
                            Pemeriksaan terakhir tanggal : {{ $fisik->tgl }}
                            <br>
                            oleh : {{ $fisik->dokter }}
                            <br>
                            <br>
                            <h5>Pemeriksaan Ekstra Oral</h5>
                            <br>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Asimetris Wajah</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{ $fisik->asimetris_wajah }}"
                                        id="asimetris_wajah" name="asimetris_wajah" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Relasi Bibir</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{ $fisik->relasi_bibir }}"
                                        name="relasi_bibir" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Tonus Bibir</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{ $fisik->tonus_bibir }}"
                                        name="tonus_bibir" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">TMJ</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{ $fisik->tmj }}" name="tmj"
                                        id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Kelenjar Limfe</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{ $fisik->kelenjar_limfe }}"
                                        name="kelenjar_limfe" id="example-text-input" />
                                </div>
                            </div>
                            <br>
                            <h5>Pemeriksaan Intra Oral</h5>
                            <br>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Oklusi</label>
                                <div class="col-5">
                                    <select class="form-control" name="oklusi">
                                        @php
                                        $oklusi = array("Normal","Crossbite","Steep bite");
                                        @endphp
                                        @foreach ($oklusi as $item)
                                        @if ($item == $fisik->oklusi)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="{{ $fisik->ket_oklusi }}"
                                        name="ket_oklusi" placeholder="keterangan" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Torus Palatinus</label>
                                <div class="col-5">
                                    <select class="form-control" name="torus_palatinus">
                                        @php
                                        $torus = array("Tidak Ada","Kecil","Sedang","Multiple");
                                        @endphp
                                        @foreach ($torus as $item)
                                        @if ($item == $fisik->torus_palatinus)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif

                                        @endforeach

                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="ket_torus_palatinus"
                                        value="{{ $fisik->ket_torus_palatinus }}" placeholder="keterangan"
                                        id="example-text-input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Torus Mandibularis</label>
                                <div class="col-5">
                                    <select class="form-control" name="torus_mandibularis">
                                        @php
                                        $tm = array("Tidak Ada","Sisi Kiri","Sisi Kanan","Kedua Sisi");
                                        @endphp
                                        @foreach ($tm as $item)
                                        @if ($item == $fisik->torus_mandibularis)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="{{ $fisik->ket_torus_mandibularis }}"
                                        name="ket_torus_mandibularis" placeholder="keterangan"
                                        id="example-text-input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Palatum</label>
                                <div class="col-5">
                                    <select class="form-control" name="palatum">
                                        @php
                                        $palatum = array("Dalam","Sedang","Rendah");
                                        @endphp
                                        @foreach ($palatum as $item)
                                        @if ($item == $fisik->palatum)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="{{ $fisik->ket_palatum }}"
                                        name="ket_palatum" placeholder="keterangan" id="example-text-input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Diastema</label>
                                <div class="col-5">
                                    <select class="form-control" name="diastema">
                                        @php
                                        $diastema = array("Tidak ada","Ada");
                                        @endphp
                                        @foreach ($diastema as $item)
                                        @if ($item == $fisik->diastema)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="{{ $fisik->ket_diastema }}"
                                        name="ket_diastema" placeholder="keterangan" id="example-text-input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Gigi Anomali</label>
                                <div class="col-5">
                                    <select class="form-control" name="gigi_anomali">
                                        @php
                                        $anomali = array("Tidak ada","Ada");
                                        @endphp
                                        @foreach ($anomali as $item)
                                        @if ($item == $fisik->gigi_anomali)
                                        <option selected>{{$item}}</option>
                                        @else
                                        <option>{{$item}}</option>
                                        @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="{{ $fisik->ket_gigi_anomali }}"
                                        name="ket_gigi_anomali" placeholder="keterangan" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Lain-Lain</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="lain_lain">{{ $fisik->lain_lain }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Komplikasi pada tindakan dental medis
                                    sebelumnya</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="komplikasi">{{ $fisik->komplikasi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Anamnesa</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="anamnesa">{{ $fisik->anamnesa }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="Submit" name="Submit" class="btn btn-primary">Update Data</button>
                    </div>
        </form>
    </div>

</section>