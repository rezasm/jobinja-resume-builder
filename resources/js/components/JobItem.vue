<template>
    <div
        v-show="!showEditForm"
        v-on:click="showEditForm = true"
        v-on:mouseenter="this.showEditBtn = true"
        v-on:mouseleave="this.showEditBtn = false"
        class="job-item box-content"
    >
        <h6 class="job-title">{{ job.job_title }}</h6>
        <span class="company">{{ job.company }} </span>

        <span>از</span>
        <span>{{ job.start_year }}</span>
        <span>تا</span>
        <span>{{ job.end_year }}</span>

        <button
            v-on:click="showEditForm = true"
            v-show="showEditBtn"
            class="position-absolute edit-btn"
        >
            <i class="fa fa-pencil" aria-hidden="true"></i>

            ویرایش
        </button>
    </div>
    <transition>
    <edit-job-item
        v-show="showEditForm"
        v-on:cancel="showEditForm = false"
        v-on:joblistupdate="$emit('updatejobs')"
        :job="job"
    ></edit-job-item>
    
    </transition>
</template>

<script>
export default {
    props: ["job"],
    data() {
        return {
            showEditForm: false,
            showEditBtn: false,
        };
    },
};
</script>
