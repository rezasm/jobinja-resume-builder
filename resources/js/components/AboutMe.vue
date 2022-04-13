<template>
    <div class="box mt-5 about-me">
                    <div class="box-header">
                        <h5><i class="fa fa-user-circle" aria-hidden="true"></i>

                            درباره من</h5>
                    </div>
                    <div v-on:mouseenter="showEditBtn=true" v-on:mouseleave="showEditBtn=false"
                    v-show="!showEditForm" v-on:click="showEditForm=true" 
                     class="box-content"
                     
                     >
                        <p class="about-text">
                            {{aboutMe}}
                        </p>



                        <button v-show="showEditBtn" v-on:click="showEditForm=true" 
                        class="position-absolute edit-btn">
                            <i class="fa fa-pencil" aria-hidden="true"></i>

                            ویرایش</button>

                    </div>

                    <edit-about-me :aboutme="aboutMe" v-show="showEditForm"  v-on:cancel="showEditForm=false"></edit-about-me>



                </div>
        
</template>

<script>
import axios from 'axios';
export default {

    data() {
        return {

                showEditBtn:false,
                showEditForm:false,
                aboutMe:''
        }
    },
    mounted() {
        axios.get('/get-about-me').then(response => {
            this.aboutMe = response.data;
            console.log(response.data);

        });
    },


}
</script>









