<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">Antrian Pasien
                <span class="text-muted pt-2 font-size-sm d-block"></span>
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->

            <!--end::Dropdown-->
            <!--begin::Button-->

        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Mulai Antri</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>


                @php
                $nomor = 1;

                @endphp
                @foreach ($antri as $d)
                <tr>

                    <td style="width:5%">{{ $nomor }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->mulai_antri }}</td>



                    <td nowrap="nowrap">
                        <form action="{{ route('dashboard.destroy', $d->id) }}" method="POST">

                            <a href=" ../../pasien/{{ $d->id }}" class="btn btn-sm btn-info btn-icon" title="Edit Data
                                Pasien">
                                <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown dropdown-inline">
                                <a href="javascript:;" class="btn btn-sm btn-success btn-icon" data-toggle="dropdown">
                                    <i class="la la-arrow-right"></i>
                                </a>

                            </div>



                        </form>
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