<template>
  <div class="home-1">
    <div class="row">
      <div class="col-lg-6 col-sm-12 d-flex justify-content-center flex-column">
        <p>HOUSE INSURANCE</p>
        <h1>
          TAKING CARE OF <br />
          WHAT’S IMPORTANT
        </h1>
        <button class="btn-more">VIEW MORE</button>
      </div>
      <div class="col-lg-6 col-sm-12">
        <img src="/images/img.png" alt="" />
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang='scss'>
.home-1 {
  max-width: 80%;
  margin: 0 auto;
  p {
    color: #08d6a7;
    font-size: 18px;
    font-weight: 600;
  }
  h1 {
    font-weight: 500;
    margin-bottom: 1em;
  }
  img {
    max-width: 100%;
    @media screen and (max-width: 768px) {
        margin-top: 1em;
    }
  }
  .btn-more {
    background: #08d6a7;
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    border: none;
    padding: 0.5em 1em;
    border-radius: 30px;
    max-width: 20%;
    @media screen and (max-width: 768px) {
        max-width: 50%
    }
  }
}
</style>
