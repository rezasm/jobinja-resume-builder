<template>

    <transition>
      <div class="field-item box-content"
      v-on:mouseenter="showEditBtn=true"
      v-on:mouseleave="showEditBtn=false"
      v-on:click="showEditForm=true"

      v-show="!showEditForm"
      >
                            <h6 class="field-title">{{education.field_title}}</h6>
                            <span class="university">{{education.university}}</span>
                            <span> --- </span>
                            <span> از </span>
                            <span> {{education.start_year}} </span>
                            <span> تا </span>
                            <span> {{education.end_year}} </span>


                            <button v-show="showEditBtn"
                            class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>
                        </div>    
    
    </transition>
                        
                        <transition>
                        
                        <edit-education-item 
                        v-on:deleteItem="$emit('updateList')"
                        v-on:cancel="showEditForm=false" :education="education" v-show="showEditForm"></edit-education-item>
                        
                        </transition>

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