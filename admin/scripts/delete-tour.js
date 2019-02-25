const vueApp = new Vue({
    el: '#vapp',
    data: {
        tours: [{ name: 'Gayana', price: 2240, image: '/images/tour_1.jpg', details: 'keimda', destination: 'kemi', tourType: 'oneday' }]
    },
    methods: {
        deleteTour(tour) {
            Vue.http.delete('/api/tour/delete.php',{body:{id:tour.id}})
                .then(response => {
                  
                    toastr.success("Tour delete");
                })
                .catch(err => {
                    toastr.error(JSON.stringify(err));
                })
        },
        updateTour(tour){
            window.location.href = '/admin/pages/update-tour.html?id='+tour.id;
        }
    },
    mounted: function () {

        Vue.http.get('/api/tour/get.php')
            .then(response => {
                this.tours = response.body;
                console.log(this.tours);
            })
            .catch(err => {
                toastr.error(JSON.stringify(err));
            });
    }
});