<template>

      <div class="box-content edit-box">
            <div class="row">
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">آدرس ایمیل</h5>
                   <input type="text" name="email" class="input-field" v-model="person.email">
                    </div>
                    <div class="item">
                        <h5 class="item-title">استان محل سکونت</h5>
                   <input type="text" name="province" class="input-field" v-model="person.province" >
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت تعهل</h5>

                         <label class="m-1" for="single">مجرد</label>
                         <input type="radio" class="m-1" name="marrage" id="single" value="single" v-model="person.married" :checked="person.married == true">
                         
                         
                         <label for="married" class="m-1">متاهل</label>
                         <input type="radio" class="m-1" name="marrage" id="married" value="married" v-model="person.married" :checked="person.married == false">

                    </div>
                    <div class="item">
                        <h5 class="item-title">جنسیت</h5>

                        
                         <label class="m-1" for="male">مرد</label>
                         <input type="radio" class="m-1" name="gender" id="male" value="male" v-model="person.gender" :checked="person.gender == 'male'">
                         
                         
                         <label for="female" class="m-1">زن</label>
                         <input type="radio" class="m-1" name="gender" id="female" value="female" v-model="person.gender" :checked="person.gender == 'female'">


              
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">شماره موبایل</h5>
                   <input type="text" name="phone" class="input-field" v-model="person.phone">
                    </div>
                    <div class="item">
                        <h5 class="item-title">آدرس محل سکونت <small>(اختیاری)</small></h5>
                   <input type="text" name="city" class="input-field" v-model="person.address">
                    </div>
                    <div class="item">
                        <h5 class="item-title">سال تولد</h5>
                   <input type="text" name="birth_year" class="input-field" v-model="person.birth_year">
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت خدمت سربازی</h5>
                        <select  class="input-field" name="sarbazi" id="" v-model="person.military_service_status">
                            <option value="payankhedmat">پایان خدمت</option>
                            <option value="moafdaem">معاف دائم</option>
                            <option value="moaftahsill">معافیت تحصیلی</option>
                            <option value="darhaleanjam">درحال انجام</option>
                            <option value="mashmool">مشمول</option>
                        </select>

                    </div>
                </div>
                
              <div class="col-sm-12 text-left p-5">
                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">انصراف</button>
                <button v-on:click="saveData" class="save-btn m-1">ذخیره</button>

            </div>
            </div>

          
        </div>
 


</template>

<script>
import axios from 'axios';
export default {
    props:['person'],
    data() {
        return {
            
                // province:'',
                // email:'',
                // phone:'',
                // address:'',
                // married:'',
                // birth_year:'',
                // gender:'',
                // military_service_status:'',
         
        }
    },

    methods: {
        saveData:function(){

         
            axios.post('/save-personal-info',
            
                {
                    newPerson:this.person
                }

            ).then(Response =>{

                console.log(Response.data);
             
                this.$emit('cancel');
            });

        }
    },

}
</script>
