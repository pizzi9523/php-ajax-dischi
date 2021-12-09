const app = new Vue({
    el: '#app',
    data: {
        discs: null,
        filteredByGenreDisc: null,
    },
    mounted() {
        axios
            .get('./api/discs.php')
            .then(response => {
                console.log(response);
                this.discs = response.data
            })
            .catch(error => {
                console.log(error);
            })







    }
})