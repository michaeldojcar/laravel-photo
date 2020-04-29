<div class="card">
    <div class="card-header">Přiřazené fotografie
        <a href="#"
           class="btn btn-success btn-sm float-right"
           data-toggle="modal"
           data-target="#exampleModal">Nahrát fotografii</a>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach($model->photos as $photo)
                <div class="col-4">
                    <img class="img-fluid img-thumbnail"
                         src="{{$photo->size(220, 220)}}">
                </div>
            @endforeach
        </div>
    </div>
</div>

<form action="{{route($action, $model)}}"
      enctype="multipart/form-data"
      method="POST">
    @csrf
    <div class="modal fade"
         id="exampleModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog"
             role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">Nahrávání fotky</h5>
                    <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Vyberte fotografii</label>
                        <input type="file"
                               name="photo"
                               class="form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">Storno
                    </button>
                    <input type="submit"
                           class="btn btn-primary"
                           value="Nahrát">
                </div>
            </div>
        </div>
    </div>
</form>
