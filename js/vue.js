const app = new Vue({
    el: '#app',
    data:{
        posters: [],
        genres: [],
        genreSelected: 'all',
        apiUrl: 'http://localhost/PHP-AJAX-DISCHI/server.php',
    },
    mounted(){
        this.getData();
    },
    methods:{
        
        getData(){
            axios.get(this.apiUrl,{
                params:{
                    genre: this.genreSelected
                }
            }).
            then(r => {
                //console.log("getData avviato");
                this.posters = r.data;
                //console.log(this.posters);
                //console.log("getData ottenuto");
                this.posters.forEach(poster => {
                    if(!this.genres.includes(poster.genre)){
                        this.genres.push(poster.genre);
                    }
                });
                //console.log(this.posters);
            })
        }
    }
});