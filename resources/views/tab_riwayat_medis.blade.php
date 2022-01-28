<div class="card-body">
    <form action="{{ route('rm.update',1) }}" method="post" name="form1" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h5>Riwayat Medis</h5>
        <br>
        <div class="form-group row">
            <input type="hidden" name="id" value="{{ $rm->id }}">
            <label class="col-2 col-form-label">Golongan
                Darah</label>
            <div class="col-5">
                <select class="form-control" name="gol" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("A","B","AB","O");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->gol)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach



                </select>
            </div>
            <div class="col-5">
                <select class="form-control" name="res" id="tekanan">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("+","-");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->res)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Tekanan Darah</label>
            <div class="col-3">
                <input class="form-control" type="text" value="{{ $rm->td }}" placeholder=".../... mmHg" name="td"
                    id="example-text-input" />
            </div>
            <label class="col-2 col-form-label">mmHg</label>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Penyakit Jantung</label>
            <div class="col-5">
                <select class="form-control" name="pj" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->pj)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Asma</label>
            <div class="col-5">
                <select class="form-control" name="asma" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->asma)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Diabetes</label>
            <div class="col-5">
                <select class="form-control" name="diabetes" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->diabetes)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Haemopilia</label>
            <div class="col-5">
                <select class="form-control" name="haemo" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->haemo)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Hepatitis</label>
            <div class="col-5">
                <select class="form-control" name="hepa" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->hepa)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Gastritis</label>
            <div class="col-5">
                <select class="form-control" name="gas" id="gol">
                    <option value="" disabled selected>Pilih</option>
                    @php
                    $oklusi = array("Ada","Tidak Ada");
                    @endphp
                    @foreach ($oklusi as $item)
                    @if ($item == $rm->gas)
                    <option selected>{{$item}}</option>
                    @else
                    <option>{{$item}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Penyakit Lainnya</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $rm->pl }}" name="pl" id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Alergi Obat</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $rm->alergi_obat }}" name="alergi_obat"
                    id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Alergi Makanan</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $rm->alergi_makanan }}" name="alergi_makanan"
                    id="example-text-input" />
            </div>
        </div>

        <button type="Submit" name="Submit" class="btn btn-primary mt-4 mb-2 float-right">Simpan Riwayat Medis</button>
    </form>

</div>