<div class="card">
    <div class="card-header">Přiřazené fotografie
        <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Nahrát fotografii</a>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach($model->photos as $photo)
                <div class="col-4">
                    <img class="img-thumbnail"
                         src="{{$photo->url()}}">
                </div>
            @endforeach
        </div>
    </div>
</div>

<form action="{{}}">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>
