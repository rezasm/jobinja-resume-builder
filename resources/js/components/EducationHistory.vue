<template>
    <div class="box mt-5">
        <div class="box-header">
            <h5>سوابق تحصیلی</h5>
        </div>

        <div class="education p-0">
            <education-item
                v-on:updateList="fetchEducationList"
                v-for="education in educationItems"
                :education="education"

            ></education-item>

            <transition>
            <new-education
                v-on:closeForm="showNewEducationForm = false"
                v-show="showNewEducationForm"
                v-on:updatedata="fetchEducationList"
            ></new-education>
            </transition>

            <div class="add-education" v-on:click="showNewEducationForm = true">
                <button class="add-education-btn">+ ایجاد سابقه تحصیلی</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            showNewEducationForm: false,
            educationItems: [],
        };
    },
    methods: {
        fetchEducationList(){
              axios.get("/get-educations").then((Response) => {
            this.educationItems = Response.data;
        });
        }
    },
    mounted() {
      this.fetchEducationList();
    },
};
</script>
