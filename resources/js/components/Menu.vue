<template>
  <div class="my-2 menu-component">
    <div
      class="row d-lg-flex d-flex align-items-center justify-content-between"
    >
      <div
        class="
          col-lg-3 col-sm-6 col-6
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
          d-lg-flex
          align-items-center
          justify-content-between
          d-sm-none d-none
        "
      >
        <a href="#" class="active">HOME</a>
        <a href="#">PRODUCTS</a>
        <a href="#">ABOUT US</a>
        <a href="#">BLOG</a>
        <a href="#">CONTACT</a>
      </div>
      <div
        class="
          col-lg-3 col-sm-12
          d-lg-flex
          align-items-center
          justify-content-end
          d-sm-none d-none
        "
      >
        <img src="/images/search-icon.png" alt="" class="m-3" />
        <button class="btn-quote">GET A QUOTE</button>
      </div>
      <div
        class="
          d-flex d-sm-flex d-lg-none
          col-sm-6 col-6
          align-items-end
          flex-column
        "
      >
        <svg viewBox="0 0 100 80" width="40" height="40" v-on:click="menu">
          <rect width="100" height="20"></rect>
          <rect y="30" width="100" height="20"></rect>
          <rect y="60" width="100" height="20"></rect>
        </svg>
      </div>
    </div>
    <div class="row " style="display: none" ref="menu">
      <div class="col-sm-12 d-flex flex-column">
        <a href="#">HOME</a>
        <a href="#">PRODUCTS</a>
        <a href="#">ABOUT US</a>
        <a href="#">BLOG</a>
        <a href="#">CONTACT</a>
        <div class="row align-items-center">
          <div class="col-2">
            <img src="/images/search-icon.png" alt="" class="img-responsive" />
          </div>
          <div class="col-6">
            <button class="btn-quote">GET A QUOTE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    menu: function () {
      console.log(this.$refs.menu.style.display);
      if (this.$refs.menu.style.display == "none") {
        this.$refs.menu.style.display = "block";
      } else {
        this.$refs.menu.style.display = "none";
      }
    },
  },
};
</script>

<style lang="scss">
.menu-component {
  max-width: 80%;
  margin: 0 auto;

  a {
    color: #000;
    font-weight: bold;
    text-decoration: none;

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
  }
}
</style>
