new Vue({
    el: '#main',
    data: {
        year: new Date().getFullYear(),
        loggedIn:false,
        user: {},
        isAdmin: false
    },
    mounted: function(){
        if(sessionStorage.getItem('user')){
        
        const user = JSON.parse(sessionStorage.getItem('user'));
        this.user = user;
        this.loggedIn = !!user.id;
        this.isAdmin = user.userTypeId === '1';
      }
    }
})