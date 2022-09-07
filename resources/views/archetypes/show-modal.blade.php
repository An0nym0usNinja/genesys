<div class="modal fade" id="itemShowModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable max-w-600 align-items-start">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-neon-blue" id="exampleModalLabel">{{$item->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <button id="stats-tab{{ $item->id }}" data-bs-target="#stats-content{{ $item->id }}" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">
                            Stats
                        </button>

                        <button id="description-tab{{ $item->id }}" data-bs-target="#description-content{{ $item->id }}" class="nav-link"  data-bs-toggle="tab" type="button" role="tab" aria-selected="false">
                            Description
                        </button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">

                    <div id="stats-content{{ $item->id }}" aria-labelledby="stats-tab{{ $item->id }}" class="tab-pane fade show active item-description" role="tabpanel" tabindex="0">
                        <hr>
                        <div class="row text-center font-size-18">
                            <div class="col">{{$item->brawn}}</div>
                            <div class="col">{{$item->agility}}</div>
                            <div class="col">{{$item->intellect}}</div>
                            <div class="col">{{$item->cunning}}</div>
                            <div class="col">{{$item->willpower}}</div>
                            <div class="col">{{$item->presence}}</div>
                        </div>
                        <div class="row text-center font-size-14">
                            <div class="col">BRAWN</div>
                            <div class="col">AGILITY</div>
                            <div class="col">INTELLECT</div>
                            <div class="col">CUNNING</div>
                            <div class="col">WILLPOWER</div>
                            <div class="col">PRESENCE</div>
                        </div>
                        <hr>
                        <ul class="blue-dots">
                            <li><b>Wound Threshold:&nbsp;&nbsp;</b> {{$item->wound_threshold}}</li>
                            <li><b>Strain Threshold:&nbsp;&nbsp;</b> {{$item->strain_threshold}}</li>
                            <li><b>Starting Experience:&nbsp;&nbsp;</b> {{$item->starting_experience}}</li>
                            <li><b>Special Abilities:&nbsp;&nbsp;</b> {{$item->special_abilities}}</li>
                            @foreach ($item->otherAbilities as $ability => $ability_description)
                                <li><b>{{$ability}}&nbsp;&nbsp;</b> {{$ability_description}}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="description-content{{ $item->id }}" aria-labelledby="description-tab{{ $item->id }}" class="tab-pane fade"  role="tabpanel" tabindex="0">
                        <p class="item-description">{{$item->description}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
