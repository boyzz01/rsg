<div class="card-body">

    <h5>Pemeriksaan Intra Oral</h5>
    <br>
    <form action="{{ route('rm.update',3) }}" method="post" name="form1" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $pm->id }}">
        <div class="form-group row">
            <label class="col-2 col-form-label">Oklusi</label>
            <div class="col-5">
                <select class="form-control" disabled name="oklusi">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Normal","Crossbite","Steep bite");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $pm->oklusi)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" value="{{ $pm->ket_oklusi }}" name="ket_oklusi"
                    placeholder="keterangan" id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Torus Palatinus</label>
            <div class="col-5">
                <select class="form-control" disabled name="torus_palatinus">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $torus = array("Tidak Ada","Kecil","Sedang","Multiple");
                    @endphp
                    @foreach ($torus as $item)
                    @if ($item == $pm->torus_palatinus)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif

                    @endforeach

                </select>

            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" name="ket_torus_palatinus"
                    value="{{ $pm->ket_torus_palatinus }}" placeholder="keterangan" id="example-text-input" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Torus Mandibularis</label>
            <div class="col-5">
                <select class="form-control" disabled name="torus_mandibularis">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $tm = array("Tidak Ada","Sisi Kiri","Sisi Kanan","Kedua Sisi");
                    @endphp
                    @foreach ($tm as $item)
                    @if ($item == $pm->torus_mandibularis)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif

                    @endforeach

                </select>
            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" value="{{ $pm->ket_torus_mandibularis }}"
                    name="ket_torus_mandibularis" placeholder="keterangan" id="example-text-input" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Palatum</label>
            <div class="col-5">
                <select class="form-control" disabled name="palatum">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $palatum = array("Dalam","Sedang","Rendah");
                    @endphp
                    @foreach ($palatum as $item)
                    @if ($item == $pm->palatum)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" value="{{ $pm->ket_palatum }}" name="ket_palatum"
                    placeholder="keterangan" id="example-text-input" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Diastema</label>
            <div class="col-5">
                <select class="form-control" disabled name="diastema">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $diastema = array("Tidak ada","Ada");
                    @endphp
                    @foreach ($diastema as $item)
                    @if ($item == $pm->diastema)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" value="{{ $pm->ket_diastema }}" name="ket_diastema"
                    placeholder="keterangan" id="example-text-input" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Gigi Anomali</label>
            <div class="col-5">
                <select class="form-control" disabled name="gigi_anomali">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $anomali = array("Tidak ada","Ada");
                    @endphp
                    @foreach ($anomali as $item)
                    @if ($item == $pm->gigi_anomali)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
            <div class="col-5">
                <input class="form-control" disabled type="text" value="{{ $pm->ket_gigi_anomali }}"
                    name="ket_gigi_anomali" placeholder="keterangan" id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Lain-Lain</label>
            <div class="col-10">
                <textarea class="form-control" disabled name="lain_lain">{{ $pm->lain_lain }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Komplikasi pada tindakan dental medis
                sebelumnya</label>
            <div class="col-10">
                <textarea class="form-control" disabled name="komplikasi">{{ $pm->komplikasi }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Anamnesa</label>
            <div class="col-10">
                <textarea class="form-control" disabled name="anamnesa">{{ $pm->anamnesa }}</textarea>
            </div>
        </div>


    </form>
</div>