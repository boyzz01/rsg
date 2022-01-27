<section>

    <div class="modal fade" id="modalmasukkan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="{{ route('pasien.store') }}" method="post" name="form1" autocomplete="off">
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Input Data Dokter
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id='idadd' name="id">
                        <input type="hidden" id='tgl_kunjungan' name="tgl_kunjungan" value="{{ date('Y-m-d H:m:s') }}">

                        <div class="card-body">

                            <div class="form-group">
                                <label class="col-form-label">Dokter Pemeriksa</label>
                                <input type="text" class="form-control form-control-normal" name="dokter" id=""
                                    placeholder="Dokter Pemeriksa" required />
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="Submit" name="Submit" class="btn btn-primary">Masukkan</button>
                    </div>
        </form>
    </div>

</section>
