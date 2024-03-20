<section class="service-area section-padding-top" id="services-page">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">Our Services</h3>
                        {{-- <div class="desc">
                            {!! $portfolioTitle->sub_title !!}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 {{ $loop->index > 2 ? 'mt-4' : '' }}">
                    <div class="single-service">
                        <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->name }}</h3>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
