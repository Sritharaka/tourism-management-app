Vue.component('login-links', {
  data: function() {
    return {
        user: {},
        loggedIn: false,
        isAdmin: false
    }
  },
  mounted: function() {
      if(sessionStorage.getItem('user')){
        
      const user = JSON.parse(sessionStorage.getItem('user'));
      this.user = user;
      this.loggedIn = !!user.id;
      this.isAdmin = user.userTypeId === '1';
      }
    },
  methods: {
    
    logout:function(){
      this.loggedIn = false;
      sessionStorage.removeItem('user');
    }
  },
  template: `
  
              <div v-if="loggedIn === false" class="user_box ml-auto">
								<div class="user_box_login user_box_link"><a href="./User/login.html">login</a></div>
								<div class="user_box_register user_box_link"><a href="./User/register.html">register</a></div>
              </div>
              <div v-else class="user_box ml-auto">
								<div class="user_box_login user_box_link">{{user.name}}</div>
								<div class="user_box_register user_box_link"><a @click="logout" href="#">Logout</a></div>
                            </div>

  `
})