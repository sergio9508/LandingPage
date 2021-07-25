<template>
  <div class="home-2">
    <div class="quote-container">
      <h1>Get Your <span>Personalized Quote!</span></h1>
      <form>
        <select v-model="type">
          <option disabled value="">Select option</option>
          <option>Health Insurance</option>
          <option>Car Insurance</option>
          <option>House Insurance</option>
          <option>Travel Insurance</option>
        </select>
        <input type="text" name="name" v-model="name" placeholder="Your name" />
        <input
          type="text"
          name="email"
          v-model="email"
          placeholder="E-mail address"
        />
        <button class="btn-quote" v-on:click="submit">GET A QUOTE</button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      type: "",
      name: "",
      email: "",
    };
  },
  methods: {
    submit: function (e) {
      e.preventDefault();

      if (this.validEmail(this.email)) {
        axios
          .post("/api/contacts", {
            name: this.name,
            email: this.email,
            insurance_type: this.type,
          })
          .then(function (response) {
            Vue.$toast.open("Send quote success");
          });
        this.email = "";
        this.name = "";
        this.type = "";
      }else{
          Vue.$toast.open({message: "Email invalid", type: "error"});
      }
    },
    validEmail: function (email) {
      var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
  },
};
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
      select {
        background: transparent;
        border: none;
        border-bottom: 1px solid #939aa1;
        outline: none;
        width: 260px;
        color: #fff;
        option {
          background: #2b3948;
          color: #fff;
        }
      }
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
