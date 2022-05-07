<template>
    <div class="box-content edit-box">
        <div class="col-12 mt-5 mb-5">
           
            <span v-for="(skill, index) in skills" class="skill-item">
               <span class="p-1">{{skill}}</span>
            <i v-on:click="RemoveSkill(index)" class="fa fa-remove"></i>   
            </span>      
         
           
        </div>
        <div class="col-12 mt-5">
            <input class="w-25" type="text" name="skill_title" v-model="newSkill">
            <button v-on:click="addSkill" type="button" class="add-btn">+</button>
        </div>
        <div class="col-sm-12 text-left p-5">
            <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                انصراف
            </button>
            <button class="save-btn m-1" v-on:click=saveData>ذخیره</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props:['skills'],
    data(){
        return{

           newSkill:''

        }
    },
    methods:{

        addSkill(){
            this.skills.push(this.newSkill);
            this.newSkill = '';
        },
        RemoveSkill(index){
    
            this.skills.splice(index,1);
            
        },
    saveData(){
        axios.post('/save-skills',
        {
            "skills":this.skills
        
        }
        
        ).then(response => {

            console.log(response.data);
            this.$emit('cancel');

        });
    }

    }


};
</script>
