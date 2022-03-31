console.log('ciao')


const app = new Vue ({
    el: '#app',
    data: {
        disc: [],
    },
    methods:{
        fetchData(){
            axios.get('http://localhost:8888/PHP/php-ajax-dischi/Milestone_2/server.php')
            .then(res => {
                this.disc = res.data,
                console.log(this.disc)
            })
        },
    },
    created(){
        this.fetchData()
    }

});