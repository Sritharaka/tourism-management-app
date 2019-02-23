function addHotel($event){
    var name = document.getElementById('name').value;
    var price = document.getElementById('price').value;
    var details = document.getElementById('details').value;
    var image = document.getElementById('image').value;
    var email = document.getElementById('email').value;

    $.ajax({
        method:'POST',
        url: '/api/hotel/create.php',
        data: JSON.stringify({
            "name": name,
            "price": price,
            "image": image,
            "details": details,
            "email":email
        })
    }).done(function (resp) {
        document.getElementById('name').value = '';
        document.getElementById('price').value = '';
        document.getElementById('details').value = '';
        document.getElementById('image').value = '';
        document.getElementById('email').value = '';
    });
}