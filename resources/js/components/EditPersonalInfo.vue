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

                         <label class="m-1" for="single">مجرد</label>
                         <input type="radio" class="m-1" name="marrage" id="single">
                         
                         
                         <label for="married" class="m-1">متاهل</label>
                         <input type="radio" class="m-1" name="marrage" id="married">

                    </div>
                    <div class="item">
                        <h5 class="item-title">جنسیت</h5>

                        
                         <label class="m-1" for="male">مرد</label>
                         <input type="radio" class="m-1" name="gender" id="male">
                         
                         
                         <label for="female" class="m-1">زن</label>
                         <input type="radio" class="m-1" name="gender" id="female">


              
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <h5 class="item-title">شماره موبایل</h5>
                   <input type="text" name="phone" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">آدرس محل سکونت <small>(اختیاری)</small></h5>
                   <input type="text" name="city" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">سال تولد</h5>
                   <input type="text" name="birth_year" class="input-field">
                    </div>
                    <div class="item">
                        <h5 class="item-title">وضعیت خدمت سربازی</h5>
                        <select  class="input-field" name="sarbazi" id="">
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
                <button class="save-btn m-1">ذخیره</button>

            </div>
            </div>

          
        </div>
 


</template>

<script>
export default {
    
}
</script>
