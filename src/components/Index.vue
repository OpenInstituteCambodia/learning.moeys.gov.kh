<template>
    <div class="row align-items-center">
        <div class="col-12">
            <img class="moeys__logo" src="@/assets/logo.png" :alt="content.slogan">
            <h5 class="text-dark w-75 mb-5 mx-auto"><strong>{{ content.slogan }}</strong></h5>
        </div>
        <div class="col-12">
            <h1 class="h2">{{ content.title }}</h1>
        </div>
        <div class="col-12">
            <div class="my-4">
                <button class="btn btn-warning btn-lg moeys__button">Register</button>
                <span class="mx-2"></span>
                <button class="btn btn-info btn-lg moeys__button">Moodle</button>
            </div>
        </div>
        <div class="col-12">
            <div class="moeys__infoboard" v-for="(info, i) in content.infoboard" :key="i">
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
