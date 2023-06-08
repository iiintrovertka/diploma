.footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  font-family: 'Rubik', sans-serif;
}

/* Social media container */
.social__container {
  margin-bottom: 20px;
}

.social-media {
  font-size: 18px;
  margin-bottom: 10px;
}

.social-media__size {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.social-media__link {
  margin: 5px;
}

.social-media__images {
  width: 5px;
  height: 5px;
}

/* Address section */
.address {
  margin-top: 20px;
}

.address-contact {
  font-size: 16px;
  line-height: 1.5;
}

.address-contact img {
      display: flex;
  align-items: center;
  margin-right: 10px;
}

/* Media queries for responsiveness */
@media(max-width: 767.98px) {
  .social-media {
    font-size: 16px;
  }

  .social-media__images {
    width: 25px;
    height: 25px;
  }

  .address-contact {
    font-size: 14px;
  }
}

@media(max-width: 479.98px) {
  .social-media {
    font-size: 14px;
  }

  .social-media__images {
    width: 20px;
    height: 20px;
  }

  .address-contact {
    font-size: 12px;
  }
}


<footer class="footer">
               <section class="social__container">
                    <div class="social-media">
                        <span>Get connected with us on social networks:</span>
                <div class="social-media__size">
                <a href="https://www.facebook.com/astanaituniversity/" class="social-media__link"><img class="social-media__images" src="images/footer/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/astana_it_university/?hl=ru" class="social-media__link"><img class="social-media__images" src="images/footer/instagram.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/" class="social-media__link"><img class="social-media__images" src="images/footer/linkedin.png" alt="Linkedin"></a>
                <a href="https://twitter.com/?lang=ru" class="social-media__link"><img class="social-media__images" src="images/footer/twitter.png" alt="Twitter"></a>
                <a href="https://www.tiktok.com/@astana_it_university" class="social-media__link"><img class="social-media__images" src="images/footer/tik-tok.png" alt="Tik-tok"></a>
                <a href="https://www.youtube.com/channel/UCRUN152kvKPdLiYvcpOyFkQ" class="social-media__link"><img class="social-media__images" src="images/footer/youtube.png" alt="Youtube"></a>
                </div>
                </div>  
                </section>
                <section class="address">
                    <div class="address__container">
                        <div class="address-contact">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><img width="22px" height="22px" src="images/footer/home.png" alt=""><a href="https://www.google.com/maps/place/Astana+IT+University/@51.0908492,71.4161342,17z/data=!3m1!4b1!4m5!3m4!1s0x424585a605525605:0x4dff4a1973f7567e!8m2!3d51.0908492!4d71.4183229" style="text-decoration: none; text-decoration-color: none; color: #7D7B7B;"> Turkistan st., Nur-Sultan, KZ </a></p>
                            <p><img width="22px" height="22px" src="images/footer/website.png" alt=""><a href="https://astanait.edu.kz/" style="text-decoration: none; color: #7D7B7B;"> www.astanait.edu.kz</a></p>
                            <p><img width="22px" height="22px" src="images/footer/phone.png" alt="" style="color: #7D7B7B;"> +7 7172 64 57 10</p>
                            <p><img width="22px" height="22px" src="images/footer/printer.png" alt="" style="color: #7D7B7B;"> +7 7172 64 57 10</p>
                        </div>
                    </div>
                </section>
            © 2023 Copyright</div>
            </footer>