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
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                {{--
                @php
                $nomor = 1;
                @endphp
                @foreach ($data as $d)
                <tr>
                    <td style="width:5%">{{ $nomor }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->tgl_kunjungan }}</td>
                    <td>{{ $d->jk }}</td>
                    <td>{{ $d->hp }}</td>
                    <td>{{ $d->alamat }}</td>

                    <td nowrap="nowrap">
                        <form action="{{ route('dashboard.destroy', $d->id) }}" method="POST">
                            <div class="dropdown dropdown-inline">
                                <a href="javascript:;" class="btn btn-sm btn-success btn-icon" data-toggle="dropdown">
                                    <i class="la la-cog"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                    <ul class="nav nav-hoverable flex-column">
                                        <li class="nav-item"><a class="nav-link" href="#"><i
                                                    class="nav-icon la la-edit"></i><span class="nav-text">Edit
                                                    Details</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"><i
                                                    class="nav-icon la la-leaf"></i><span class="nav-text">Update
                                                    Status</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"><i
                                                    class="nav-icon la la-print"></i><span
                                                    class="nav-text">Print</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:;" class="btn btn-sm btn-info btn-icon" title="Edit details">
                                <i class="la la-edit"></i>
                            </a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                    class="la la-trash">
                                </i>

                        </form>
                    </td>
                </tr>

                @php
                $nomor++;
                @endphp
                @endforeach --}}




            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>