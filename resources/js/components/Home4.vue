
<template>
  <div class="home-4">
    <div class="row justify-content-between">
      <div class="col-lg-5 col-sm-12 choose">
        <h1>WHY CHOOSE US?</h1>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
          ab illo inventore veritatis et quasi architecto beratae vitae dicta
          sunt explicabo.
        </p>
        <div class="insurance">
          <div class="insurances">
            <p class="fw-bold">Health Insurance</p>
            <div class="line">
              <div class="yellow p-95"></div>
            </div>
            <p class="percent">95%</p>
          </div>
          <div class="insurances">
            <p class="fw-bold">House Insurance</p>
            <div class="line">
              <div class="yellow p-87"></div>
            </div>
            <p class="percent">87%</p>
          </div>
          <div class="insurances">
            <p class="fw-bold">Car Insurance</p>
            <div class="line">
              <div class="yellow p-92"></div>
            </div>
            <p class="percent">92%</p>
          </div>
          <div class="insurances">
            <p class="fw-bold">Travel Insurance</p>
            <div class="line">
              <div class="yellow p-80"></div>
            </div>
            <p class="percent">80%</p>
          </div>
        </div>
        <div class="cards-insurance">
          <div class="card-insurance">
            <span>2280</span>
            <p>
              Satisfied <br />
              Clients
            </p>
          </div>
          <div class="card-insurance">
            <span>20</span>
            <p>
              Years of <br />
              Market
            </p>
          </div>
          <div class="card-insurance">
            <span>2280</span>
            <p>
              Positive <br />
              Solutions
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-sm-12 help-us">
        <h1>HOW WE CAN HELP YOU?</h1>
        <Accordion
          name="Sed ut perspiciatis unde omnis?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
        <Accordion
          name="Nisi ut aliquid ex ea commodi consequatur?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
        <Accordion
          name="Consequuntur magni dolores eos qui ratione?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
        <Accordion
          name="Neque porro quisquam est, qui dolorem?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
        <Accordion
          name="Sed ut perspiciatis unde omnis?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
        <Accordion
          name="Inventore veritatis et quasi architecto beatae?"
          text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis"
        />
      </div>
    </div>
  </div>
</template>
<script>
import Accordion from "./accordion.vue";
export default {
  components: {
    Accordion,
  },
  data: function () {
    return {
      isOpen: false,
    };
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
};
</script>
<style lang="scss">
.home-4 {
  max-width: 80%;
  margin: 2em auto;
  border-top: 2px solid #f7f7f7;
  padding-top: 2em;
  .choose {
    h1 {
      color: #f2ab3c;
      margin-bottom: 2em;

    }

    .insurance {
      .insurances {
        display: flex;
        align-items: center;
        margin: 2em 0;
        justify-content: center;
        p {
          margin: 0;
          &.fw-bold {
            width: 200px;
            @media screen and (max-width: 576px) {
              width: 400px;
            }
          }
          &.percent {
            margin-left: 0.5em;
          }
        }
        .line {
          width: 100%;
          background: #eeeeee;
          height: 3px;
          border-radius: 1px;
          .yellow {
            background: #f2ab3c;
            height: 3px;
            &.p-95 {
              width: 95%;
            }
            &.p-87 {
              width: 87%;
            }
            &.p-92 {
              width: 92%;
            }
            &.p-80 {
              width: 80%;
            }
          }
        }
      }
    }
    .cards-insurance {
      display: flex;
      justify-content: space-between;
      align-items: center;
      .card-insurance {
        background: #f2ab3c;
        border-radius: 10px;
        width: 28%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        p {
          color: #fff;
          text-align: center;
          margin-top: 0;
          margin-bottom: 0.5em;
          font-weight: 600;
        }
        span {
          color: #fff;
          font-size: 24px;
          margin: 0.5em 0;
          font-weight: 600;
        }
      }
    }
  }
  .help-us {
    border: 2px solid #f2ab3c;
    border-radius: 10px;
    padding: 2em;
    h1 {
      color: #f2ab3c;

    }
    @media screen and (max-width: 576px) {
      margin-top: 1em;
    }
  }
}
</style>
