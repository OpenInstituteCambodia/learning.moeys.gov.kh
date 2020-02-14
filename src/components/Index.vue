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
export default {
    computed: {
        content() {
            return {
                "title": "Registration Page for Educational Services",
                "slogan": "Ministry of Education, Youth and Sports",
                "infoboard": [
                    "MoEYS provides access to all its Educational Services using the same ID and password for all of them. If you wish to uses these services, please register by using the Registration button above, and fill the data requested. Registration and use of the MoEYS Educational Services is free",
                    "Once you register, you can just sign-in in any of the Educational Services available in the MoEYS website. At this time, registration is only required to take courses stored in the MoEYS Moodle Course Management System."
                ]
            }
        }
    }
}
</script>

<style>

</style>
