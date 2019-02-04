<template lang="html">
  <aside class="faq-aside">
      <div class="faq-aside__option" @click="$root.$emit('show-faq', category_name)">
        <h5><a>{{ category_name }}</a></h5>
      </div>
  </aside>
</template>

<script>
export default {
  props: { 
    category_name: {
      type: String,
      required: true
    }
  }
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
    border-radius: 3px
  }
  .faq-aside__option:hover{
    background-color: salmon;
    color: #fff;
    cursor: pointer;
  }
</style>
