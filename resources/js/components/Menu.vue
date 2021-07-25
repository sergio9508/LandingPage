<template>
  <div class="my-2 menu-component">
    <div class="row d-lg-flex align-items-center justify-content-between">
      <div
        class="
          col-lg-3 col-sm-12
          d-flex
          align-items-center
          justify-lg-content-end justify-content-start
        "
      >
        <img src="/images/logo.png" alt="" />
      </div>
      <div
        class="
          col-lg-6 col-sm-12
          d-flex
          align-items-center
          justify-content-between
        "
      >
        <a href="#" class="active">HOME</a>
        <a href="#">PRODUCTS</a>
        <a href="#">ABOUT US</a>
        <a href="#">BLOG</a>
        <a href="#">CONTACT</a>
      </div>
      <div
        class="col-lg-3 col-sm-12 d-flex align-items-center justify-content-end"
      >
        <img src="/images/search-icon.png" alt="" class="m-3" />
        <button class="btn-quote">GET A QUOTE</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.menu-component {
  max-width: 80%;
  margin: 0 auto;
  img {
    @media screen and (min-width: 576px) {
      max-width: 100%;
    }
  }
  a {
    color: #000;
    font-weight: bold;
    text-decoration: none;
    @media screen and (min-width: 576px) {
      font-size: 24px;
    }
    &.active {
      border-bottom: 2px solid #08d6a7;
    }
  }
  .btn-quote {
    background: #08d6a7;
    color: #fff;
    font-weight: 400;
    border: none;
    padding: 0.5em 1em;
    border-radius: 30px;
    @media screen and (min-width: 576px) {
      font-size: 24px;
    }
  }
}
</style>
