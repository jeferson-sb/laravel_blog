<template>

<div class="container">
  <div class="card">
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
  export default {
    name: "faq",
    props: ["titulo", "subtitulo"],
    mounted () {
      console.log('Component mounted!')
    }
  }
</script>

<style scoped>

</style>
