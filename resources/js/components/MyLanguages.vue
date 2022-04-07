<template>
    <div class="box mt-5">
        <div class="box-header">
            <h5>زبان ها</h5>
        </div>

            <div class="box-content languages p-0">
           <language-item v-for="language in languages" :lang="language"></language-item>

            <new-language-item v-on:closeForm="showNewForm=false" v-show="showNewForm"></new-language-item>
            <div class="add-language">
                <button class="add-language-btn"
                v-on:click="showNewForm=true"
                >
                    + افزودن زبان
                </button>
             </div>



        </div>





    </div>
</template>

<script>

import languagesArray from '../languages.json'
export default {
    data() {
        return {
            
            languages:languagesArray,
            showNewForm:false


        };
    },
};
</script>
