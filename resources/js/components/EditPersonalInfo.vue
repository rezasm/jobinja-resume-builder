<template>

      <div class="box-content edit-box">
            <div class="row">
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">آدرس ایمیل</h5>
                   <input type="text" name="email" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">استان محل سکونت</h5>
                   <input type="text" name="province" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت تعهل</h5>
                   <input type="text" name="marrage" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">جنسیت</h5>
                   <input type="text" name="gender" class="input-field">
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">شماره موبایل</h5>
                   <input type="text" name="phone" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">آدرس محل سکونت</h5>
                   <input type="text" name="city" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">سال تولد</h5>
                   <input type="text" name="birth_year" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت خدمت سربازی</h5>
                   <input type="text" name="military_service" class="input-field">
                    </div>
                </div>
                
              <div class="col-sm-12 text-left p-5">
                <button v-on:click="$emit('cancel')" class="cancel-btn">انصراف</button>
                <button class="save-btn">ذخیره</button>

            </div>
            </div>

          
        </div>
 


</template>

<script>
export default {
    
}
</script>
