<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Timeline</div>
                    <div class="card-body">
                        <post-tweet :tweets="tweets"></post-tweet>
                        <div class="media" v-for="tweet in tweets">
                            <div class="media-left"></div>
                            <div class="media-body">
                                <strong>{{ tweet.user.name }}</strong>
                                <p>{{ tweet.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PostTweet from "./PostTweet";

export default {
    data() {
        return {
            tweets: []
        }
    },
    components: {
        PostTweet
    },
    mounted() {
        axios.get('/tweets').then(response => {
            this.tweets = response.data
        })
    }
}
</script>
