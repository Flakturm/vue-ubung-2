class Status {

    static find(id) {

        return axios.get('/statuses/' + id)

    }

    static all(then) {
        // fire off an ajax request
        return axios.get('/statuses')
            // .then(response => this.statuses = response.data);
            .then(({data}) => then(data)); //ES2015

    }

}

export default Status;
