const vueApp = new Vue({
    el: '#vapp',
    data: {
        hotels: [{ name: 'Gayana', price: 2240, image: '/images/hotel_1.jpg', details: 'keimda', email: 'keminda4lk@gmail.com' }]
    },
    methods: {
        deleteHotel(hotel) {
            

            Vue.http.delete('/api/hotel/delete.php',{body:{id:hotel.id}})
                .then(response => {
                  
                    toastr.success("hotel delete");
                })
                .catch(err => {
                    toastr.error(JSON.stringify(err));
                })

        }



    },
    mounted: function () {

        Vue.http.get('/api/hotel/get.php')
            .then(response => {
                this.hotels = response.body;
                console.log(this.hotels);
            })
            .catch(err => {
                toastr.error(JSON.stringify(err));
            })
    }
});