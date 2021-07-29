const app = new Vue(
    {
        el: '#app',
        data:{
            url: '../php-json/api/dischi.php'
        },
        mounted(){
            axios
            .get(this.url)
            .then(response => {
                console.log(response.data)
            })
        }
    }
);