function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

const vueApp = new Vue({
    el: '#vapp',
    data: {
        id: 0,
        display: 'redbox',
        name: '',
        price: 0,
        image: 'images/tour_1.jpg',
        details: '',
        destination: '',
        tourType:''

    },


    mounted: function () {
        this.id = +getParameterByName('id');
        Vue.http.get('/api/tour/get.php')
            .then(response => {
                const tours = response.body;
                const tour = tours.filter(h => +h.id === this.id)[0];
                this.name = tour.name;
                this.price = tour.price;
                this.image = tour.image;
                this.details = tour.details;
                this.destination = tour.destination;
                this.tourType = tour.tourType;
            })
            .catch(err => {
                toastr.error(JSON.stringify(err));
            })
    },

    methods: {
        updateTour(){
            const data = {
                "id": this.id,
                "name": this.name,
                "price": this.price,
                "image": this.image,
                "details": this.details,
                "destination":this.destination,
                "tourType":this.tourType
            };
            Vue.http.post('/api/tour/update.php',data)
                .then(response => {                  
                    toastr.success('Tour updated');
                    window.location.href = '/admin/pages/delete-tour.html';
                }).catch((err) => {
                    toastr.error(JSON.stringify(err));
                })
        }
    }
}); 