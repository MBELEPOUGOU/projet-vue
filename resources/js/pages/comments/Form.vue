<template>
    <form @submit.prevent="submitComment">
        <div>
            <label for="content">Ajouter un commentaire:</label>
            <textarea id="content" v-model="content"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            content: ''
        }
    },
    methods: {
        submitComment() {
            this.$inertia.post(route('comments.store', { article: this.$page.props.article.id }), {
                content: this.content
            }).then(() => {
                this.content = '';
            });
        }
    }
}
</script>
