const app = new Vue({
  el: '#app',
  data: {
    disks: []
  },
  created() {
    axios.get('../data/api.php')
      .then(response => {
        this.disks = response.data;
      })
  }
});