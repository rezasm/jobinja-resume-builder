<template>
    <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">عنوان شغلی(سمت)</label>
                <input
                    name="job_title"
                    class="input-field"
                    type="text"
                    v-model="job.job_title"
                />
            </div>
            <div class="col-lg-6">
                <label for="">نام شرکت</label>
                <input
                    name="company"
                    class="input-field"
                    type="text"
                    v-model="job.company"
                />
            </div>

            <div>تاریخ اشتغال</div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="">از</label>

                <div class="col-lg-4">
                    <select name="" id="" v-model="job.start_month">
                        <option>ماه شروع همکاری</option>
                        <option 
                        
                        v-for="month in months" 
                      >
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input
                        class="input-field"
                        type="text"
                        v-model="job.start_year"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="">تا</label>

                <div class="col-lg-4">
                    <select name="" id="" v-model="job.end_month">
                        <option>ماه پایان همکاری</option>
                        <option v-for="month in months">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input
                        class="input-field"
                        type="text"
                        v-model="job.end_year"
                    />
                </div>
                <div class="col-lg-2">
                    <input
                   
                        type="checkbox"
                        name="working"
                        id=""
                        v-model="is_working"
                        
                    />
                    <label for="">هنوز مشغولم</label>
                </div>
            </div>

            <div class="col-lg-10">
                <label for="">توضیحات</label>
                <textarea
                    name="description"
                    id=""
                    cols="30"
                    rows="10"
                    
                ></textarea>
            </div>

            <div class="col-sm-12 text-left p-5">
                <button class="delete-btn" v-on:click="removeItem">
                    <i class="fa fa-remove"></i>
                    حذف
                </button>

                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1" v-on:click="saveData">
                    ذخیره
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import monthsArray from "../months.json";
import axios from "axios";
export default {
    props: ["job"],

    data() {
        return {
            months: monthsArray,
            is_working:Boolean(this.job.is_working),
            
            
        };
    },

    methods: {
        removeItem() {
            axios
                .post("/delete-job-item", { job: this.job })
                .then(Response => {
             
                    this.$emit("cancel");
                    this.$emit("joblistupdate");

                });
        },

        saveData() {
            axios
                .post("/update-job-item", { "new_data": this.job })
                .then((Response) => {
               
                    this.$emit("cancel");
                    this.$emit('joblistupdate')
                });
        },
    },
};
</script>
