<template>
  <article class="message" :class="accordionClasses">
    <div class="message-header" @click="toggleAccordion">{{ name }}</div>
    <div class="message-body">
      <div class="message-content">
        {{ text }}
      </div>
    </div>
  </article>
</template>

<script>
export default {
  name: "Accordion",
  props: {
    name: String,
    text: String,
  },
  methods: {
    toggleAccordion: function () {
      this.isOpen = !this.isOpen;
    },
  },
  computed: {
    accordionClasses: function () {
      return {
        "is-closed": !this.isOpen,
        "is-primary": this.isOpen,
        "is-dark": !this.isOpen,
      };
    },
  },
  data() {
    return {
      isOpen: false,
    };
  },
};
</script>
<style lang="scss">
.message-header {
  cursor: pointer;
  font-weight: bold;
  font-size: 17px;
  padding: 1em 0;
  border-bottom: 1px solid #eeeeee;
  &::before {
    content: url("/images/toggle-open.png");
    padding-right: 5px;
  }
  @media screen and (min-width: 576px) {
        font-size: 30px;
      }
}
.message-body {
  padding: 0;
  max-height: 10em;
  overflow: hidden;
  transition: 0.3s ease all;
  padding: 0 1em;
   @media screen and (min-width: 576px) {
        font-size: 30px;
      }
}

.is-closed {
  .message-body {
    max-height: 0;
    padding: 0;
  }
  .message-header {
    &::before {
      content: url("/images/toggle.png");
      padding-right: 5px;
    }
  }
}
</style>
