const vueApp = new Vue({
    el: '#vapp',
    data: {
        display: 'redbox',
        name: '',
        price: 0,
        image: 'images/hotel_1.jpg',
        details: '',
        destination: '',
        tourType: ''


    },
    methods: {
        addTour(){
            const data = {
                "name": this.name,
                "price": this.price,
                "image": this.image,
                "details": this.details,
                "destination":this.destination,
                "tourType":this.tourType
            };   

            Vue.http.post('/api/tour/add.php',data)
                .then(response => {
                    this.name = '';
                    this.price = 0;
                    this.image = '';
                    this.details = '';
                    this.destination = '';
                    this.tourType = '';
                    toastr.success('Tour added');
                }).catch((err) => {
                    toastr.error(JSON.stringify(err));
                })
        }
    }
}); 
