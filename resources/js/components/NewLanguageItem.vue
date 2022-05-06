<template>
<div class="edit-box">

    <div class="row p-5">
        <div class="col-lg-4">
            <label for="">نام زبان</label>
            <input type="text" name="language_name" class="input-field" v-model="languageName">
        
        </div>
        <div class="col-lg-4">
            <label for="">سطح تسلط</label>
            <select name="level"  v-model="level">
                <option value="beginner">مبتدی</option>
                <option value="intermediate">متوسط</option>
                <option value="professional">حرفه ای</option>
                <option value="native">زبان مادری</option>
            </select>
        </div>
        
            <div class="col-sm-12 text-left p-1">

                 <button v-on:click="$emit('closeForm')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1" v-on:click="addLanguage">ذخیره</button>
            </div>
    </div>

</div>
    
</template>



<script>
import axios from 'axios';
export default {
    data() {
        return {
            languageName:'',
            level:'beginner',
        }
    },

    methods: {
        addLanguage(){
             
            axios.post('/add-language',{
                "language":this.languageName,
                "level":this.level

            }).then(Response => {
                console.log(Response.data);
                this.$emit('closeForm');
                this.$emit('update');
            });


        }
    },
}
</script>


