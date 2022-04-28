<template>

     <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">رشته تحصیلی</label>
                <input name="field" class="input-field" type="text" v-model="education.field_title" />
            </div>
            <div class="col-lg-6">
                <label for="">نام دانشگاه</label>
                <input name="university" class="input-field" type="text"   v-model="education.university" />
            </div>

            <div>مقطع تحصیلی</div>
            <div class="col-lg-12">
                <span class="mt-5" v-for="degree in degrees">
                <label for="">{{degree.title}}</label>
                <input type="radio" name="degree" :value="degree.value" v-model="education.degree">
                    
                </span> 




                 </div>
            

                            <div>تاریخ شروع و پایان تحصیل</div>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label" for=""> از سال</label>
                <div class="col-lg-4">

                <input type="text" class="input-field" v-model="education.start_year">
                </div>

              
            </div>
            <div class="form-group row mt-1">

                <label class="col-lg-2 col-form-label" for=""> تا سال</label>
                <div class="col-lg-4">

                <input type="text" class="input-field" v-model="education.end_year">
                </div>

              
            </div>
           

            <div class="col-lg-10 mt-1">
                <label for="">توضیحات</label>
                <textarea name="description" id="" cols="30" rows="5" v-model="education.description"></textarea>
            </div>
 

            <div class="col-sm-12 text-left p-5">

                <button class="delete-btn" v-on:click="removeItem">
                    <i class="fa fa-remove"></i>
                    حذف
                    
                    </button>

                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1" v-on:click="saveData">ذخیره</button>
            </div>
        </div>
    </div>
        
    
</template>


<script>

import degreesArray from '../degree.json';
import axios from 'axios';
export default {
    props:['education'],
    data() {
        return {
            degrees:degreesArray,
            degreeOption:'',

        }
    },

    methods: {
        saveData(){

            axios.post('/update-education-item',{"education":this.education}).then(Response => {

                console.log(Response.data);
                this.$emit('cancel');

            });



        },
        removeItem(){


            axios.post('/delete-education-item',{"education":this.education}).then(Response => {

                this.$emit('cancel');
                this.$emit('deleteItem');
                

            });




        }

    },
}
</script>