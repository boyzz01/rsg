<div class="card-body">
    <h5>Pemeriksaan Ekstra Oral</h5>
    <br>

    <form action="{{ route('rm.update', 2) }}" method="post" name="form1" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $pm->id }}">
        <div class="form-group row">
            <label class="col-2 col-form-label">Asimetris Wajah</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $pm->asimetris_wajah }}" id="asimetris_wajah"
                    name="asimetris_wajah" id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Relasi Bibir</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $pm->relasi_bibir }}" name="relasi_bibir"
                    id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Tonus Bibir</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $pm->tonus_bibir }}" name="tonus_bibir"
                    id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">TMJ</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $pm->tmj }}" name="tmj"
                    id="example-text-input" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Kelenjar Limfe</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $pm->kelenjar_limfe }}" name="kelenjar_limfe"
                    id="example-text-input" />
            </div>
        </div>

        <button type="Submit" name="Submit" class="btn btn-primary mt-4 mb-2 float-right">Update</button>

    </form>


</div>
