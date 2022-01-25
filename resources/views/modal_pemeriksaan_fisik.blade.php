<section>

    <div class="modal fade" id="modalFisik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="{{ route('fisik.store') }}" method="post" name="form1" autocomplete="off">
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Pemeriksaan Fisik Pasien {{ $biodata->nama
                            }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id='id_pasien' name="id_pasien" value="{{ $biodata->id }}">
                        <input type="hidden" id='tgl' name="tgl" value="{{ date('Y-m-d H:m:s') }}">
                        <input type="hidden" id='dokter' name="dokter" value="{{ session()->get('nama') }}">
                        <div class="card-body">
                            <h5>Pemeriksaan Ekstra Oral</h5>
                            <br>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Asimetris Wajah</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="asimetris_wajah"
                                        name="asimetris_wajah" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Relasi Bibir</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" name="relasi_bibir"
                                        id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Tonus Bibir</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" name="tonus_bibir"
                                        id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">TMJ</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" name="tmj"
                                        id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Kelenjar Limfe</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" name="kelenjar_limfe"
                                        id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="" name="ket_oklusi"
                                        placeholder="keterangan" id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="ket_torus_palatinus" value=""
                                        placeholder="keterangan" id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="" name="ket_torus_mandibularis"
                                        placeholder="keterangan" id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="" name="ket_palatum"
                                        placeholder="keterangan" id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="" name="ket_diastema"
                                        placeholder="keterangan" id="example-text-input" />
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
                                        <option>{{$item}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" value="" name="ket_gigi_anomali"
                                        placeholder="keterangan" id="example-text-input" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Lain-Lain</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="lain_lain"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Komplikasi pada tindakan dental medis
                                    sebelumnya</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="komplikasi"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Anamnesa</label>
                                <div class="col-10">
                                    <textarea class="form-control" name="anamnesa"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="Submit" name="Submit" class="btn btn-primary">Simpan Data</button>
                    </div>
        </form>
    </div>

</section>