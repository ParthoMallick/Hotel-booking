@extends('frontend.master_header_footer.frontend_masterpage')
@section('room-details')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

<!-- main start -->
<main class="">
    <!-- room details hero start -->
    <section class="room-grid-hero py-5">
        <div class="container py-5 room-grid-hero-content">
            <div class="d-flex align-items-center justify-content-center room-grid-hero-content-bg-text">
                <h2 class="text-light">Room</h2>
            </div>
            <div class="row">
                <div
                    class="d-flex flex-column align-items-center justify-content-center room-grid-hero-content-left">
                    <h3 class="text-light">Room Details</h3>
                    <div class="d-flex align-items-center">
                        <h5 class="text-warning mb-0">Home</h5>
                        <i class="fa fa-angle-double-right text-light px-3"></i>
                        <h5 class="text-light mb-0">Room Details</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room details hero end -->
    <!-- room full details start-->
    <section class="room-full-details my-5">
        <div class="container py-5 room-full-details-content">
            <div class="row">
                <div class="col-8 room-full-details-content-left">
                    <div class="row room-full-details-content-left-upper-part">
                        <img src="{{asset('storage/room-images/'.$rooms->image)}}" alt="room details image">
                        <div class="image-top-right-text">
                            <p>{{ $rooms->price->nightly }}</p>
                        </div>
                        <div>
                            <button type="button"
                                    class="btn btn-warning room-full-details-content-right-upper-part-btn">Guest
                                House</button>
                        </div>
                    </div>
                    <div class="row room-full-details-content-left-middle-part">
                        <h2>
                            {{$rooms->title}}
                        </h2>
                        <ul class="d-flex">
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                {{$rooms->beds}}
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                {{$rooms->baths}}
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                {{$rooms->room_size}}
                            </li>
                        </ul>
                        <p>
                            {{$rooms->description}}
                        </p>
                        <img src="{{asset('storage/room-images/'.$rooms->image)}}" alt="room image">
                    </div>


                    <div class="row gy-4 room-full-details-content-left-last-part">
                        <div class="col-8 col-md-5 room-full-details-content-left-last-part-first-colum">
                            <h4>
                                Pricing Plan
                            </h4>
                            <ul>

                                    <li>
                                        <span>Nightly:</span>
                                        <strong> {{$pricing->nightly}}</strong>
                                    </li>


                                <li>
                                    <span>Weekends (Sat_sun):</span>
                                    <strong> {{$pricing->weekend}}</strong>
                                </li>
                                <li>
                                    <span>Weekly (7d+)</span>
                                    <strong> {{$pricing->weekly}}</strong>
                                </li>
                                <li>
                                    <span>Monthly (30d+):</span>
                                    <strong>{{$pricing->monthly}} </strong>
                                </li>
                                <li>
                                    <span>Sequrity Deposit:</span>
                                    <strong> {{$pricing->security_deposit}}</strong>
                                </li>
                                <li>
                                    <span>Additional Guests:</span>
                                    @if($pricing->additional_guest_allow===1)
                                        <strong> yes </strong>
                                    @else
                                        <strong>No</strong>
                                    @endif

                                </li>
                                <li>
                                    <span>Additional Guests:</span>
                                    <strong>{{$pricing->additional_guest_cost}}</strong>
                                </li>
                                <li>
                                    <span>Cleaning Fee:</span>
                                    <strong> {{$pricing->cleaning_fee}}</strong>
                                </li>

                                <li>
                                    <span>City Fee:</span>
                                    <strong>{{$pricing->city_fee}}</strong>
                                </li>
                                <li>
                                    <span>Minimum Number of Days:</span>
                                    <strong class="ps-1">{{$pricing->minimum_number_of_days}}</strong>
                                </li>
                                <li>
                                    <span>Maximum Number of Days:</span>
                                    <strong class="ps-1">{{$pricing->maximum_number_of_days}}</strong>
                                </li>
                            </ul>
                        </div>



                        <div class="col-4 col-md-3 room-full-details-content-left-last-part-middle-colum">
                            <h4>
                                Features
                            </h4>
                            <ul>
                                @foreach($allFeatures as $name)
                                    <li>
                                        {{$name->name}}
                                    </li>
                                @endforeach


                            </ul>
                            <h4 class="mt-4">
                                Facilities
                            </h4>
                            <ul>
                                @foreach($allFacilities as $name)
                                    <li>
                                        {{$name->name}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-4 room-full-details-content-right">
                    <div class="room-full-details-content-right-upper-part">
                        <h4>{{ $rooms->price->nightly }} <span>Night</span></h4>

                        <form action="{{route('room.booking.list')}}" method="post" class="room-full-details-content-right-form">
                            @csrf
                            <input type="hidden" name="room_id" value="{{$rooms->id}}">
                            <input type="hidden" name="per_day_cost" value="{{$rooms->price->nightly}}">

                            <div class="room-full-details-content-right-form-input-with-icon">
                                <input type="date" name="arrive_date" class="form-control rounded-1" placeholder="Arrive Date"
                                       aria-label="Arrive Date">
                                <i class="fa fa-calendar"></i>
                            </div>


                            <div class="room-full-details-content-right-form-input-with-icon">
                                <input type="date" name="depart_date" class="form-control rounded-1" placeholder="Depart Date"
                                       aria-label="Depart Date">
                                <i class="fa fa-calendar"></i>
                            </div>


                            <div class="room-full-details-content-right-form-input-with-icon">
                                <input type="text" name="guests" class="form-control rounded-1" placeholder="Guests"
                                       aria-label="Guests">
                                <i class="fa fa-chevron-down"></i>
                            </div>


                            <div class="room-full-details-content-right-form-input-with-icon">
                                <input type="text" name="child" class="form-control rounded-1" placeholder="Child"
                                       aria-label="Location">
                                <i class="fa fa-chevron-down"></i>
                            </div>


                            <div class="">
                                <button type="submit"
                                        class="btn w-100 btn-warning text-light fw-semibold rounded-1 py-2">Book
                                    Now
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="room-full-details-content-right-middle-part
                        ">
                        <h4>Category </h4>
                        <div class="room-full-details-content-right-middle-part-image-part">
                            @foreach($roomCategory as $item)
                                <div class="room-details-category-content">
                                    <a href="{{ route('roomList', $item->id) }}" class="room-details-category">
                                        <img src="{{asset('storage/room_category-images/'.$item->image)}}" class="card-img-top" alt="...">
                                        <p>{{$item->name   }}</p>
                                    </a>
                                </div>
                            @endforeach


                        </div>

                    </div>
                    <div class="room-full-details-content-right-last-part">
                        <img class="img-fluid" src="{{asset('frontend')}}/images/our-project-1.jpg" alt="Category image">
                        <div class="room-full-details-content-right-last-part-text-content">
                            <h3>
                                Booking Your Latest Appertment
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, velit numquam iure
                                deleniti nihil perspiciatis.
                            </p>
                            <div class="">
                                <button type="submit" class="btn btn-warning text-light fw-semibold rounded-1 ">Book
                                    Now
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room full details end-->
    <!-- latest product start -->
    <section class="room-details-latest-product">
        <div class="container">
            <p class="text-warning text-center mx">Latest Product</p>
            <h2 class="text-center fw-bold">Explore Latest Product</h2>

            <!-- room details card start -->
            <div class="room-grid-card my-5">
                <div class="py-5 latest-product-testimonial-slider-content-right">
                    <div class="row row-cols-2 row-cols-md-3 g-4">
                        <a href="javascript:void(0)" class="col latest-product-single-card ">
                            <div class="card border-0  shadow-lg">
                                <img src="./assets/images/footer-image-1st.jpg" class="card-img-top"
                                     alt="card image">
                                <div class="card-body pb-5">
                                    <button type="button"
                                            class="btn btn-warning latest-product-single-card-upper-button">Guest
                                        House</button>
                                    <h5 class="card-title">Modern Guest Rooms</h5>
                                    <p class="card-text">This is a longer card with supporting text
                                        below as a natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <ul class="d-flex latest-product-single-card-icon">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            3 Bed
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                    </ul>
                                    <button type="button"
                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">$180.00</button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="col latest-product-single-card">
                            <div class="card border-0 h-100 shadow-lg">
                                <img src="./assets/images/our-project-2.jpg" class="card-img-top" alt="card image">
                                <div class="card-body pb-5">
                                    <button type="button"
                                            class="btn btn-warning latest-product-single-card-upper-button">Meeting
                                        Room</button>
                                    <h5 class="card-title">Conference Room</h5>
                                    <p class="card-text">This is a longer card with supporting text
                                        below as a natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <ul class="d-flex latest-product-single-card-icon">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            3 Bed
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                    </ul>
                                    <button type="button"
                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">$205.00</button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="col latest-product-single-card">
                            <div class="card border-0 h-100 shadow-lg">
                                <img src="./assets/images/our-project-48.jpg" class="card-img-top" alt="card image">
                                <div class="card-body pb-5">
                                    <button type="button"
                                            class="btn btn-warning latest-product-single-card-upper-button">Guest
                                        House</button>
                                    <h5 class="card-title">Deluxe Couple Room</h5>
                                    <p class="card-text">This is a longer card with supporting text
                                        below as a natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <ul class="d-flex latest-product-single-card-icon">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            3 Bed
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            2 Baths
                                        </li>
                                    </ul>
                                    <button type="button"
                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">$199.00</button>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
            <!-- room details card end -->
        </div>
    </section>
    <!-- latest product end -->
    <!-- hotel-logo-collection start -->
    <section class="our-staff-hotel-logo-collection py-5 ">
        <div class="container py-5">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-6 g-5">
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0"
                         viewBox="0 0 540.52 540.519" style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="">
                            <g>
                                <path
                                    d="M127.76 448.919h-16.636l-5.129-15.812c-1.767-5.461-4.658-5.461-6.427 0l-5.146 15.812h-16.62c-5.754 0-6.636 2.749-1.986 6.118l13.448 9.769-5.147 15.816c-1.767 5.475.562 7.159 5.201 3.79l13.448-9.782 13.467 9.782c4.642 3.369 6.968 1.671 5.185-3.79l-5.131-15.816 13.448-9.769c4.652-3.378 3.765-6.118-1.975-6.118zM437.379 465.665h-16.62l-5.143-15.821c-1.77-5.451-4.658-5.451-6.427 0l-5.129 15.821h-16.643c-5.731 0-6.613 2.74-1.979 6.109l13.446 9.777-5.129 15.808c-1.788 5.475.555 7.159 5.185 3.79l13.465-9.782 13.445 9.782c4.644 3.369 6.982 1.68 5.19-3.79l-5.134-15.808 13.45-9.777c4.655-3.369 3.782-6.109-1.977-6.109zM285.147 503.295h-16.622l-5.148-15.812c-1.766-5.466-4.639-5.466-6.426 0l-5.127 15.812h-16.638c-5.736 0-6.618 2.744-1.986 6.119l13.448 9.768-5.129 15.812c-1.767 5.475.542 7.159 5.201 3.789l13.448-9.777 13.448 9.777c4.656 3.37 6.971 1.676 5.202-3.789l-5.147-15.812 13.45-9.768c4.663-3.378 3.776-6.119-1.974-6.119z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M35.9 279.388c19.646 111.59 117.228 196.671 234.357 196.671 115.634 0 212.238-82.902 233.589-192.382.099-.43.168-.845.229-1.256 2.729-14.398 4.214-29.225 4.214-44.393C508.29 106.781 401.512 0 270.257 0 139.007 0 32.229 106.781 32.229 238.028c0 13.775 1.241 27.267 3.486 40.408.064.303.122.63.185.952zM145.254 397.39c-36.751-28.894-63.328-70.184-73.299-117.54l63.157-90.122c10.142-3.208 22.563-3.862 31.181 6.903 6.238 7.803 14.321 11.917 23.364 11.917h.354c13.077-.151 25.771-8.944 34.949-17.336l10.625 13.605-113.28 108.664c-11.917 12.27-8.917 23.699-7.078 28.054s7.965 14.463 25.064 14.463h4.961v41.392h.002zm3.585-227.244 28.25-40.312 36.938 47.353c-7.225 6.797-16.478 13.6-24.234 13.69-2.317-.009-5.871-.497-9.714-5.283-8.864-11.092-20.046-15.18-31.24-15.448zm196.099 150.499v105.742a203.456 203.456 0 0 1-28.581 8.965v-44.804h-39.772v49.989c-2.105.079-4.198.168-6.319.168-6.462 0-12.851-.336-19.147-.934v-49.224h-39.775v41.383a200.381 200.381 0 0 1-30.729-12.209v-99.077h-14.729l98.443-94.425 66.907 68.909V236.09h11.435v70.81l13.348 13.759h-11.08v-.014zm35.362 87.456v-52.104h.052c17.1 0 23.219-10.104 25.071-14.463 1.834-4.35 4.826-15.784-7.085-28.054l-20.315-20.923v-61.454c0-16.748-13.628-30.375-30.373-30.375h-21.38c-10.268 0-19.35 5.11-24.848 12.93l-3.879-3.977 22.412-28.691c9.344-2.193 19.909-1.605 27.517 7.899 6.235 7.806 14.323 11.929 23.363 11.929h.354c10.655-.126 21.063-6 29.524-12.708l66.978 95.617c-12.022 51.899-43.992 96.199-87.391 124.374zm-46.073-245.407 25.664-32.852 30.64 43.745c-6.553 5.328-13.665 9.495-19.573 9.567-2.077.103-5.853-.487-9.698-5.292-7.739-9.695-17.283-14.027-27.033-15.168zm-63.962-127.35c108.836 0 197.884 86.236 202.467 193.966l-85.51-122.067c-6.44-9.199-16.051-14.617-26.388-14.881-10.516-.254-20.228 4.66-27.135 13.501l-65.236 83.618-65.223-83.618c-6.923-8.851-16.729-13.789-27.129-13.501-10.342.264-19.966 5.682-26.411 14.89L68.152 223.656c7.392-105.074 95.187-188.312 202.113-188.312z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path d="M211.343 323.165h39.775v57.093h-39.775zM276.584 323.165h39.772v57.093h-39.772z"
                                      fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="">
                            <g>
                                <path
                                    d="M216 320h16v16h-16zM248 320h16v16h-16zM280 320h16v16h-16zM216 352h16v16h-16zM248 352h16v16h-16zM280 352h16v16h-16zM216 384h16v16h-16zM248 384h16v16h-16zM280 384h16v16h-16zM216 256h16v16h-16zM248 256h16v16h-16zM280 256h16v16h-16zM216 288h16v16h-16zM248 288h16v16h-16zM280 288h16v16h-16zM177.869 82.44l33.264 32.424-7.853 45.783a8 8 0 0 0 11.608 8.434L256 147.465l41.116 21.616a8 8 0 0 0 11.608-8.434l-7.853-45.783 33.268-32.424a8 8 0 0 0-4.434-13.646l-45.969-6.679-20.558-41.656a8 8 0 0 0-14.348 0l-20.558 41.656-45.972 6.679a8 8 0 0 0-4.434 13.646zm56.866-5.1a8 8 0 0 0 6.023-4.377L256 42.077l15.246 30.89a8 8 0 0 0 6.023 4.377l34.09 4.953-24.659 24.046a8 8 0 0 0-2.3 7.081l5.823 33.952-30.491-16.03a8 8 0 0 0-7.446 0l-30.491 16.03 5.823-33.952a8 8 0 0 0-2.3-7.081L200.645 82.3zM328.392 146.092a8 8 0 0 0 2.024 8.2l22.151 21.592-5.229 30.489a8 8 0 0 0 11.608 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.607-8.434l-5.23-30.489 22.152-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.446-13.691-27.741a8 8 0 0 0-14.347 0L365.462 136.2l-30.612 4.448a8 8 0 0 0-6.458 5.444zm43.533 5.336a8 8 0 0 0 6.024-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.023 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8 8 0 0 0-7.445 0l-16.756 8.81 3.2-18.658a8 8 0 0 0-2.3-7.081l-13.557-13.214zM417.822 233.159a8 8 0 0 0-4.433 13.645l14.245 13.886-3.363 19.61a8 8 0 0 0 11.607 8.434l17.608-9.257 17.608 9.257A8 8 0 0 0 482.7 280.3l-3.363-19.606 14.247-13.894a8 8 0 0 0-4.434-13.645l-19.686-2.855-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839zM450 241.151l3.491-7.074 3.492 7.074a8 8 0 0 0 6.017 4.376l7.807 1.135-5.649 5.506a8 8 0 0 0-2.3 7.082l1.334 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.333-7.775a8 8 0 0 0-2.3-7.082l-5.648-5.506 7.807-1.135a8 8 0 0 0 6.027-4.376zM69.763 154.293l22.152 21.592-5.23 30.489a8 8 0 0 0 11.607 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.608-8.434l-5.229-30.489 22.151-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.447-13.691-27.74a8 8 0 0 0-14.347 0l-13.691 27.74-30.609 4.447a8 8 0 0 0-4.434 13.646zm41.509-2.865a8 8 0 0 0 6.023-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.024 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8.006 8.006 0 0 0-7.445 0L105.2 193.1l3.2-18.658a8 8 0 0 0-2.3-7.081L92.539 154.15zM18.416 246.8l14.245 13.89L29.3 280.3a8 8 0 0 0 11.608 8.434l17.608-9.257 17.608 9.257a8 8 0 0 0 11.605-8.434l-3.363-19.61 14.245-13.89a8 8 0 0 0-4.433-13.645L74.491 230.3l-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839-19.693 2.859a8 8 0 0 0-4.434 13.641zM49 245.527a8 8 0 0 0 6.023-4.376l3.492-7.074 3.491 7.074a8 8 0 0 0 6.023 4.376l7.807 1.135-5.648 5.506a8 8 0 0 0-2.3 7.082l1.333 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.334-7.775a8 8 0 0 0-2.3-7.082l-5.649-5.506zM144 288h24v16h-24zM144 328h24v16h-24zM144 368h24v16h-24zM144 408h24v16h-24z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M464 392h-16a32.036 32.036 0 0 0-32 32v16.474a37.8 37.8 0 0 0-16 6.558V408h-16v40h-56V264h56v128h16V256a8 8 0 0 0-8-8h-64v-40a8 8 0 0 0-8-8h-24v-16a8 8 0 0 0-8-8h-64a8 8 0 0 0-8 8v16h-24a8 8 0 0 0-8 8v40h-64a8 8 0 0 0-8 8v48h16v-40h56v184h-56V320h-16v127.032a37.8 37.8 0 0 0-16-6.558V424a32.036 32.036 0 0 0-32-32H48a32.036 32.036 0 0 0-32 32v64a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-64a32.036 32.036 0 0 0-32-32zM232 192h48v32h-48zM32 424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16v16.474A38.061 38.061 0 0 0 48 478v2H32zm32 56v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm64-16h56v16h-56zm72-248h16v16a8 8 0 0 0 8 8h64a8 8 0 0 0 8-8v-16h16v264h-24v-56a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8v56h-24zm40 264v-48h32v48zm88-16h56v16h-56zm72 16v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm80 0h-16v-2a38.061 38.061 0 0 0-32-37.526V424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path d="M344 368h24v16h-24zM344 408h24v16h-24zM344 288h24v16h-24zM344 328h24v16h-24z"
                                      fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0" viewBox="0 0 64 64"
                         style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="m28.558 7.098-.47 2.74a1 1 0 0 0 1.45 1.053L32 9.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4L32.897.558a1.04 1.04 0 0 0-1.793 0L29.873 3.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L32 3.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM42.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L46 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0L43.873 8.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L46 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM54.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L58 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0l-1.231 2.493-2.752.4a1 1 0 0 0-.554 1.706Zm2.123-2.144a.998.998 0 0 0 .752-.547L58 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM14.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L18 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L18 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM2.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L6 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L6 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M63 62h-1V29h1a1 1 0 0 0 0-2H45v-8a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v8H1a1 1 0 0 0 0 2h1v33H1a1 1 0 0 0 0 2h62a1 1 0 0 0 0-2ZM4 29h15v33H4Zm17-9h22v42h-5V50a1 1 0 0 0-1-1H27a1 1 0 0 0-1 1v12h-5Zm7 33v-2h8v2Zm0 2h3v7h-3Zm5 7v-7h3v7Zm12 0V29h15v33Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M30 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM27 48a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm-3-4h2v2h-2ZM30 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM51 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM23 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM17 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 32H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 39H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 46H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 53H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0"
                         viewBox="0 0 540.52 540.519" style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="">
                            <g>
                                <path
                                    d="M127.76 448.919h-16.636l-5.129-15.812c-1.767-5.461-4.658-5.461-6.427 0l-5.146 15.812h-16.62c-5.754 0-6.636 2.749-1.986 6.118l13.448 9.769-5.147 15.816c-1.767 5.475.562 7.159 5.201 3.79l13.448-9.782 13.467 9.782c4.642 3.369 6.968 1.671 5.185-3.79l-5.131-15.816 13.448-9.769c4.652-3.378 3.765-6.118-1.975-6.118zM437.379 465.665h-16.62l-5.143-15.821c-1.77-5.451-4.658-5.451-6.427 0l-5.129 15.821h-16.643c-5.731 0-6.613 2.74-1.979 6.109l13.446 9.777-5.129 15.808c-1.788 5.475.555 7.159 5.185 3.79l13.465-9.782 13.445 9.782c4.644 3.369 6.982 1.68 5.19-3.79l-5.134-15.808 13.45-9.777c4.655-3.369 3.782-6.109-1.977-6.109zM285.147 503.295h-16.622l-5.148-15.812c-1.766-5.466-4.639-5.466-6.426 0l-5.127 15.812h-16.638c-5.736 0-6.618 2.744-1.986 6.119l13.448 9.768-5.129 15.812c-1.767 5.475.542 7.159 5.201 3.789l13.448-9.777 13.448 9.777c4.656 3.37 6.971 1.676 5.202-3.789l-5.147-15.812 13.45-9.768c4.663-3.378 3.776-6.119-1.974-6.119z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M35.9 279.388c19.646 111.59 117.228 196.671 234.357 196.671 115.634 0 212.238-82.902 233.589-192.382.099-.43.168-.845.229-1.256 2.729-14.398 4.214-29.225 4.214-44.393C508.29 106.781 401.512 0 270.257 0 139.007 0 32.229 106.781 32.229 238.028c0 13.775 1.241 27.267 3.486 40.408.064.303.122.63.185.952zM145.254 397.39c-36.751-28.894-63.328-70.184-73.299-117.54l63.157-90.122c10.142-3.208 22.563-3.862 31.181 6.903 6.238 7.803 14.321 11.917 23.364 11.917h.354c13.077-.151 25.771-8.944 34.949-17.336l10.625 13.605-113.28 108.664c-11.917 12.27-8.917 23.699-7.078 28.054s7.965 14.463 25.064 14.463h4.961v41.392h.002zm3.585-227.244 28.25-40.312 36.938 47.353c-7.225 6.797-16.478 13.6-24.234 13.69-2.317-.009-5.871-.497-9.714-5.283-8.864-11.092-20.046-15.18-31.24-15.448zm196.099 150.499v105.742a203.456 203.456 0 0 1-28.581 8.965v-44.804h-39.772v49.989c-2.105.079-4.198.168-6.319.168-6.462 0-12.851-.336-19.147-.934v-49.224h-39.775v41.383a200.381 200.381 0 0 1-30.729-12.209v-99.077h-14.729l98.443-94.425 66.907 68.909V236.09h11.435v70.81l13.348 13.759h-11.08v-.014zm35.362 87.456v-52.104h.052c17.1 0 23.219-10.104 25.071-14.463 1.834-4.35 4.826-15.784-7.085-28.054l-20.315-20.923v-61.454c0-16.748-13.628-30.375-30.373-30.375h-21.38c-10.268 0-19.35 5.11-24.848 12.93l-3.879-3.977 22.412-28.691c9.344-2.193 19.909-1.605 27.517 7.899 6.235 7.806 14.323 11.929 23.363 11.929h.354c10.655-.126 21.063-6 29.524-12.708l66.978 95.617c-12.022 51.899-43.992 96.199-87.391 124.374zm-46.073-245.407 25.664-32.852 30.64 43.745c-6.553 5.328-13.665 9.495-19.573 9.567-2.077.103-5.853-.487-9.698-5.292-7.739-9.695-17.283-14.027-27.033-15.168zm-63.962-127.35c108.836 0 197.884 86.236 202.467 193.966l-85.51-122.067c-6.44-9.199-16.051-14.617-26.388-14.881-10.516-.254-20.228 4.66-27.135 13.501l-65.236 83.618-65.223-83.618c-6.923-8.851-16.729-13.789-27.129-13.501-10.342.264-19.966 5.682-26.411 14.89L68.152 223.656c7.392-105.074 95.187-188.312 202.113-188.312z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path d="M211.343 323.165h39.775v57.093h-39.775zM276.584 323.165h39.772v57.093h-39.772z"
                                      fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="">
                            <g>
                                <path
                                    d="M216 320h16v16h-16zM248 320h16v16h-16zM280 320h16v16h-16zM216 352h16v16h-16zM248 352h16v16h-16zM280 352h16v16h-16zM216 384h16v16h-16zM248 384h16v16h-16zM280 384h16v16h-16zM216 256h16v16h-16zM248 256h16v16h-16zM280 256h16v16h-16zM216 288h16v16h-16zM248 288h16v16h-16zM280 288h16v16h-16zM177.869 82.44l33.264 32.424-7.853 45.783a8 8 0 0 0 11.608 8.434L256 147.465l41.116 21.616a8 8 0 0 0 11.608-8.434l-7.853-45.783 33.268-32.424a8 8 0 0 0-4.434-13.646l-45.969-6.679-20.558-41.656a8 8 0 0 0-14.348 0l-20.558 41.656-45.972 6.679a8 8 0 0 0-4.434 13.646zm56.866-5.1a8 8 0 0 0 6.023-4.377L256 42.077l15.246 30.89a8 8 0 0 0 6.023 4.377l34.09 4.953-24.659 24.046a8 8 0 0 0-2.3 7.081l5.823 33.952-30.491-16.03a8 8 0 0 0-7.446 0l-30.491 16.03 5.823-33.952a8 8 0 0 0-2.3-7.081L200.645 82.3zM328.392 146.092a8 8 0 0 0 2.024 8.2l22.151 21.592-5.229 30.489a8 8 0 0 0 11.608 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.607-8.434l-5.23-30.489 22.152-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.446-13.691-27.741a8 8 0 0 0-14.347 0L365.462 136.2l-30.612 4.448a8 8 0 0 0-6.458 5.444zm43.533 5.336a8 8 0 0 0 6.024-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.023 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8 8 0 0 0-7.445 0l-16.756 8.81 3.2-18.658a8 8 0 0 0-2.3-7.081l-13.557-13.214zM417.822 233.159a8 8 0 0 0-4.433 13.645l14.245 13.886-3.363 19.61a8 8 0 0 0 11.607 8.434l17.608-9.257 17.608 9.257A8 8 0 0 0 482.7 280.3l-3.363-19.606 14.247-13.894a8 8 0 0 0-4.434-13.645l-19.686-2.855-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839zM450 241.151l3.491-7.074 3.492 7.074a8 8 0 0 0 6.017 4.376l7.807 1.135-5.649 5.506a8 8 0 0 0-2.3 7.082l1.334 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.333-7.775a8 8 0 0 0-2.3-7.082l-5.648-5.506 7.807-1.135a8 8 0 0 0 6.027-4.376zM69.763 154.293l22.152 21.592-5.23 30.489a8 8 0 0 0 11.607 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.608-8.434l-5.229-30.489 22.151-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.447-13.691-27.74a8 8 0 0 0-14.347 0l-13.691 27.74-30.609 4.447a8 8 0 0 0-4.434 13.646zm41.509-2.865a8 8 0 0 0 6.023-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.024 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8.006 8.006 0 0 0-7.445 0L105.2 193.1l3.2-18.658a8 8 0 0 0-2.3-7.081L92.539 154.15zM18.416 246.8l14.245 13.89L29.3 280.3a8 8 0 0 0 11.608 8.434l17.608-9.257 17.608 9.257a8 8 0 0 0 11.605-8.434l-3.363-19.61 14.245-13.89a8 8 0 0 0-4.433-13.645L74.491 230.3l-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839-19.693 2.859a8 8 0 0 0-4.434 13.641zM49 245.527a8 8 0 0 0 6.023-4.376l3.492-7.074 3.491 7.074a8 8 0 0 0 6.023 4.376l7.807 1.135-5.648 5.506a8 8 0 0 0-2.3 7.082l1.333 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.334-7.775a8 8 0 0 0-2.3-7.082l-5.649-5.506zM144 288h24v16h-24zM144 328h24v16h-24zM144 368h24v16h-24zM144 408h24v16h-24z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M464 392h-16a32.036 32.036 0 0 0-32 32v16.474a37.8 37.8 0 0 0-16 6.558V408h-16v40h-56V264h56v128h16V256a8 8 0 0 0-8-8h-64v-40a8 8 0 0 0-8-8h-24v-16a8 8 0 0 0-8-8h-64a8 8 0 0 0-8 8v16h-24a8 8 0 0 0-8 8v40h-64a8 8 0 0 0-8 8v48h16v-40h56v184h-56V320h-16v127.032a37.8 37.8 0 0 0-16-6.558V424a32.036 32.036 0 0 0-32-32H48a32.036 32.036 0 0 0-32 32v64a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-64a32.036 32.036 0 0 0-32-32zM232 192h48v32h-48zM32 424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16v16.474A38.061 38.061 0 0 0 48 478v2H32zm32 56v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm64-16h56v16h-56zm72-248h16v16a8 8 0 0 0 8 8h64a8 8 0 0 0 8-8v-16h16v264h-24v-56a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8v56h-24zm40 264v-48h32v48zm88-16h56v16h-56zm72 16v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm80 0h-16v-2a38.061 38.061 0 0 0-32-37.526V424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path d="M344 368h24v16h-24zM344 408h24v16h-24zM344 288h24v16h-24zM344 328h24v16h-24z"
                                      fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:svgjs="http://svgjs.com/svgjs" width="80" height="80" x="0" y="0" viewBox="0 0 64 64"
                         style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="m28.558 7.098-.47 2.74a1 1 0 0 0 1.45 1.053L32 9.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4L32.897.558a1.04 1.04 0 0 0-1.793 0L29.873 3.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L32 3.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM42.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L46 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0L43.873 8.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L46 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM54.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L58 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0l-1.231 2.493-2.752.4a1 1 0 0 0-.554 1.706Zm2.123-2.144a.998.998 0 0 0 .752-.547L58 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM14.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L18 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L18 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM2.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L6 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L6 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M63 62h-1V29h1a1 1 0 0 0 0-2H45v-8a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v8H1a1 1 0 0 0 0 2h1v33H1a1 1 0 0 0 0 2h62a1 1 0 0 0 0-2ZM4 29h15v33H4Zm17-9h22v42h-5V50a1 1 0 0 0-1-1H27a1 1 0 0 0-1 1v12h-5Zm7 33v-2h8v2Zm0 2h3v7h-3Zm5 7v-7h3v7Zm12 0V29h15v33Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M30 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM27 48a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm-3-4h2v2h-2ZM30 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM51 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM23 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM17 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 32H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 39H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 46H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 53H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- hotel-logo-collection end -->

</main>
<!-- main end -->

@endsection
