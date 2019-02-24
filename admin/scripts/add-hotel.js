const vueApp = new Vue({
    el: '#vapp',
    data: {
        display: 'redbox',
        name: '',
        price: 0,
        image: 'images/hotel_1.jpg',
        details: '',
        email: ''
    },
    methods: {
        addHotel(){
            const data = {
                "name": this.name,
                "price": this.price,
                "image": this.image,
                "details": this.details,
                "email":this.email
            };

            Vue.http.post('/api/hotel/create.php',data)
                .then(response => {
                    this.name = '';
                    this.price = 0;
                    this.image = '';
                    this.details = '';
                    this.email = '';
                    toastr.success('Hotel added');
                }).catch((err) => {
                    toastr.error(JSON.stringify(err));
                })
        }
    }
}); 
