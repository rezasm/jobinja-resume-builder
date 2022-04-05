<template>

       <div class="box mt-5 skills">
                    <div class="box-header">
                        <h5>
                            مهارت های حرفه ای
                        </h5>
                    </div>

                    <div v-show="!showEditForm" 
                    class="box-content" v-on:click="showEditForm=true" 
                    v-on:mouseenter="showEditBtn=true"
                    v-on:mouseleave="showEditBtn=false"
                    >
                        <div class="col-12 mt-5 mb-5">
                            <a class="skill-item" href="#">
                                PHP
                            </a>
                            <a class="skill-item" href="#">
                                LARAVEL
                            </a>
                            <a class="skill-item" href="#">
                                HTML
                            </a>
                            <a class="skill-item" href="#">
                                CSS
                            </a>
                            <a class="skill-item" href="#">
                                JQUERY
                            </a>

                            <button v-show="showEditBtn"  v-on:click="showEditForm=true"
                            class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>

                        </div>
                    </div>

                        <edit-my-skills v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-my-skills>


                </div>

        
    
</template>


<script>
export default {
    data() {
        return {
            showEditBtn:false,
            showEditForm:false,
        }
    },
}
</script>

