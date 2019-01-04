<template>

<div class="container">
  <div class="card" v-show="titulo === corresponding_category">
      <div class="card-body">
          <h5 class="card-title">{{ titulo }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ subtitulo }}</h6>
          <p class="card-text">
              <slot></slot>
          </p>
      </div>
  </div>
</div>
</template>

<script>
import FaqCategory from './FaqCategories.vue'
  export default {
    name: "faq",
    props: ["titulo", "subtitulo"],
    components: {
      FaqCategory
    },
    data () {
      return {
        corresponding_category: 'Dúvidas Gerais',
      }
    },
    mounted () {
      this.$root.$on('category', (category_name) => {
        this.corresponding_category = category_name
      })
    }
  }
</script>

<style scoped>

</style>
