new Vue({
    el: '#main',
    data: {

    },
    methods: {
        submit: function(){
            toastr.info('Submit')
        },
        cancel: function(){
            toastr.info('Cancel');
        }
    }
})