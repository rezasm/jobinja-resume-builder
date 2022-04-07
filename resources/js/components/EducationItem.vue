<template>

      <div class="field-item box-content"
      v-on:mouseenter="showEditBtn=true"
      v-on:mouseleave="showEditBtn=false"
      v-on:click="showEditForm=true"

      v-show="!showEditForm"
      >
                            <h6 class="field-title">{{education.field}}</h6>
                            <span class="university">{{education.university}}</span>
                            <span>از</span>
                            <span>{{education.startyear}}</span>
                            <span>تا</span>
                            <span>{{education.endyear}}</span>


                            <button v-show="showEditBtn"
                            class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>
                        </div>    
                        
                        <edit-education-item v-on:cancel="showEditForm=false" :education="education" v-show="showEditForm"></edit-education-item>
                        

</template>



<script>
export default {
    props:['education'],
    data(){
        return{
            showEditBtn:false,
            showEditForm:false,
        }
    }
}
</script>