<template>
    <div>
        <h1>Liste des articles</h1>
        <ul>
            <li v-for="article in articles" :key="article.id">
                <a :href="route('articles.show', { article: article.id })">{{ article.title }}</a>
                <p>{{ article.created_at }}</p>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        articles: {
            type: Array,
            required: true
        }
    }
}
</script>
