<template>
    <div class="box-content edit-box">
        <div class="col-12 mt-5 mb-5">
           
            <span class="skill-item">
               <span class="p-1">PHP</span>
            <i class="fa fa-remove"></i>   

            </span>
    
            <span class="skill-item">
               <span class="p-1">PHP</span>
            <i class="fa fa-remove"></i>   

            </span>
    
         
           
        </div>
        <div class="col-12 mt-5">
            <input class="w-25" type="text" name="skill_title">
            <button type="button" class="add-btn">+</button>
        </div>
        <div class="col-sm-12 text-left p-5">
            <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                انصراف
            </button>
            <button class="save-btn m-1">ذخیره</button>
        </div>
    </div>
</template>

<script>
export default {};
</script>
