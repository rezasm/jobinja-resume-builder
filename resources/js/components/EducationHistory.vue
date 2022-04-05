<template>

     <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            سوابق تحصیلی
                        </h5>
                    </div>

                    
                    <div class=" education p-0">                    

                        <education-item v-for="education in educationItems" :education="education"></education-item>

                        <div class="add-education">
                            <button class="add-education-btn">+ ایجاد سابقه تحصیلی </button>
                        </div>



                    </div>
                </div>
        
</template>
    
<script>
    import educationArray from '../education.json'
export default {
    data() {
        return {
            educationItems:educationArray,
        }
    },
}
</script>

