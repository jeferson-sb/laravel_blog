<template>
<div :class="defineCor">
    <div class="card-header">{{titulo}}</div>

    <div class="card-body">
        <slot></slot>
    </div>
</div>
</template>

<script>
export default {
  props: ['titulo','cor'],
  computed:{
    defineCor () {
      return "card " + (this.cor || "card-default")
    }
  }
};
</script>
<style scoped>
  .card{
    border: 0;
  }
</style>

