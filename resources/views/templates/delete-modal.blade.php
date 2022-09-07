<div class="modal fade" id="itemDeleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-neon-blue" id="exampleModalLabel">Are you sure you want to delete this item?
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                <form action="{{ route($route . '.destroy', $item->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
