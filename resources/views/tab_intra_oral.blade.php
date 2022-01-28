<div class="card-body">

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
            <input class="form-control" type="text" value="" name="ket_oklusi" placeholder="keterangan"
                id="example-text-input" />
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
            <input class="form-control" type="text" name="ket_torus_palatinus" value="" placeholder="keterangan"
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
                <option>{{$item}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-5">
            <input class="form-control" type="text" value="" name="ket_torus_mandibularis" placeholder="keterangan"
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
                <option>{{$item}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-5">
            <input class="form-control" type="text" value="" name="ket_palatum" placeholder="keterangan"
                id="example-text-input" />
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
            <input class="form-control" type="text" value="" name="ket_diastema" placeholder="keterangan"
                id="example-text-input" />
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
            <input class="form-control" type="text" value="" name="ket_gigi_anomali" placeholder="keterangan"
                id="example-text-input" />
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