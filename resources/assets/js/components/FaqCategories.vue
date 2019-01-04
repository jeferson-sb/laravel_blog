<template lang="html">
  <aside class="faq-aside">
      <div class="faq-aside__option" v-model="isActive" :class="{ active: isActive }" @click="handleClick($event)">
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
  },
  data () {
    return { 
      isActive: false
    }
  },
  methods: {
    handleClick (event) {
      this.$root.$emit('category', this.category_name)
      this.isActive = !this.isActive
      console.log(event)
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
  .faq-aside__option.active{
    background-color: salmon;
    color: #fff;
  }
</style>
