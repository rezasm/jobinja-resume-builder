<template>

<transition>
    <div 
        class="language-item box-content"
        v-on:mouseenter="showEditButton = true"
        v-on:mouseleave="showEditButton = false"
        v-on:click="showEditForm = true"
        v-show="!showEditForm"
    >
        <h6 class="language-title">
            {{lang.language_name}}:
            <span class="level">{{lang.level}}</span>
        </h6>
        <button class="position-absolute edit-btn" v-show="showEditButton">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            ویرایش
        </button>
    </div>

</transition>

    <transition>
    
    <edit-language-item :language="lang"
        v-on:cancel="showEditForm = false"
        v-show="showEditForm"
    ></edit-language-item>
    </transition>
</template>

<script>
export default {

    props:['lang'],
    data() {
        return {
            showEditButton: false,
            showEditForm: false,
        };
    },
};
</script>
