<section>

    <div class="modal fade" id="addrm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="{{ url('/') }}/tambahodontogram" name="form1" autocomplete="off">
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="card-label">
                            Kondisi Gigi Pasien {{ $biodata->id }} ({{ $biodata->nama
                            }}) / Gigi : <span id=judulgigi></span>
                            <span class="text-muted pt-2 font-size-sm d-block"></span>
                        </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Pilih Kondisi Gigi</label>
                                <div class="col-10">
                                    <select class="form-control" name="kondisi" required>
                                        <option value="">Pilih Kondisi Gigi</option>
                                        @foreach ( $datagigi as $d )
                                        <option value="{{ $d->id}}">({{
                                            $d->singkatan }}) {{
                                            $d->kondisi }}</option>
                                        @endforeach


                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Anamnesa</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="anamnesa" value="" id="anamnesa"
                                        required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Tindakan</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="tindakan" value="" id="tindakan"
                                        required />
                                </div>
                            </div>
                            <input type="hidden" name="pemeriksa" value="{{ session()->get('nama') }}" />
                            <input type="hidden" name="gigi" id="gigiid" value="" />
                            <input type="hidden" name="id_pasien" value="{{ $biodata->id }}" />

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="Submit" name="Submit" class="btn btn-primary">Simpan Data</button>
                    </div>
        </form>
    </div>

</section>