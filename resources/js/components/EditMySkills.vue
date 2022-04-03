<template>
    <div class="box-content edit-box">
        <div class="col-12 mt-5 mb-5">
           
            <span v-for="(skill, index) in skills" class="skill-item">
               <span class="p-1">{{skill.title}}</span>
            <i v-on:click="RemoveSkill(index)" class="fa fa-remove"></i>   
            </span>      
         
           
        </div>
        <div class="col-12 mt-5">
            <input class="w-25" type="text" name="skill_title" v-model="title">
            <button v-on:click="addSkill" type="button" class="add-btn">+</button>
        </div>
        <div class="col-sm-12 text-left p-5">
            <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                انصراف
            </button>
            <button class="save-btn m-1">ذخیره</button>
        </div>
    </div>
</template>

<script>
export default {

    data(){
        return{

            skills:[
                {title:'php'},
                {title:'laravel'},
            ],
            title:''

        }
    },
    methods:{

        addSkill(){
            this.skills.push({title:this.title});
        },
        RemoveSkill(index){
            this.skills.splice(index,1);

        }


    }

};
</script>
