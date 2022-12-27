<template>
    <form action="#" @submit.prevent="post">
        <div class="form-group">
            <textarea class="form-control" v-model="body" cols="30" rows="5">
            </textarea>
            <button class="btn btn-default" type="submit">Post</button>
        </div>
    </form>
</template>

<script>
export default {
    name: "PostTweet",
    data() {
        return {
            body: ''
        }
    },
    props: ['tweets'],
    methods: {
        post() {
            axios.post('/tweets', {
                body: this.body
            }).then(response => {
                this.tweets.unshift(response.body)
                this.body = ''
            })
        }
    }

}
</script>

<style scoped>

</style>
