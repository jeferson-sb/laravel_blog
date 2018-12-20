<template lang="html">
  <aside class="faq-aside">
      <div class="faq-aside__option">
        <h3>{{ category_name }}</h3>
      </div>
  </aside>
</template>

<script>
export default {
  props: ["category_name"]
}
</script>

<style scoped>
  .faq-aside{
    padding: 1rem;
    box-shadow: 1px 1px 1px solid rgba(0,0,0,.1);
    text-align: center;
  }
  .faq-aside__option{
    margin-bottom: 5px;
    border: 1px solid #dfdfdf;
    padding: .5rem;
    border-radius: 3px;
  }
</style>
