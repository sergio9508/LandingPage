<template>
  <div class="home-2">
    <div class="quote-container">
      <h1>Get Your <span>Personalized Quote!</span></h1>
      <form action="">
        <input type="text" name="type" placeholder="Choose insurance type" />
        <input type="text" name="name" placeholder="Your name" />
        <input type="text" name="email" placeholder="E-mail address" />
        <button class="btn-quote">GET A QUOTE</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.home-2 {
  background: #2b3948;
  padding: 3em 0;
  position: relative;
  top: -4em;
  max-width: 70%;
  border-radius: 0 30px 30px 0;
  .quote-container {
    margin-left: 14%;
    h1 {
      color: #fff;
      span {
        color: #08d6a7;
      }
      margin-bottom: 1em;
    }
    form {
      display: flex;
      flex-direction: row;
      max-width: 90%;
      justify-content: space-between;
      input {
        background: transparent;
        border: none;
        border-bottom: 1px solid #939aa1;
        outline: none;
        width: 260px;
        color: #fff;
        &::placeholder {
          /* Chrome, Firefox, Opera, Safari 10.1+ */
          color: #939aa1;
          opacity: 1; /* Firefox */
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
  }
}
</style>
