@extends('layouts.template')

@section('content')
<div class="pt-4">
    <h5 class="font-weight-bold">
        Recommended
    </h5>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <img src="{{asset('images/spnsbb.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/sponge.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <div>
                             <a href="{{route('watch.Spongebob-Squarepants')}}">
                            <h6 class="font-weight-bold">Spongebob Squarepants</h6>
                            </a>

                            <small class="text-muted">Spongebob</small>
                            <br>
                            <small class="text-muted">1m view . 1 day ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <img src="{{asset('images/bp.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/blekping.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">BLACKPINK - Kill This Love</h6>
                            <small class="text-muted">BLACKPINK</small>
                            <br>
                            <small class="text-muted">24m view . 1 day ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <img src="{{asset('images/imperfect.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/imperfect.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Imperfect</h6>
                            <small class="text-muted">Starvision</small>
                            <br>
                            <small class="text-muted">2m view . 1 day ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <img src="{{asset('images/stepput.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/stepput.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Stephanie Putri - I LOVE U 3000</h6>
                            <small class="text-muted">Stephanie</small>
                            <br>
                            <small class="text-muted">563k view . 2 day ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection