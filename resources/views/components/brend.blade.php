    <!-- our brand area start -->
    <div class="rts-brand-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-one-wrapper">
                        <!-- Swiper -->
                        <div class="swiper brand-1">
                            <div class="swiper-wrapper">
                                @foreach ($clients as $client)
                                <div class="swiper-slide">
                                    <a href="{{$client->url}}"><img class="mt-dec-brand" src="/storage/{{$client->image}}" alt="{{$client->title}}"></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our brand area End -->