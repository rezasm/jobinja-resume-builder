<template>
    <div class="box-content edit-box">
        <div class="row">
            <div class="col-lg-6">
                <label for="">عنوان شغلی(سمت)</label>
                <input name="job_title" class="input-field" type="text" :value="job.title" />
            </div>
            <div class="col-lg-6">
                <label for="">نام شرکت</label>
                <input name="company" class="input-field" type="text" :value="job.company" />
            </div>

                            <div>تاریخ اشتغال</div>
            <div class="form-group row">

                <label class="col-lg-1 col-form-label" for="">از</label>

                <div class="col-lg-4">
                    <select name="" id="">
                        <option>ماه شروع همکاری</option>
                        <option v-for="month in months" value="{{month.title}}" >
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input class="input-field" type="text" :value="job.from" />
                </div>
            </div>
            <div class="form-group row">

                <label class="col-lg-1 col-form-label" for="">تا</label>

                <div class="col-lg-4">
                    <select name="" id="">
                        <option>ماه شروع همکاری</option>
                        <option v-for="month in months" value="{{month.title}}">
                            {{ month.title }}
                        </option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input class="input-field" type="text" :value="job.to" />
                </div>
                <div class="col-lg-2 ">
                    <input type="checkbox" name="working" id="">
                    <label for="">هنوز مشغولم</label>
                </div>
            </div>

            <div class="col-lg-10">
                <label for="">توضیحات</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
 

            <div class="col-sm-12 text-left p-5">

                <button class="delete-btn" v-on:click="removeItem">
                    <i class="fa fa-remove"></i>
                    حذف
                    
                    </button>

                <button v-on:click="$emit('cancel')" class="cancel-btn m-1">
                    انصراف
                </button>
                <button class="save-btn m-1">ذخیره</button>
            </div>
        </div>
    </div>
</template>

<script>
import monthsArray from "../months.json";
export default {
    props:['job'],

    data() {
        return {
            months: monthsArray,
        };
    },

    methods: {
        removeItem:function(){
            
        }
    },
};
</script>
