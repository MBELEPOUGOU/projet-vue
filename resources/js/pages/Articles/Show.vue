<template>
    <div>
        <h1>{{ article.title }}</h1>
        <p>{{ article.content }}</p>
        <h2>Commentaires</h2>
        <ul>
            <li v-for="comment in article.comments" :key="comment.id">
                <p>{{ comment.content }}</p>
                <p>Par: {{ comment.user.name }}</p>
            </li>
        </ul>
        <form @submit.prevent="submitComment">
            <div>
                <label for="content">Ajouter un commentaire:</label>
                <textarea id="content" v-model="content"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        article: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            content: ''
        }
    },
    methods: {
        submitComment() {
            this.$inertia.post(route('comments.store', { article: this.article.id }), {
                content: this.content
            }).then(() => {
                this.content = '';
            });
        }
    }
}
</script>
