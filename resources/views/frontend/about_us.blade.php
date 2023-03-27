@extends('frontend.master_header_footer.frontend_masterpage')
@section('about_us_body')

    <!-- main start -->
    <main class="">
        <!-- about us hero start -->
        <section class="room-grid-hero py-5">
            <div class="container py-5 room-grid-hero-content">
                <div class="d-flex align-items-center justify-content-center room-grid-hero-content-bg-text">
                    <h2 class="text-light">About</h2>
                </div>
                <div class="row">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center room-grid-hero-content-left">
                        <h3 class="text-light">About Us</h3>
                        <div class="d-flex align-items-center">
                            <h5 class="text-warning mb-0">Home</h5>
                            <i class="fa fa-angle-double-right text-light px-3"></i>
                            <h5 class="text-light mb-0">About Us</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us hero end -->

        <!-- about us top part start -->
        <section class="about-us-top-part">
            <div class="container">
                <div class="row g-5">
                    <div class="col-5 donot-hesitate-left-part">
                        <p>Have A Coffee</p>
                        <h2>
                            Welcome To Avson <br>
                            Modern Hotel Room <br>
                            Sells Services
                        </h2>
                    </div>
                    <div class="col-7 donot-hesitate-right-part">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatibus minus neque
                            dignissimos nesciunt molestiae nobis, molestias labore deserunt a eligendi laboriosam
                            corporis, ab et eius! Commodi quo incidunt animi nisi minima sequi explicabo iste nam
                            mollitia, magnam assumenda. Sint aliquid deleniti modi obcaecati tempore incidunt impedit
                            pariatur deserunt maiores!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aperiam similique, deserunt
                            alias voluptate nisi molestias totam assumenda quis sequi.</p>
                    </div>
                </div>
                <div class="about-us-top-part-img">
                    <img class="" src="{{asset('frontend')}}/images/home-booking-now.jpg" alt="about us image">
                </div>
            </div>
        </section>


        <section class="about-image-bottom">
            <div class="container">
                <div class="row about-image-bottom-content">
                    <div class="col-5 about-image-bottom-content-left">
                        <div class="card border-0 rounded-0 mb-3 about-image-bottom-content-left-card">
                            <div class="card-body ">
                                <h3 class="card-title fw-bold">An Professional Hotel, Living Service Provider Company
                                </h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                    Nam, molestias commodi, officia quas consequatur dicta voluptatibus eaque totam
                                    consectetur, autem recusandae sunt dolores magnam expedita repudiandae sed porro
                                    inventore cum.</p>
                                <a href="#" class="btn btn-warning rounded-pill text-light fw-semibold ">GET
                                    STARTED
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center ">
                        <div class="d-flex justify-content-around w-100">
                            <div class="">
                                <div class="svg-content mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                         width="50" height="50" x="0" y="0" viewBox="0 0 409.6 409.6"
                                         style="enable-background:new 0 0 512 512" xml:space="preserve" class=""
                                         fill="#FCD12A">
                                        <g>
                                            <path
                                                d="M404.48 373.576h-9.948V352a5.119 5.119 0 0 0-5.12-5.12h-5.652V66.616h7.552a5.119 5.119 0 0 0 5.12-5.12V35.84a5.119 5.119 0 0 0-5.12-5.12h-77.553V5.12a5.119 5.119 0 0 0-5.12-5.12h-34.985a5.119 5.119 0 0 0-5.12 5.12v25.6H256.43V5.12A5.119 5.119 0 0 0 251.31 0h-34.985a5.119 5.119 0 0 0-5.12 5.12v25.6h-77.558a5.119 5.119 0 0 0-5.12 5.12v25.656a5.119 5.119 0 0 0 5.12 5.12h7.552v57.001c-7.982-6.308-18.273-10.122-29.512-10.122-25.226 0-45.752 19.2-45.752 42.793 0 5.125.973 10.133 2.898 14.925a49.274 49.274 0 0 0-4.25 6.241c-4.772-2.099-9.999-3.261-15.304-3.261-19.927 0-36.137 15.201-36.137 33.879 0 3.835.686 7.583 2.043 11.192-5.192 6.707-8.018 14.797-8.018 23.112 0 4.721.896 9.329 2.667 13.747-5.955 7.716-9.195 17.044-9.195 26.609 0 23.496 19.159 42.885 43.643 45.235l.133 45.609H5.12a5.119 5.119 0 0 0-5.12 5.12v25.784a5.119 5.119 0 0 0 5.12 5.12h399.36a5.119 5.119 0 0 0 5.12-5.12v-25.784a5.118 5.118 0 0 0-5.12-5.12zm-20.188-16.456v16.456H140.667V357.12h243.625zm-248.745-10.24a5.119 5.119 0 0 0-5.12 5.12v21.576H117.14l-.195-61.752c8.714-.686 16.927-3.016 24.253-6.723v41.779h-5.651zm19-175.662a39.834 39.834 0 0 0 2.898-14.925c0-.732-.015-1.459-.056-2.171-.379-7.086-2.586-13.691-6.175-19.436.087-.379.23-.737.23-1.142V66.616h222.075V346.88h-51.768v-98.022a5.119 5.119 0 0 0-5.12-5.12H209.275a5.119 5.119 0 0 0-5.12 5.12v98.022h-52.716v-48.031c0-.077-.041-.138-.041-.215 13.691-10.644 22.426-26.66 22.426-44.554 0-11.587-3.656-22.774-10.573-32.358a60.569 60.569 0 0 0-1.71-2.243c2.478-5.852 3.732-11.981 3.732-18.258.001-10.829-3.788-21.36-10.726-30.003zm156.964 82.76v92.902h-43.438v-92.902h43.438zm-53.683 92.902h-43.433v-92.902h43.433v92.902zm20.941-336.64h24.745v20.48h-24.745V10.24zm-57.329 0h24.745v20.48H221.44V10.24zm-82.673 46.136V40.96h247.424v15.416H138.767zM72.422 217.969c-2.703-5.335-4.076-10.972-4.076-16.753 0-9.364 3.64-18.478 10.25-25.672a5.124 5.124 0 0 0 .814-5.755c-2.15-4.306-3.241-8.847-3.241-13.507.005-17.94 15.939-32.548 35.517-32.548 18.964 0 34.545 13.583 35.466 30.945.031.532.041 1.07.041 1.608 0 4.659-1.091 9.201-3.241 13.507a5.106 5.106 0 0 0 .814 5.755c6.615 7.188 10.255 16.307 10.255 25.672 0 5.786-1.372 11.418-4.076 16.753a5.12 5.12 0 0 0 .753 5.734 49.258 49.258 0 0 1 3.241 4.009c5.647 7.823 8.637 16.947 8.637 26.363 0 24.704-20.5 45.082-46.669 47.503l-.082-24.975 18.232-18.232a5.115 5.115 0 0 0 0-7.24 5.115 5.115 0 0 0-7.24 0l-11.039 11.039-.067-21.069a5.119 5.119 0 0 0-5.12-5.105h-.015a5.122 5.122 0 0 0-5.105 5.135l.067 20.301-10.301-10.301a5.115 5.115 0 0 0-7.24 0 5.115 5.115 0 0 0 0 7.24l17.587 17.587.082 25.631c-26.266-2.33-46.879-22.743-46.879-47.514 0-11.054 4.219-21.847 11.873-30.377a5.112 5.112 0 0 0 .762-5.734zm34.479 155.607H54.656l-.133-45.67c14.085-1.423 26.901-8.504 34.98-19.599.026-.031.026-.072.046-.108a65.462 65.462 0 0 0 17.157 3.635l.195 61.742zm-62.715-78.3.067 22.359c-18.801-2.278-33.372-17.044-33.372-34.903 0-8.146 3.108-16.097 8.75-22.38a5.122 5.122 0 0 0 .758-5.734c-1.976-3.901-2.98-8.018-2.98-12.242 0-6.845 2.668-13.512 7.506-18.775a5.125 5.125 0 0 0 .814-5.755c-1.556-3.113-2.345-6.4-2.345-9.769 0-13.036 11.617-23.639 25.897-23.639 3.881 0 7.69.84 11.156 2.36-1.505 4.649-2.325 9.503-2.325 14.428 0 6.282 1.254 12.411 3.727 18.258-7.946 9.964-12.283 22.129-12.283 34.606 0 21.14 12.221 39.619 30.377 49.751-6.2 7.573-15.329 12.513-25.441 13.783l-.067-22.38a5.116 5.116 0 0 0-5.12-5.105h-.015a5.12 5.12 0 0 0-5.104 5.137zM399.36 399.36H10.24v-15.544h389.12v15.544z"
                                                class=""></path>
                                            <path
                                                d="M315.679 169.354h-32.527a5.119 5.119 0 0 0-5.12 5.12v45.117a5.122 5.122 0 0 0 5.12 5.12h32.527a5.119 5.119 0 0 0 5.12-5.12v-45.117a5.119 5.119 0 0 0-5.12-5.12zm-5.12 45.118h-22.287v-34.877h22.287v34.877zM315.679 95.222h-32.527a5.119 5.119 0 0 0-5.12 5.12v45.117a5.119 5.119 0 0 0 5.12 5.12h32.527a5.119 5.119 0 0 0 5.12-5.12v-45.117a5.118 5.118 0 0 0-5.12-5.12zm-5.12 45.122h-22.287v-34.877h22.287v34.877zM240.855 169.354h-32.527a5.119 5.119 0 0 0-5.12 5.12v45.117a5.122 5.122 0 0 0 5.12 5.12h32.527a5.119 5.119 0 0 0 5.12-5.12v-45.117a5.119 5.119 0 0 0-5.12-5.12zm-5.12 45.118h-22.287v-34.877h22.287v34.877zM240.855 95.222h-32.527a5.119 5.119 0 0 0-5.12 5.12v45.117a5.119 5.119 0 0 0 5.12 5.12h32.527a5.119 5.119 0 0 0 5.12-5.12v-45.117a5.118 5.118 0 0 0-5.12-5.12zm-5.12 45.122h-22.287v-34.877h22.287v34.877z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="pt-3 fw-bold">
                                    506
                                </h2>
                                <p class="text-muted">
                                    Luxury Apartment
                                </p>
                            </div>
                            <div class="">
                                <div class="svg-content mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                         width="50" height="50" x="0" y="0" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512" xml:space="preserve" class=""
                                         fill="#FCD12A">
                                        <g>
                                            <path
                                                d="M482.811 337.041v-27.529c0-25.671-20.885-46.555-46.555-46.555H257.958a7.515 7.515 0 1 0 0 15.03h178.298c17.384 0 31.526 14.142 31.526 31.526v27.529c-16.647 3.477-29.19 18.264-29.19 35.927v27.909H198.485v-27.909c0-17.664-12.543-32.45-29.189-35.927v-27.529c0-17.384 14.143-31.526 31.526-31.526H227.9a7.515 7.515 0 1 0 0-15.03h-27.078c-25.671 0-46.555 20.885-46.555 46.555v27.529c-16.646 3.477-29.19 18.264-29.19 35.927v107.027a7.514 7.514 0 0 0 7.515 7.515h231.782c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515H198.485v-56.574h240.107v56.574h-44.16c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h110.054a7.514 7.514 0 0 0 7.515-7.515V372.969c-.001-17.664-12.544-32.45-29.19-35.928zm-342.705 35.928c0-11.951 9.723-21.674 21.675-21.674s21.675 9.723 21.675 21.674v99.512h-43.35zm356.865 99.512h-43.35v-99.512c0-11.951 9.723-21.674 21.675-21.674 11.951 0 21.674 9.723 21.674 21.674v99.512zM191.48 209.331c.367 3.788 3.668 6.781 7.478 6.781h239.161c4.087 0 7.515-3.427 7.515-7.515V32.004c0-4.088-3.427-7.515-7.515-7.515h-43.687c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h25.545l-13.912 13.912H231.011l-13.912-13.912h147.273c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515H198.957c-4.091 0-7.515 3.432-7.515 7.515v176.593c.001.242.014.493.038.734zm25.619-8.248 13.912-13.913h175.053l13.912 13.913zm184.564-28.943h-68.276l-12.527-13.914 40.626-45.126c2.415-2.685 6.711-2.646 9.117.026l31.06 34.168zm-88.5 0h-77.749v-5.481l32.887-36.53c1.86-2.066 5.181-2.067 7.04 0zM430.604 50.147v140.307l-13.912-13.912V64.059zm-28.941 74.804-19.914-21.907c-8.275-9.191-23.158-9.191-31.433 0l-39.568 43.95-24.237-26.921a19.793 19.793 0 0 0-14.689-6.541c-5.557 0-10.973 2.412-14.691 6.541l-21.717 24.123V68.46h166.249zM220.384 64.059v112.484l-13.912 13.912V50.147z">
                                            </path>
                                            <path
                                                d="M84.693 445.403H77.32V185.324h19.302v85.027a7.515 7.515 0 1 0 15.03 0v-85.027h20.447c4.749 0 8.385-4.557 7.326-9.19L113.073 60.867a7.515 7.515 0 0 0-7.326-5.84H33.863a7.515 7.515 0 0 0-7.326 5.84L.185 176.134c-1.059 4.633 2.577 9.19 7.326 9.19h54.78v260.078h-7.373c-18.453 0-33.465 15.012-33.465 33.464v1.129a7.515 7.515 0 0 0 7.515 7.515h81.675a7.515 7.515 0 0 0 7.515-7.515v-1.129c-.001-18.451-15.013-33.463-33.465-33.463zM39.854 70.057h59.903l22.916 100.238H16.937zm-2.232 402.424c2.603-7.027 9.373-12.049 17.295-12.049h29.775c7.922 0 14.692 5.021 17.295 12.049zM310.748 119.104c11.702 0 21.221-9.52 21.221-21.221 0-11.702-9.52-21.221-21.221-21.221-11.702 0-21.221 9.52-21.221 21.221s9.519 21.221 21.221 21.221zm0-27.413c3.414 0 6.192 2.778 6.192 6.192s-2.778 6.192-6.192 6.192-6.192-2.778-6.192-6.192a6.199 6.199 0 0 1 6.192-6.192z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="pt-3 fw-bold">
                                    352
                                </h2>
                                <p class=" text-muted">
                                    Modern Bedroom
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us top part end -->
        <!-- about us latest product start -->
        <section class="about-us-latest-product">
            <div class="container">
                <p class="text-warning small fw-semibold text-center">Latest Product</p>
                <h2 class="text-light text-center fw-bold">Modern Hotel & Room For <br> Luxury Living</h2>
                <div class="row row-cols-3 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="{{asset('frontend')}}/images/home-about-us2.jpg" class="card-img-top rounded-0"
                                 alt="card image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="{{asset('frontend')}}/images/top-summer-detination.jpg"
                                 class="card-img-top rounded-0"
                                 alt="card image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="{{asset('frontend')}}/images/our-project-5.jpg" class="card-img-top rounded-0"
                                 alt="card image">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="about-us-latest-product-bottom">
            <div class="container">
                <div class="row row-cols-3 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <div class="">
                                <h5 class="fw-bold py-4">Company Mission</h5>
                                <p class="small pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                                    dolore
                                    optio dolorem eaque impedit blanditiis iste quae voluptatum, exercitationem ut.</p>
                                <a href="#" class=" text-dark fw-semibold ">READ MORE
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <div class="">
                                <h5 class="fw-bold py-4">Company History</h5>
                                <p class="small pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
                                    quae
                                    quos molestias deleniti molestiae asperiores sint minus aliquam quas magnam.</p>
                                <a href="#" class=" text-dark fw-semibold ">READ MORE
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <div class="">
                                <h5 class="fw-bold py-4">What We Do?</h5>
                                <p class="small pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                                    perferendis? Fugiat tenetur repellat aut eligendi voluptatibus recusandae fuga,
                                    reprehenderit magni.</p>
                                <a href="#" class=" text-dark fw-semibold ">READ MORE
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about us latest product end -->
        <!-- about us popular features start -->
        <section class="about-us-popular-features my-5">
            <div class="container py-5">
                <p class="text-center fw-bold text-warning">Popular Features</p>
                <h3 class="py-3 mb-5 fs-1 fw-bold text-center">
                    Explore Our Hotels Benefits<br> Why Take Our Services?
                </h3>
                <div class="row row-cols-1 row-cols-md-3 gx-5 gy-5 ">
                    <div class="col ">
                        <div class="card h-100  py-5 px-1 rounded-0 about-us-popular-features-card">
                            <div class="svg-content mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                     width="80" height="80" x="0" y="0" viewBox="0 0 64 64"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve" class=""
                                     fill="#FCD12A">
                                    <g>
                                        <g data-name="Layer 11">
                                            <path
                                                d="M21 28h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2ZM34 28h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Z"
                                                class=""></path>
                                            <path
                                                d="m59.66 26.546-8.844-1.179a7.044 7.044 0 0 1-4.024-1.989l-7.913-7.914A4.968 4.968 0 0 0 35.343 14H7.8a5.012 5.012 0 0 0-4.7 3.291l-2.317 6.38A12.962 12.962 0 0 0 0 28.114V39a3 3 0 0 0 3 3h3.08a6.991 6.991 0 0 0 13.84 0h22.16a6.991 6.991 0 0 0 13.84 0H61a3 3 0 0 0 3-3v-7.5a5.015 5.015 0 0 0-4.34-4.954ZM62 33.78l-1.527-.3A3.008 3.008 0 0 1 58.444 32H62ZM2 30h2.727a1.944 1.944 0 0 1-.956.814L2 31.523Zm11 4a7 7 0 0 0-6.92 6H5.069a7.993 7.993 0 0 1 15.862 0H19.92A7 7 0 0 0 13 34Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Zm36-12a7 7 0 0 0-6.92 6h-1.011a7.993 7.993 0 0 1 15.862 0H55.92A7 7 0 0 0 49 34Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Zm12-6h-2.051a10 10 0 0 0-19.9 0h-16.1a10 10 0 0 0-19.9 0H3a1 1 0 0 1-1-1v-5.323l2.514-1.006A3.935 3.935 0 0 0 7 29a1 1 0 0 0-1-1H2.005a10.972 10.972 0 0 1 .657-3.645l2.32-6.381A3.01 3.01 0 0 1 7.8 16h27.543a2.983 2.983 0 0 1 2.122.878l7.913 7.914a9.043 9.043 0 0 0 5.175 2.557l8.847 1.179A3 3 0 0 1 61.589 30H57a1 1 0 0 0-.949 1.316l.266.8a5.011 5.011 0 0 0 3.763 3.322l1.92.382V39a1 1 0 0 1-1 1Z"
                                                class=""></path>
                                            <path
                                                d="M13 37a4 4 0 1 0 4 4 4 4 0 0 0-4-4Zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2ZM49 37a4 4 0 1 0 4 4 4 4 0 0 0-4-4Zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2ZM13 17H8.386a3.014 3.014 0 0 0-2.809 1.947l-1.5 4A3 3 0 0 0 6.886 27H13a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1Zm-1 8H6.886a1 1 0 0 1-.936-1.351l1.5-4A1 1 0 0 1 8.386 19H12ZM26 17h-9a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1Zm-1 8h-7v-6h7ZM37.879 18.464a1 1 0 1 0-1.414 1.414L41.586 25H31v-6h3a1 1 0 0 0 0-2h-4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 .707-1.707Z"
                                                class=""></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body  pt-4">
                                <h5 class="card-title text-center fw-bold">Free Transportion</h5>
                                <p class="card-text text-center py-2 small">
                                    Lorem ipsum dolor sit amet consectetur adipisicid.
                                </p>
                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0)" class="text-dark fw-semibold">
                                        READ MORE <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 py-5 px-1 rounded-0 about-us-popular-features-card">
                            <div class="svg-content mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                     width="80" height="80" x="0" y="0" viewBox="0 0 512.001 512.001"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve" class=""
                                     fill="#FCD12A">
                                    <g>
                                        <path
                                            d="M284.187 401.559c0-12.331-8.124-22.799-19.3-26.336-3.216-45.543-41.299-81.615-87.647-81.615h-44.23l-6.947-100.42h253.24l-15.78-50.21h-17.12l-11.046-34.143H256.07V56.068l42.791-9.985c10.281-2.399 17.461-11.447 17.461-22.004v-.993c0-6.983-3.15-13.46-8.642-17.772-5.493-4.311-12.534-5.833-19.316-4.176l-77.483 18.94v88.759h-79.287l-11.046 34.143h-17.12l-15.78 50.21h23.316l6.947 100.42h-10.965c-46.349 0-84.43 36.072-87.647 81.615C8.124 378.76 0 389.229 0 401.559c0 7.905 3.339 15.045 8.681 20.084C3.339 426.682 0 433.822 0 441.727c0 12.396 8.21 22.911 19.478 26.391 3.109 24.442 24.037 43.4 49.309 43.4H215.4c25.273 0 46.2-18.958 49.309-43.4 11.268-3.481 19.478-13.995 19.478-26.391 0-7.905-3.339-15.045-8.681-20.084 5.342-5.039 8.681-12.179 8.681-20.084zM225.944 31.903l65.995-16.132a7.487 7.487 0 0 1 6.439 1.392 7.487 7.487 0 0 1 2.881 5.924v.993a7.503 7.503 0 0 1-5.82 7.335l-54.431 12.7v64.722h-15.063V31.903zm-83.392 91.996H324.4l6.172 19.08H136.38l6.172-19.08zm-34.381 54.227 6.312-20.084h237.984l6.312 20.084H108.171zm-1.224 130.545h70.294c37.601 0 68.637 28.655 72.418 65.273H34.529c3.781-36.618 34.817-65.273 72.418-65.273zM27.615 454.279c-6.922 0-12.552-5.631-12.552-12.552 0-6.922 5.631-12.552 12.552-12.552h8.351l35.515 25.105H27.615zm102.435-4.242-19.237 13.598-48.751-34.46h38.475l29.513 20.862zm-3.418-20.862h97.502l-48.752 34.46-48.75-34.46zm88.768 67.281H68.787c-16.517 0-30.372-11.62-33.82-27.113h57.825l18.021 12.738 32.285-22.821 32.286 22.821 18.021-12.738h55.816c-3.449 15.493-17.304 27.113-33.821 27.113zm41.172-42.177h-41.858l35.516-25.105h6.341c6.922 0 12.552 5.631 12.552 12.552.001 6.923-5.629 12.553-12.551 12.553zm0-40.167H27.615c-6.922 0-12.552-5.63-12.552-12.552s5.631-12.552 12.552-12.552h228.957c6.922 0 12.552 5.63 12.552 12.552s-5.63 12.552-12.552 12.552z">
                                        </path>
                                        <path
                                            d="M501.093 293.608v-96.403h-45.189v33.138h-45.189v-22.092h-45.189v22.092h-14.561v-22.092h-45.189v85.357H287.84l23.733 217.91h176.693l23.733-217.91h-10.906zm-30.125-81.34h15.063v81.34h-15.063v-81.34zm-30.126 33.139h15.063v76.844l-11.326 31.609h-3.737V245.407zm-30.126 0h15.063V353.86h-15.063V245.407zm-30.126-22.093h15.063V353.86H380.59V223.314zm-29.624 22.093h14.561V353.86h-10.264l-4.297-11.992v-96.461zm-30.126-22.093h15.063v76.517l-2.23-6.223H320.84v-70.294zm153.915 273.142H325.086l-20.451-187.784h18.436l21.59 60.252h110.521l21.59-60.252h18.436l-20.453 187.784z">
                                        </path>
                                        <path
                                            d="m327.988 383.986 10.609 97.407h122.647l10.608-97.407H327.988zm119.745 82.344h-95.625l-7.328-67.281h110.28l-7.327 67.281zM88.871 324.737h15.063V339.8H88.871zM119.329 333.775h15.063v15.063h-15.063zM149.796 333.775h15.063v15.063h-15.063zM180.253 324.737h15.063V339.8h-15.063zM150.278 208.251h79.331v15.063h-79.331zM244.672 208.251h19.936v15.063h-19.936z">
                                        </path>
                                        <path
                                            d="M392.891 425.157h15.063v15.063h-15.063zM423.017 425.157h14.059v15.063h-14.059zM362.766 425.157h15.063v15.063h-15.063z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body  pt-4">
                                <h5 class="card-title text-center fw-bold">Food & Drinks</h5>
                                <p class="card-text text-center py-2 small">
                                    Lorem ipsum dolor sit amet consectetur adipisicid.
                                </p>
                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0)" class="text-dark fw-semibold">
                                        READ MORE <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card h-100 py-5 px-1 rounded-0 about-us-popular-features-card">
                            <div class="svg-content mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                     width="80" height="80" x="0" y="0" viewBox="0 0 20.766 20.766"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve" class=""
                                     fill="#FCD12A">
                                    <g>
                                        <circle cx="10.432" cy="15.771" r="2.426" style="" class=""></circle>
                                        <path
                                            d="M16.23 9.926c-.036-.037-.074-.07-.111-.104l-.109-.103c-.018-.019-.038-.033-.061-.051a7.914 7.914 0 0 0-10.932.257l-.351.352-.486.486a1.522 1.522 0 0 0 .004 2.15 1.52 1.52 0 0 0 2.15.004l.838-.838a4.89 4.89 0 0 1 6.904-.001l.605.586a1.508 1.508 0 0 0 2.131-.005 1.5 1.5 0 0 0 .443-1.066 1.483 1.483 0 0 0-.439-1.063l-.586-.604z"
                                            style="" class=""></path>
                                        <path
                                            d="m20.363 6.927-.504-.504c-.002-.002-.003-.005-.007-.006l-.398-.4a1.435 1.435 0 0 0-.226-.181c-5.113-4.489-12.89-4.351-17.84.411-.024.022-.051.037-.075.061l-.91.911a1.384 1.384 0 0 0 .006 1.959 1.384 1.384 0 0 0 1.959.005l.91-.909c.006-.008.011-.015.017-.02 4.003-3.867 10.353-3.891 14.388-.079l.716.717a1.387 1.387 0 0 0 1.96-.005 1.388 1.388 0 0 0 .004-1.96z"
                                            style="" class=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body pt-4">
                                <h5 class="card-title text-center fw-bold">Free Wi-fi Network</h5>
                                <p class="card-text text-center py-2 small">
                                    Lorem ipsum dolor sit amet consectetur adipisicid.
                                </p>
                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0)" class="text-dark fw-semibold">
                                        READ MORE <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us popular features end -->

        <!-- Clients feedback start -->
        <section class="about-us-clients-feedback">
            <div class="container about-us-clients-feedback-container py-5">
                <p class="text-center text-warning fw-semibold">Clients Feedback</p>
                <h3 class="text-dark py-3 mb-5 fs-1 fw-bold text-center">
                    Our Satisfaction People Say<br> About Our Services
                </h3>
                <div class="slider-area">
                    <div class="container slider-area-container">
                        <div class="slider2-active slider-active arrow-style">
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slick-wrap d-flex single-caro-item">
                                    <div class="content-section">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,
                                            corrupti dolorum nisi
                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos
                                            perspiciatis tenetur sint
                                            illum! Nihil alias quidem laboriosam.
                                        </p>
                                        <div class="d-flex align-items-center feedbacker-name">
                                            <span></span>
                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients feedback end -->
        <!-- hotel-logo-collection start -->
        <section class="our-staff-hotel-logo-collection py-5 ">
            <div class="container py-5">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-6 g-5">
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
