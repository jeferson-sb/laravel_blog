<template>
  <div class="card bg-alpha text-white">
    <div class="card-body">
      <div class="content">
        <h2>110</h2>
        <p>New Orders</p>
      </div>
    <div class="icon">
      <i class="fab fa-android fa-5x"></i>
    </div>
    </div>
    <footer>
      <a href="#" class="btn btn-large btn-block btn-info btn-alpha">More Info <i class="fas fa-arrow-circle-right" id="info-icon"></i></a>
    </footer>
  </div>
</template>

<script>
    export default {
      props:['qtd','titulo','url']
    }
</script>

<style scope>
  .icon {
    float: right;
  }
  .icon i {
    transition: all .6s ease-in;
    -o-transition: all .6s ease-in;
    -webkit-transition: all .6s ease-in;
  }
  .card-body .content{
    float: left;
  }
  .bg-alpha{
    background-color: rgb(23, 174, 197);
  }
  .icon i:hover{
    transform: scale(1.5);
  }
  #info-icon{
    transition: all .6s ease-in-out;
  }
  #info-icon:hover{
    transform: translateX(10px);
  }
</style>
