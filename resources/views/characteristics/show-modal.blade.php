<div class="modal fade" id="itemShowModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-neon-blue" id="exampleModalLabel">{{$item->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <button id="description-tab{{ $item->id }}" data-bs-target="#description-content{{ $item->id }}" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">
                            Description
                        </button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">

                    <div id="description-content{{ $item->id }}" aria-labelledby="description-tab{{ $item->id }}" class="tab-pane fade show active" role="tabpanel" tabindex="0">
                        <p class="item-description">{{$item->description}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
