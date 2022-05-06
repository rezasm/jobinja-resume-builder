<template>

       <div class="box mt-5 skills">
                    <div class="box-header">
                        <h5>
                            مهارت های حرفه ای
                        </h5>
                    </div>
                    <transition>
                    <div v-show="!showEditForm" 
                    class="box-content" v-on:click="showEditForm=true" 
                    v-on:mouseenter="showEditBtn=true"
                    v-on:mouseleave="showEditBtn=false"
                    >
                        <div class="col-12 mt-5 mb-5">

                            <a v-for="skill in skills" class="skill-item" href="#">
                                {{skill}}
                            </a>
                        

                            <button v-show="showEditBtn"  v-on:click="showEditForm=true"
                            class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>

                        </div>
                    </div>
                    
                    </transition>

                        <transition>
                        
                        <edit-my-skills :skills="skills" v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-my-skills>
                        </transition>


                </div>

        
    
</template>


<script>
import axios from 'axios'
export default {
    data() {
        return {
            showEditBtn:false,
            showEditForm:false,
            skills:[]
        }
    },

    mounted() {
        axios.get('/get-skills').then(response => {

            this.skills = response.data;
            console.log(this.skills)
        });;
    },

    methods: {
        




    },
}
</script>

