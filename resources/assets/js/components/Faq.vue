<template>

<div class="container">
  <transition name="fade" mode="in-out">
    <div class="card" v-show="titulo === corresponding_category">
        <div class="card-body">
            <h5 class="card-title">{{ titulo }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ subtitulo }}</h6>
            <p class="card-text">
                <slot></slot>
            </p>
        </div>
    </div>
  </transition>
</div>
</template>

<script>
  export default {
    name: "faq",
    props: { 
      titulo: {
        type: String,
        required: true
      },
      subtitulo: {
        type: String,
        required: true
      }
    },
    data () {
      return {
        corresponding_category: 'Dúvidas Gerais',
      }
    },
    mounted () {
      this.$root.$on('show-faq', (category_name) => {
        this.corresponding_category = category_name
      })
    }
  }
</script>

<style scoped>
.fade-enter-active{
  animation: fade-in .8s ease-in-out;
}
.fade-leave-active{
  animation: fade-in .5s reverse ease-in-out;
}
.fade-enter, .fade-leave-to{
  transform: translateY(0);
  opacity: 0;
}
@keyframes fade-in{
  0% { transform: translateY(20px); opacity: 0; }
  100% { transform: translateY(0); opacity: 1; }
}
</style>
