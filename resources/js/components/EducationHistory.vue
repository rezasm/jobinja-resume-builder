<template>

     <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            سوابق تحصیلی
                        </h5>
                    </div>

                    
                    <div class=" education p-0">                    

                        <education-item v-for="education in educationItems" :education="education"></education-item>



                        <new-education  v-on:closeForm="showNewEducationForm=false" v-show="showNewEducationForm"></new-education>

                        <div class="add-education"  v-on:click="showNewEducationForm=true"  >
                            <button 
                           
                           
                            class="add-education-btn">+ ایجاد سابقه تحصیلی </button>
                        </div>



                    </div>
                </div>
        
</template>
    
<script>
    import axios from 'axios'
export default {
    data() {
        return {
            showNewEducationForm:false,
            educationItems:[]
        }
    },


    mounted() {
        
        axios.get('/get-educations').then(Response => {

            this.educationItems=Response.data;



        });


    },
}
</script>

