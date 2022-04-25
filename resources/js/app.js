require('./bootstrap')

import Vue from 'vue'

// import all the components
import Message from './components/Message.vue'
import MessageForm from './components/MessageForm.vue'

// regis ass global components
Vue.component('dw-message', Message)
Vue.component('dw-form', Form)

const app = new Vue({
  el: '#app',
  data: {
    messages: [],
  },
  created() {
    this.fetchMessages()
    Echo.private('chat').listen('MessageSent', (e) => {
      this.messages.push({
        message: e.message.message,
        user: e.user,
        // time: e.message.time
      })
    })
  },
  methods: {
    fetchMessages() {
      axios.get('/messages').then((response) => {
        this.messages = response.data
      })
    },
    addMessage(message) {
      this.message.push(message)
      axios.post('/messages', message).then((response) => {
        console.log(response.data)
      });
    }
  }
})
