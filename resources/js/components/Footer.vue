<template>
  <div class="footer-conponent">
    <footer>
      <div class="footer-container">
        <div class="row p-4">
          <div class="col-md-3">
            <img src="/images/logo_white.png" alt="" />
          </div>
          <div class="col-lg-3 col-sm-12 d-flex flex-column">
            <span>PAGES</span>
            <a href="#">ABOUT US</a>
            <a href="#">SERVICES</a>
            <a href="#">BLOG</a>
            <a href="#">CONTACT US</a>
          </div>
          <div class="col-lg-3 col-sm-12 d-flex flex-column">
            <span>PRODUCTS</span>
            <a href="#">HEALTH INSURANCE</a>
            <a href="#">HOUSE INSURANCE</a>
            <a href="#">CAR INSURANCE</a>
            <a href="#">TRAVEL INSURANCE</a>
          </div>
          <div class="col-lg-3 col-sm-12 d-flex flex-column">
            <span>CONTACT</span>
            <a href="#">P.+(123)456 78 90</a>
            <a href="#">F.+(321)654 87 90</a>
            <a href="mailto:info@yourdomain.com">E. info@yourdomain.com</a>
            <a href="#">A. 387 Railroad Court Palmetto, FL 34221</a>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright">
      <div class="copy-container">
        <p>&copy; 2019 Insurance. All Rights Reserved.</p>
        <div class="social-icons">
          <a href="#"><img src="/images/twitter.png" alt="" /></a>
          <a href="#"><img src="/images/fb.png" alt="" /></a>
          <a href="#"><img src="/images/in.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
footer {
  background: #2b3948;
  .footer-container {
    max-width: 80%;
    margin: 0 auto;
    span {
      color: #fff;
      font-weight: 600;
      margin-bottom: 2em;
      @media screen and (min-width: 576px) {
        font-size: 30px;
      }
    }
    a {
      color: #adb1b5;
      font-weight: 600;
      text-decoration: none;
      margin-bottom: 1em;
      @media screen and (min-width: 576px) {
        font-size: 30px;
      }
    }
  }
}
.copyright {
  background-color: #273340;
  .copy-container {
    max-width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    padding: 1em;
    @media screen and (min-width: 576px) {
      flex-direction: column;
    }
    p {
      color: #adb1b5;
      margin: 0;
      @media screen and (min-width: 576px) {
        font-size: 30px;
      }
    }
    .social-icons {
      @media screen and (min-width: 576px) {
        display: flex;
        width: 30%;
        justify-content: space-between;
        img {
          height: 50px;
        }
      }
    }
  }
}
</style>
