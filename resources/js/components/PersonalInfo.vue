<template>
    <div  class="box mt-5 personal-info">
        <div class="box-header" 
        >
            <h5>
                <i class="fa fa-solid fa-user"></i>

                اطلاعات فردی
            </h5>
        </div>
            <edit-personal-info v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-personal-info>

        <div v-show="!showEditForm" class="box-content"
               v-on:mouseenter="showEditBtn=!showEditBtn"
          v-on:mouseleave="showEditBtn=!showEditBtn"
              >
            <div class="row">
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">آدرس ایمیل</h5>
                        <span class="item-value"> reza.salam90@gmail.com </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">استان محل سکونت</h5>
                        <span class="item-value"> خوزستان </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت تعهل</h5>
                        <span class="item-value"> مجرد </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">جنسیت</h5>
                        <span class="item-value"> مرد </span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">شماره موبایل</h5>
                        <span class="item-value"> 09371234567 </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">آدرس محل سکونت</h5>
                        <span class="item-value"> اهواز </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">سال تولد</h5>
                        <span class="item-value"> 1372 </span>
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت خدمت سربازی</h5>
                        <span class="item-value"> پایان خدمت </span>
                    </div>
                </div>
            </div>

            <button v-on:click="showEditForm=true" 
            v-show="showEditBtn" class="position-absolute edit-btn">
                <i class="fa fa-pencil" aria-hidden="true"></i>

                ویرایش
            </button>
        </div>
    </div>


</template>
<script>
import EditPersonalInfo from './EditPersonalInfo.vue'
export default {
  components: { EditPersonalInfo },

    data(){
        return{

            showEditBtn:false,
            showEditForm:false


        }
    }


}
</script>
