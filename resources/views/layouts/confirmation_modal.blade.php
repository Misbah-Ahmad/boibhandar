<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $title }}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>{!! $message !!}</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">No</button>
                <button class="btn btn-primary btn-sm" type="button" onclick="{{ $callback .'()' }}">Yes</button>
            </div>
        </div>
    </div>
</div>