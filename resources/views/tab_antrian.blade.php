<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    {{-- <span class="card-icon">
                        <i class="flaticon2-chat-1 text-primary"></i>
                    </span> --}}
                    <h3 class="card-label">
                        Cari Data Pasien Terdaftar

                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#caripasien">
                        <i class="flaticon-search"></i>Cari Pasien</a>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('antrian.store') }}" method="post" name="form1" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="form-group row">

                        <input type="hidden" name="status" value="1">
                        <input type="hidden" id="idc" name="id_pasien">
                        <label for="idpasiens" class="col-sm-3 col-form-label">No Rekam Medis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="idpasien" id="idpasienc" disabled="disabled"
                                required="" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row"><label for="nmpasien" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="disabled" placeholder=""
                                name="namapasien" id="namapasienc" />
                        </div>
                    </div>
                    <div class="form-group row"><label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="disabled" placeholder=""
                                id="alamatpasienc" />
                        </div>
                    </div>
                    <div class="form-group row"><label for="tgl" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" disabled="disabled" placeholder=""
                                value="{{ date('Y-m-d') }}" />

                        </div>
                    </div>
                    <div class="form-group row"><label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-9"><input type="time-local" class="form-control onlyread" name="waktu"
                                id="waktu" value="{{ date('H:i:s') }}" disabled="disabled" required=""
                                autocomplete="off">
                        </div>
                    </div>
                    <input type="hidden" name="mulai_antri" value="{{ date('Y-m-d H:i:s') }}">
                    <div class="form-group row"><label for="keluhan" class="col-sm-3 col-form-label">Keluhan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="keluhan" id="keluhan" rows="2" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="Submit" name="Submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <h6>Belum terdaftar di klinik ini? <a href="" data-toggle="modal" data-target="#modalAdd3">Klik
                        disini untuk mengisi biodata</a>.</h6>
            </div>

        </div>
    </div>
    <div class="col-lg-12 mb-4">
        <div class="card card-custom">
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label">Daftar Antrian Pasien
                        <span class="text-muted pt-2 font-size-sm d-block"></span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->

                    <!--end::Dropdown-->
                    <!--begin::Button-->

                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-checkable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Rekam Medis</th>
                            <th>Nama</th>
                            <th>Waktu</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>


                        @php
                            $nomor = 1;
                        @endphp
                        @foreach ($antrian as $d)
                            <tr id="tr{{ $d->id }}">
                                <td>{{ $nomor }}</td>
                                <td>{{ $d->id_pasien }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->mulai_antri }}</td>

                                <td nowrap="nowrap">
                                    @if ($d->status == '1')
                                        <span
                                            class="label label-lg font-weight-bold label-light-primary label-inline">Sedang
                                            Antri</span>
                                    @elseif ($d->status == '2')
                                        <span
                                            class="label label-lg font-weight-bold label-light-success label-inline">Dalam
                                            Pemeriksaan</span>
                                    @elseif ($d->status == '3')
                                        <span
                                            class="label label-lg font-weight-bold label-light-danger label-inline">Selesai
                                            Diperiksa</span>
                                    @endif
                                </td>
                            </tr>

                            @php
                                $nomor++;
                            @endphp
                        @endforeach




                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>

</div>
