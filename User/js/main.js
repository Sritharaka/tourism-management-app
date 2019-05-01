Vue.component('button-counter', {
    data: function () {
      return {
        count: 0
      }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
  })

Vue.component('link-button', {
  props: ['value', 'location'],
  methods: {
    clicked: function(){
      window.location.href = this.location;
      return false;
    }
  },
  template: '<input type="submit" @click="clicked" class="link-button" :value="value"/>'
})