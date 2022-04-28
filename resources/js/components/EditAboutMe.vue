<template>
   
         
        <div
        
            class="box-content edit-box"
        >
            <div class="col-lg-12">

            <textarea class="w-100 input-field mt-5" name="about_me" id="" cols="30" rows="10"
            
            v-model="aboutMe"></textarea>
            </div>


                <div class="col-sm-12 text-left p-5">
                <button v-on:click="$emit('cancel')"
                class="cancel-btn m-1">
                    انصراف
                    </button>
                <button class="save-btn m-1" v-on:click="saveData" >ذخیره</button>

            </div>
        </div>
</template>

<script>
import axios from 'axios';
export default {

    props:['aboutMe'],
    data() {
        return {
            
        }
    },

    methods: {
        saveData:function(){

            axios.post('/save-about-me',{
                "about_me":this.aboutMe
            })
            .then(response => {
                console.log(response.data);
                this.$emit('cancel');
                this.$emit('changevalue',this.aboutMe);


            });

        }
    },

    mounted() {
        
    },


}
</script>
