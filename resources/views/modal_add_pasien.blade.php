<section>

    @include('alert')
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <form action="{{ route('dashboard.store') }}" method="post" name="form1" autocomplete="off">
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Silahkan Mengisi Data Variable
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id='id' name="id">
                        <input type="hidden" id='tgl_kunjungan' name="tgl_kunjungan" value="{{ date('Y-m-d H:m:s') }}">

                        <div class="card-body">

                            <div class="form-group">
                                <label class="col-form-label">Nama Pasien</label>
                                <input type="text" class="form-control form-control-normal" name="nama" id="nikpeserta"
                                    placeholder="Nama Pasien" required />
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Alamat</label>
                                <input type="text" class="form-control form-control-normal" name="alamat"
                                    id="nikpeserta" placeholder="Alamat" required />
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Nomor HP</label>
                                <input type="text" class="form-control form-control-normal" name="hp" id="nikpeserta"
                                    placeholder="Nomor HP" required />
                            </div>




                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <fieldset id="group1">
                                    <input type="radio" value="Laki-Laki" name="jk" id="pria" required> <label
                                        for="pria">Laki-Laki</label>
                                    <input type="radio" value="Perempuan" name="jk" id="wanita"
                                        style="margin-left:20px"> <label for="wanita">Perempuan</label>
                                </fieldset>
                            </div>


                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea style="text-transform: capitalize;" class="form-control" rows="3"
                                    name="keterangan" id="keterangan"
                                    placeholder="Masukkan Keterangan Jika Ada"></textarea>
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