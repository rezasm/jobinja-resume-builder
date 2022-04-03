<template>
    <div class="box mt-5 about-me">
                    <div class="box-header">
                        <h5><i class="fa fa-user-circle" aria-hidden="true"></i>

                            درباره من</h5>
                    </div>
                    <div v-on:mouseenter="showEditBtn=true" v-on:mouseleave="showEditBtn=false"
                    v-show="!showEditForm"
                     class="box-content">
                        <p class="about-text">
                            به برنامه نویسی بسیار علاقه مند هستم. با زبان php و فریمورک لاراول کار می‌کنم.
                            زبان انگلیسی را در سطح عالی آشنایی دارم.
                            وبسایت شخصی: https://rezasm.ir

                        </p>



                        <button v-show="showEditBtn" v-on:click="showEditForm=true" 
                        class="position-absolute edit-btn">
                            <i class="fa fa-pencil" aria-hidden="true"></i>

                            ویرایش</button>

                    </div>

                    <edit-about-me v-show="showEditForm"  v-on:cancel="showEditForm=false"></edit-about-me>



                </div>
        
</template>

<script>
export default {

    data() {
        return {

                showEditBtn:false,
                showEditForm:false,
        }
    },



}
</script>









