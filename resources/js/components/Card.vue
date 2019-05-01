<template>
  <div v-html="renderview"></div>
</template>

<script>
export default {
  props: ["card", "renderview"],

  data() {
    return {
      renderview: null
    };
  },

  mounted() {
    this.renderview = this.card.renderview;
  }
};
</script>

<style scoped>
.card-panel {
  min-height: 150px;
  height: auto;
}
</style>

