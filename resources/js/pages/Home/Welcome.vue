<template>
    <div>
        <h1>Bienvenue sur notre blog !</h1>
        <nav>
            <ul>
                <li><a @click.prevent="navigate('/articles')">Articles</a></li>
                <!-- Ajoutez d'autres liens de menu ici si nécessaire -->
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    methods: {
        navigate(url) {
            this.$inertia.visit(url);
        }
    }
}
</script>
