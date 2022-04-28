<template>
    <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">عنوان شغلی(سمت)</label>
                <input
                    name="job_title"
                    class="input-field"
                    type="text"
                    v-model="title"
                />
            </div>
            <div class="col-lg-6">
                <label for="">نام شرکت</label>
                <input
                    name="company"
                    class="input-field"
                    type="text"
                    v-model="company"
                />
            </div>

            <div>تاریخ اشتغال</div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="">از</label>

                <div class="col-lg-4">
                    <select name="" id="">
                        <option>ماه شروع همکاری</option>
                        <option
                            
                            v-for="month in months"
                            value="{{month.title}}"
                        >
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input
                        v-model="start_year"
                        class="input-field"
                        type="text"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="">تا</label>

                <div class="col-lg-4">
                    <select name="" id="">
                        <option>ماه پایان همکاری</option>
                        <option
                           
                            v-for="month in months"
                            value="{{month.title}}"
                        >
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input v-model="end_year" class="input-field" type="text" />
                </div>
                <div class="col-lg-2">
                    <input
                        v-model="is_working"
                        type="checkbox"
                        name="working"
                        id=""
                    />
                    <label for="">هنوز مشغولم</label>
                </div>
            </div>

            <div class="col-lg-10">
                <label for="">توضیحات</label>
                <textarea
                    v-model="description"
                    name="description"
                    id=""
                    cols="30"
                    rows="10"
                ></textarea>
            </div>

            <div class="col-sm-12 text-left p-5">
                <button
                    v-on:click="$emit('closenewform')"
                    class="cancel-btn m-1"
                >
                    انصراف
                </button>
                <button v-on:click="saveData" class="save-btn m-1">
                    ذخیره
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import monthsArray from "../months.json";
import axios from 'axios';

function initialState(){
    return {    
           months: monthsArray,
            title: "",
            company: "",
            start_month: "",
            start_year: "",
            end_month: "",
            end_year: "",
            is_working: "",
            description: "",
    }
};


export default {
    data() {
        return initialState();
    },

    methods: {
        saveData() {
            axios.post("/save-jobs", {

                "title":this.title,
                "company":this.company ,
                "start_month":this.start_month ,
                "start_year":this.start_year,
                "end_month":this.end_month,
                "end_year":this.end_year,
                "is_working":this.is_working,
                "description":this.description,

                }).then(Response => {
                 
                    this.$emit('closenewform');
                    this.$emit('newjob');
                     Object.assign(this.$data,initialState());
                });
        },
    },
};
</script>
