Vue.component('app', {
  template: '<div></div>',
  data: function () {
    return {
      counter: 0,
      message:'hola component app'
    }
  },
  methods: {
    incrementCounter: function () {
      this.counter += 1
      this.$emit('increment')
    }
  },
})