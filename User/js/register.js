new Vue({
    el: '#main',
    data: {
        name: '',
        email: '',
        password: '',
        confirmPassword: '',
        accept: false
    },
    methods: {
        submit: function(){
            if(this.password !== this.confirmPassword){
                toastr.error('Passwords do not match');
                return;
            }
            const data = {
                name: this.name,
                email: this.email,
                password: this.password
            }
             Vue.http.post(APP_BASE_URL + '/api/users/register.php',data)
                .then(response => {
                    toastr.success('Regiser sucessfull');
                    window.location.href = APP_BASE_URL + '/User/login.html';
                })
                .catch(err =>{
                    toastr.error('Error Register');
                })
        },
        cancel: function(){
            toastr.info('Cancel');
        }
    }
})