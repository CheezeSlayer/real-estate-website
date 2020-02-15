<div class="modal fade" id="modal-delete-confirm" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h3 class="modal-title" id="modal-title">Delete Home Entry?</h3>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h5>Are you sure you want to delete this home entry?</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <form action="/admin/home/{{ $home->id }}/delete" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="float-right btn btn btn-danger m-2">Delete</button>
                </form>
                <button type="button" class="btn btn btn-secondary" aria-label="Close" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
