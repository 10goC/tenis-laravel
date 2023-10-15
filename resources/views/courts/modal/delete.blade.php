<div class="modal fade" tabindex="-1" id="delete-court-modal-{{ $court->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete court</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete {{ $court->name }}?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('courts.destroy', $court->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete court</button>
                </form>
            </div>
        </div>
    </div>
</div>