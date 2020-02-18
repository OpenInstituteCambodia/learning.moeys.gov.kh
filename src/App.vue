<template>
  <div id="app" class="container">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  metaInfo: {
    title: "Learning Platform",
    titleTemplate: "%s - MoEYS",
    htmlAttrs: {
      lang: "en"
    }
  },
  name: "App"
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

<style lang="scss" src="@/scss/app.scss"></style>
