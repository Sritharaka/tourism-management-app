new Vue({
    el: '#vapp',
    data:{
        hotels:[],
        packages:[],
        year: new Date().getFullYear()
    },
    mounted:function(){
        Vue.http.get('/api/hotel/get.php')
                .then(response => {
                    this.hotels = response.body;
                    console.log(this.hotels);
                })
                .catch(err =>{
                    toastr.error(JSON.stringify(err));
                })
    }
})