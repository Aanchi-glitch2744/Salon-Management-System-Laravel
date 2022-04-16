<!-- ***** Stylist Area Starts ***** -->
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Stylists</h6>
                        <h2>We have to best staff for you.</h2>
                    </div>
                </div>
            </div>

            @foreach($data2 as $data2)
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="stylistimage/{{$data2->image}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$data2->name}}</h4>
                            <span>{{$data2->speciality}}</span>
                        </div>
                    </div>
                </div>      
            </div>
            @endforeach
        </div>
    </section>
    <!-- ***** Stylist Area Ends ***** -->