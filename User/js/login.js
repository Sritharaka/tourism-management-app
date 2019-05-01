new Vue({
    el: '#main',
    data: {
        name: '',
        password: ''
    },
    methods: {
        submit: function(){
            if(this.name === '' || this.password === ''){
                toastr.error('Invalid username or password');
                return;
            }

            const data = {
                username: this.name,
                password: this.password
            };

            Vue.http.post(APP_BASE_URL + '/api/users/login.php',data)
                .then(response => {
                    toastr.success('Login sucessfull');

                    sessionStorage.setItem('user', JSON.stringify(response.body));

                    window.location.href = APP_BASE_URL;
                })
                .catch(err =>{
                    toastr.error('Error login into the sytem');
                })
        },
        cancel: function(){
            toastr.info('Cancel');
        }
    }
})