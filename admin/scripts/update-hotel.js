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
        image: 'images/hotel_1.jpg',
        details: '',
        email: ''

    },


    mounted: function () {
        this.id = +getParameterByName('id');
        Vue.http.get('/api/hotel/get.php')
            .then(response => {
                const hotels = response.body;
                const hotel = hotels.filter(h => +h.id === this.id)[0];
                this.name = hotel.name;
                this.price = hotel.price;
                this.image = hotel.image;
                this.details = hotel.details;
                this.email = hotel.email;
            })
            .catch(err => {
                toastr.error(JSON.stringify(err));
            })
    },

    methods: {
        updateHotel(){
            const data = {
                "id": this.id,
                "name": this.name,
                "price": this.price,
                "image": this.image,
                "details": this.details,
                "email":this.email
            };
            Vue.http.post('/api/hotel/update.php',data)
                .then(response => {                  
                    toastr.success('Hotel updated');
                    window.location.href = '/admin/pages/delete-hotel.html';
                }).catch((err) => {
                    toastr.error(JSON.stringify(err));
                })
        }
    }
}); 