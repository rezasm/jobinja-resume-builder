<template>
    <div
        class="language-item"
        v-on:mouseenter="showEditButton = true"
        v-on:mouseleave="showEditButton = false"
        v-on:click="showEditForm = true"
        v-show="!showEditForm"
    >
        <h6 class="language-title">
            {{lang.title}}:
            <span class="level">{{lang.level}}</span>
        </h6>
        <button class="position-absolute edit-btn" v-show="showEditButton">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            ویرایش
        </button>
    </div>

    <edit-language-item
        v-on:cancel="showEditForm = false"
        v-show="showEditForm"
    ></edit-language-item>
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
