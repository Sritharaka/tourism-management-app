new Vue({
    el: '#vapp',
    data:{
        tours:[],
        year: new Date().getFullYear()
    },
    mounted:function(){
        Vue.http.get('/api/tour/get.php')
                .then(response => {
                    this.tours = response.body;
                    console.log(this.tours);
                })
                .catch(err =>{
                    toastr.error(JSON.stringify(err));
                })
    }
})