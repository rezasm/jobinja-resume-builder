<template>
<div class="edit-box">

    <div class="row p-5">
        <div class="col-lg-4">
            <label for="">نام زبان</label>
            <input type="text" name="language_name" class="input-field" v-model="language.language_name">
        
        </div>
        <div class="col-lg-4">
            <label for="">سطح تسلط</label>
            <select name="level" v-model="language.level" >
                <option value="beginner">مبتدی</option>
                <option value="intermediate">متوسط</option>
                <option value="professional">حرفه ای</option>
                <option value="native">زبان مادری</option>
            </select>
        </div>


        
            <div class="col-sm-12 text-left p-1">

                <button class="delete-btn" v-on:click="removeItem">
                    <i class="fa fa-remove"></i>
                    حذف
                    
                    </button>

                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1" v-on:click="updateLanguage">ذخیره</button>
            </div>
    </div>

</div>
        
    
</template>



<script>
import axios from 'axios'
export default {
    props:['language'],
    data() {
        return {
            
        }
    },

    methods: {
        updateLanguage(){

           axios.post('/update-language-item',{

               "language":this.language

           }).then(Response => {
               console.log(Response.data);
               this.$emit('cancel');
           })  ;


        },

        removeItem(){

            axios.post('/delete-language-item',{"language":this.language}).then(Response => {

                  console.log(Response.data);
               this.$emit('cancel');
               this.$emit('update');


            });


        }
    },
}
</script>