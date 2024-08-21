<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">contact now</span>
                        <h2 class="section-title__title">Get in touch with us</h2>
                    </div>
                    <p class="contact-one__text-1">Timeless Elegance, Where Minimalism Intersects With Extravagance.</p>
                    <ul class="list-unstyled contact-one__list">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                <h4><a href="#">+961 70 89 81 81</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <p>Write email</p>
                                <h4><a href="#">info@milaresidence.com</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-one__right">
                    <div class="row">
                        <div class="contact-one__form-box">
                            <form action="{{ asset('assets/inc/sendemail.php') }}"
                                class="contact-one__form contact-one-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <label for="name">Name: </label>
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <label for="email">Email: </label>
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <label for="Phone">Phone: </label>
                                            <input type="number" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <label for="apartment-selection">Apartment: </label>
                                            <select id="apartment-selection" name="apartment_selection" required>
                                                <option value="Studio" selected>Studio</option>
                                                <option value="One Bedroom">One Bedroom</option>
                                                <option value="Two Bedroom">Two Bedroom</option>
                                                <option value="Three Bedroom">Three Bedroom</option>
                                                <option value="Four Bedroom">Four Bedroom</option>
                                                <option value="Penthouse">Penthouse</option>
                                                <option value="Town House">Town House</option>
                                                <option value="Villas">Villas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <a href="about.html" class="thm-btn contact-one__btn">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->
