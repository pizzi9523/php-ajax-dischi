const app = new Vue({
    el: '#app',
    data: {
        discs: null,
        genres: [],
        filteredByGenreDisc: [],
        genreSelected: "",
    },
    mounted() {
        axios
            .get('./api/discs.php')
            .then(response => {
                this.discs = response.data;


                console.log(response.data);
                response.data.forEach(disk => {
                    // console.log(disk);

                    if (!this.genres.includes(disk.genre)) {
                        this.genres.push(disk.genre);
                    }
                });


            })
            .catch(error => {
                console.log(error);
            })
    },

    methods: {

        filterGenre() {
            axios
                .get('./api/discs.php')
                .then(response => {

                    if (this.genreSelected === "") {
                        this.discs = response.data;
                    } else {
                        this.discs = response.data.filter(disk => {
                            return disk.genre.includes(this.genreSelected);
                        })
                    }
                })
                .catch(error => {
                    console.log(error);
                })
        }
    }
})