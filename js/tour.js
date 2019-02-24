new Vue({
    el: '#vapp',
    data:{
        hotels:[],
        packages:[],
        year: new Date().getFullYear()
    },
    mounted:function(){
        Vue.http.get('/api/tour/get.php')
                .then(response => {
                    this.tour = response.body;
                    console.log(this.tour);
                })
                .catch(err =>{
                    toastr.error(JSON.stringify(err));
                })
    }
})