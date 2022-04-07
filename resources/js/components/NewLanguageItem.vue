<template>
<div class="edit-box">

    <div class="row p-5">
        <div class="col-lg-4">
            <label for="">نام زبان</label>
            <input type="text" name="language_name" class="input-field">
        
        </div>
        <div class="col-lg-4">
            <label for="">سطح تسلط</label>
            <select name="level" >
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
                <button class="save-btn m-1">ذخیره</button>
            </div>
    </div>

</div>
    
</template>



<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>


