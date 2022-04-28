<template>

         <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">رشته تحصیلی</label>
                <input name="field" class="input-field" type="text" v-model="field" />
            </div>
            <div class="col-lg-6">
                <label for="">نام دانشگاه</label>
                <input name="university" class="input-field" type="text"  v-model="university" />
            </div>

            <div>مقطع تحصیلی</div>
            <div class="col-lg-12 mt-5 mb-1">
                <span class="mt-5" v-for="degree in degrees">
                <label for="">{{degree.title}}</label>
                <input type="radio" name="degree" :value="degree.value"  v-model="degreeOption">
                    
                </span> 
                            
                 </div>
            

                            <div>تاریخ شروع و پایان تحصیل</div>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label" for=""> از سال</label>
                <div class="col-lg-4">

                <input type="text" class="input-field" v-model="start_year">
                </div>

              
            </div>
            <div class="form-group row mt-1">

                <label class="col-lg-2 col-form-label" for=""> تا سال</label>
                <div class="col-lg-4">

                    <input type="text" class="input-field" v-model="end_year">
                
                </div>
                    <div class="col-lg-2">
                    <input type="checkbox" v-model="is_studying" >
                    <label for="">در حال تحصیلم</label>
                    </div>

              
            </div>
           

            <div class="col-lg-10 mt-1">
                <label for="">توضیحات</label>
                <textarea name="description" id="" cols="30" rows="5" v-model="description"></textarea>
            </div>

            <div class="col-sm-12 text-left p-5">

                 <button v-on:click="$emit('closeForm')" class="cancel-btn m-1">
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

function initialState(){
    return {
                   degrees:degreesArray,
                field:'',
                university:'',
                degreeOption:'',
                start_year:'',
                end_year:'',
                is_studying:0,
                description:''
    }
}
export default {

        data() {
            return initialState();
        },

        methods: {
            saveData(){

                axios.post('/save-education',{

                    "field":this.field,
                    "university":this.university,
                    "degree":this.degreeOption,
                    "start_year":this.start_year,
                    "end_year":this.end_year,
                    "is_studying":this.is_studying,
                    "description":this.description,


                }).then(Response => {

                    console.log(Response.data);
                    this.$emit('closeForm');
                    this.$emit('updatedata');

                    Object.assign(this.$data,initialState());


                });



            }
        },



}
</script>