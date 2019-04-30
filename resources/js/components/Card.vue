<template>
  <div v-html="view"></div>
</template>

<script>
export default {
  props: ["card", "view"],

  data() {
    return {
      view: null
    };
  },

  mounted() {
    this.view = this.card.view;
  }
};
</script>

<style scoped>
.card-panel {
  min-height: 150px;
  height: auto;
}
</style>

