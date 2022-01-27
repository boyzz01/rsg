<section>

    <div class="modal fade" id="caripasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cari Data Pasien
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-checkable table-hover" id="kt_datatable">
                        <thead>
                            <tr role="row">
                                <th>No</th>

                                <th style="width:5%">ID Pasien</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>

                                <th>Alamat</th>

                                <th>No HP</th>

                            </tr>
                        </thead>
                        <tbody>


                            @php
                            $nomor = 1;
                            @endphp
                            @foreach ($data as $d)
                            <tr role="row" id="tr{{$d->id}}">
                                <td style=" width:5%">{{ $nomor }}</td>

                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nama }}</td>

                                <td>{{ $d->jk }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->hp }}</td>



                            </tr>

                            @php
                            $nomor++;
                            @endphp
                            @endforeach




                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                </div>

            </div>

</section>