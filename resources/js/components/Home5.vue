<template>
  <div class="home-5">
    <div class="home-5-container">
      <h1 class="text-center">LATEST NEWS</h1>
      <p class="text-center">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br />
        accusantium doloremque laudantium.
      </p>
      <div class="blog-content">
        <div class="blog">
          <img src="/images/blog.png" alt="" />
          <div class="text">
            <h1>5 TIPS ABOUT TRAVEL INSURANCE</h1>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium,
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="blog">
          <img src="/images/blog.png" alt="" />
          <div class="text">
            <h1>HOUSE INSURANCE IN 5 MINUTES</h1>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium,
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="blog">
          <img src="/images/blog.png" alt="" />
          <div class="text">
            <h1>NEW SYSTEM FOR CAR INSURANCE</h1>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium,
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <button class="btn-quote">VIEW ALL POSTS</button>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.home-5 {
  background: #f8f8f8;
  .home-5-container {
    max-width: 80%;
    margin: 0 auto;
    padding-bottom: 2em;
    h1 {
      color: #08d6a7;
      font-weight: 600;
      padding-top: 2em;
      @media screen and (min-width: 576px) {
        font-size: 38px;
      }
    }
    p {
      margin-top: 1em;
      @media screen and (min-width: 576px) {
        font-size: 30px;
      }
    }
    .blog-content {
      display: flex;
      justify-content: space-between;
      @media screen and (min-width: 576px) {
        flex-wrap: wrap;
      }
      .blog {
        display: flex;
        flex-direction: column;
        width: 30%;
        @media screen and (min-width: 576px) {
          width: 100%;
          flex-wrap: wrap;
          margin-bottom: 2em;
        }
        .text {
          background: #fff;
          border-radius: 0 0 10px 10px;
          padding: 1em;
          h1 {
            padding: 0;
            color: #000;
            font-size: 30px;
          }
        }
        a {
          color: #08d6a7;
          text-decoration: none;
          @media screen and (min-width: 576px) {
            font-size: 30px;
          }
        }
      }
    }
    .btn-quote {
      background: #08d6a7;
      color: #fff;
      font-weight: 400;
      border: none;
      padding: 0.5em 1em;
      border-radius: 30px;
      display: block;
      margin: 2em auto;
      @media screen and (min-width: 576px) {
            font-size: 30px;
          }
    }
  }
}
</style>
