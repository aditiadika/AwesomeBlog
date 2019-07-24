<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <div class="footer-logo">
                            <h3>
                                <span style="color: #69d2e7">H
                                </span>
                                <span style="color: #69d2e7">A
                                </span>
                                <span style="color: #69d2e7">K
                                </span>
                                <span style="color: #69d2e7">A
                                </span>
                            </h3>
                        </div>

                        <p>{{$profile->about}}</p>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <h4>information</h4>
                        <div class="footer-contacts">
                            <p><span>Tel:</span> {{$setting->contact_number}}</p>
                            <p><span>Email:</span> {{$setting->contact_email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <h4>Contact Us</h4>
                        <div class="footer-icons">
                            <ul>
                                <li>
                                    <a href="{{ $profile->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $profile->tweeter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $profile->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $profile->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</div>