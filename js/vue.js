const app = new Vue({
    el: '#app',
    data:{
        posters: [],
        apiUrl: 'http://localhost:8888/PHP-AJAX-DISCHI/server.php'
    },
    mounted(){
        this.getData();
    },
    methods:{
        
        getData(){
            axios.get(this.apiUrl).
            then(r => {
                this.posters = res.data;
                console.log(this.posters);
            })
        }
    }
});