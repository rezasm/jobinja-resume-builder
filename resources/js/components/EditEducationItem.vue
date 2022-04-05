<template>

     <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">رشته تحصیلی</label>
                <input name="field" class="input-field" type="text" :value="education.title" />
            </div>
            <div class="col-lg-6">
                <label for="">نام دانشگاه</label>
                <input name="university" class="input-field" type="text" :value="education.company" />
            </div>

                            <div>تاریخ شروع و پایان تحصیل</div>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label" for=""> از سال</label>
                <div class="col-lg-4">

                <input type="text" class="input-field">
                </div>

              
            </div>
            <div class="form-group row mt-1">

                <label class="col-lg-2 col-form-label" for=""> تا سال</label>
                <div class="col-lg-4">

                <input type="text" class="input-field">
                </div>

              
            </div>
           

            <div class="col-lg-10 mt-1">
                <label for="">توضیحات</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
 

            <div class="col-sm-12 text-left p-5">

                <button class="delete-btn" v-on:click="removeItem">
                    <i class="fa fa-remove"></i>
                    حذف
                    
                    </button>

                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1">ذخیره</button>
            </div>
        </div>
    </div>
        
    
</template>


<script>
export default {
    props:['education'],
    data() {
        return {
            
        }
    },
}
</script>