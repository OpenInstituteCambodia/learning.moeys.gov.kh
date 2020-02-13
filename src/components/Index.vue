<template>
    <div style="width: 100%">
        <div style="margin: 0 auto; width: 75%">
            <img src="../assets/logo.png" :alt="localization.en.slogan" width="16%">
            <p>{{ localization.en.slogan }}</p>
            <h1>{{ localization.en.title }}</h1>

            <div v-for="(info, i) in localization.en.informations" :key="i">
                <p>{{ info }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import $EnglishLocale from '../lang/en.json';

export default {
    computed: {
        localization() {
            return {
                en: $EnglishLocale
            }
        }
    }
}
</script>

<style>

</style>
