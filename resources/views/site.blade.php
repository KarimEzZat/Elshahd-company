@extends('layouts.front')

@section('content')
    <section class="about-area section-gap" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 about-right mb-lg-0 mb-4">
                    <!-- Section Title -->
                    <div class="section-title mb-50">
                        <h2>نبذة عنا</h2>
                    </div>
                    <div class="wow fadeIn" data-wow-duration=".8s"
                         style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                       <p>
                           {{ $companies->first()->description }}
                       </p>
                    </div>
                </div>

                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('Images/'.$companies->first()->photo) }}" alt="شركة الشهد لزل الفوم الحراري">
                </div>
            </div>
        </div>
    </section>

    <!-- Start Gallery Section -->
    <section class="gallery-area section-gap">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>أعمال تم تنفيذها</h2>
                        <p>هذه بعض الفيديوهات الخاصة بنا أثناء العمل يمكنك القاء نظرة عليها</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="video-list">
                        @foreach($videos as $video)
                            <div class="vid">
                                <video src="{{asset('Videos/'.$video->video)}}" controls muted></video>
                                <h5 class="title">{{ $video->title }}</h5>
                                <p class="description d-none">{{ $video->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main-video">
                        @if ($videos !== null)
                            <div class="video">
                                <video src="{{asset('Videos/'.$videos->first()->video)}}" controls></video>
                                <h3 class="title my-4">{{ $videos->first()->title }}</h3>
                                <p class="description">
                                    {{ $video->first()->description }}
                                </p>
                            </div>
                        @else
                            <h3>لا توجد فيديوهات في الوقت الحالي</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->
@endsection
