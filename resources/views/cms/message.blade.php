@if (session('status'))
    <div class="row">
        <div class="col-sm-12">
            <div class="alert {{(session('style')) ? 'alert-'.session('style') : 'alert-success'}}">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span>{{ session('status') }}</span>
            </div>
        </div>
    </div>
@endif
