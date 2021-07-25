<template>
  <div class="home-3">
    <h1 class="text-center">INSURANCE PRODUCTS</h1>
    <p class="text-center">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br />
      accusantium doloremque laudantium.
    </p>
    <div class="products">
      <div class="card-product">
        <img src="/images/health.png" alt="" />
        <p>HEALTH INSURANCE</p>
        <button class="btn-view">VIEW MORE</button>
      </div>
      <div class="card-product">
        <img src="/images/car.png" alt="" />
        <p>CAR INSURANCE</p>
        <button class="btn-view">VIEW MORE</button>
      </div>
      <div class="card-product">
        <img src="/images/home.png" alt="" />
        <p>HOUSE INSURANCE</p>
        <button class="btn-view">VIEW MORE</button>
      </div>
      <div class="card-product">
        <img src="/images/travel.png" alt="" />
        <p>TRAVEL INSURANCE</p>
        <button class="btn-view">VIEW MORE</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.home-3 {
  max-width: 80%;
  margin: 0 auto 4em auto;
  h1 {
    color: #08d6a7;
    font-weight: 600;
  }
  p {
    font-size: 17px;
    font-weight: 400;
  }
  .products {
    display: flex;
    justify-content: space-around;
    .card-product {
      border: 2px solid #08d6a7;
      border-radius: 10px;
      padding: 2em;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      img {
        max-width: 100%;
        margin-bottom: 1em;
      }
      p {
        margin: 2em 0;
        font-weight: 600;
      }
      .btn-view {
        background: #08d6a7;
        color: #fff;
        font-weight: 400;
        border: none;
        padding: 0.5em 1em;
        border-radius: 30px;
      }
      &:hover{
          background: #2b3948;
          border: 2px solid #2b3948;
          p{
              color: #fff;
          }
      }
    }
  }
}
</style>
