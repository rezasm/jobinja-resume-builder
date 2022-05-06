<template>
    <div  class="box mt-5 personal-info">
        <div class="box-header" 
        >
            <h5>
                <i class="fa fa-solid fa-user"></i>

                اطلاعات فردی
            </h5>
        </div>

        <transition>
            <edit-personal-info :person="person" v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-personal-info>
        
        </transition>
        <transition>
        
        <div v-show="!showEditForm" class="box-content" v-on:click="showEditForm=true" 
               v-on:mouseenter="showEditBtn=!showEditBtn"
          v-on:mouseleave="showEditBtn=!showEditBtn"
              >
            <div class="row">
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">آدرس ایمیل</h5>
                        <span class="item-value"> {{person.email ?? ''}} </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">استان محل سکونت</h5>
                        <span class="item-value"> {{person.province ?? ''}} </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت تعهل</h5>
                        <span class="item-value"> {{ person.married == 0 ? 'مجرد' : 'متاهل' }} </span>
                    </div>  
                    <div class="item">
                        <h5 class="item-title">جنسیت</h5>
                        <span class="item-value"> {{person.gender == 'male' ? 'مرد' : 'زن'}} </span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">شماره موبایل</h5>
                        <span class="item-value"> {{person.phone}} </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">آدرس محل سکونت</h5>
                        <span class="item-value"> {{person.address}} </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">سال تولد</h5>
                        <span class="item-value"> {{person.birth_year}} </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت خدمت سربازی</h5>
                        <span class="item-value"> {{person.military_service_status}} </span>
                    </div>
                </div>
            </div>

            <button v-on:click="showEditForm=true" 
            v-show="showEditBtn" class="position-absolute edit-btn">
                <i class="fa fa-pencil" aria-hidden="true"></i>

                ویرایش
            </button>
        </div>
        </transition>
    </div>


</template>
<script>
import axios from 'axios';
export default {
 

    data(){
        return{

            showEditBtn:false,
            showEditForm:false,
            person:[],
            
        }
    },

    mounted() {
        
        axios.get('/get-personal-info').then(Response =>{
            this.person = Response.data.person;
           
        });
 
 
 
 },
    


}
</script>
