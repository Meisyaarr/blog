@extends('layouts.template')

@section('content')
    <div class="row pyt-4">
        <!-- posisi image dan komen -->
        <div class="col-md-8">
        <!-- posisi image pembuka -->
        <img src="{{asset('images/sponge.jpg')}}" class="rounded" width="100%" height="100%" alt="">
        <!-- penutup image -->
        <!-- posisi title -->
        <div class="py-4 pt-4">
                <a href="http://">
                    #Spongebob #BikiniBottom #GTV
                </a>
                <h4>
                    Spongebob - Spongebob Squarepants
                </h4>
            </div>
            <!-- penutup title  -->
            <!-- posisi informasi -->
            <div class="d-flex">
                <div class="mr-auto">
                    <p>55,899,456 view - Jun 23, 2020</p>
                    </div> 
                    <div class="d-flex justify-content-center">
                        <p class="mr-3">147k</p>
                        <p class="mr-3">7.3k</p>
                        <p class="mr-3">SHARE</p>
                        <p>SAVE</p>
                    </div>
                </div>
                <!-- penutup informasi -->
            </div>
                <!-- posisi up next -->
            <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-auto">
                                <h6 class="font-weight-bold">Up Next</h6>
                            </div>
                        <!-- <div class="">
                            <div class="custom-control custom-switch">
                                <label for="customSwitch1" class="custom-control-label">
                                    Autoplay
                                </label>
                                <input type="checkbox" class="custom-control-input" name="" id="customSwitch1">
                            </div> -->
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                                <span class="absolute-no">NO</span>
                            </label>
                            <!-- <input type="checkbox" class="custom-control-input" checkade="" name="" id="">
                                <span class="slider round"></span>
                                <span class="absoluter"></span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection