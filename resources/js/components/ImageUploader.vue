<template>
    <div class="text-center avatar-col col-md-2">
        <img
            
            class="picture-icon bg-transparent border-0 p-0"
            :src="url ?? src"
            v-if="src"
            v-on:click="this.$refs.fileInput.click"
        />
        <div
            v-if="!src"
            class="picture-icon"
            v-on:click="this.$refs.fileInput.click"
        >
            <i class="fa fa-solid fa-user"></i>
        </div>

        <label
 
            class="btn t mt-1 w-100 upload-image-btn"
            for="UploadAvatar"
            ref="fileInput"
        >
            آپلود عکس
        </label>

        <form
            v-on:submit="SubmitForm"
            method="post"
            enctype="multipart/form-data"
        >
            <input
                v-on:change="fileUpload"
                style="display: none"
                type="file"
                name="avatar"
                id="UploadAvatar"
            />

            <button v-if="showSaveBtn" class="save-btn" type="submit">
                ذخیره
            </button>

            <button
                v-if="showSaveBtn"
                class="cancel-btn"
                v-on:click="showSaveBtn = false"
            >
                انصراف
            </button>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    props: ["src"],

    data() {
        return {
            url: null,
            showSaveBtn: false,
            image:null,
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },

    methods: {
        fileUpload(e) {
            const file = e.target.files[0];
            this.image = e.target.files[0];
            this.url = URL.createObjectURL(file);
            this.showSaveBtn = true;
        },

        SubmitForm(e) {
            e.preventDefault();
            let data = new FormData();
            data.append("image", this.image);
            data.append("csrf_token", this.csrf);
            axios.post("save-image", data).then((Response) => {
                console.log(Response.data);
                this.showSaveBtn = false;
            });
        },
        saveImage() {
            axios.post("save-image", { file: this.url }).then((Response) => {
                console.log(Response.data);
                this.showSaveBtn = false;
            });
        },
    },
};
</script>
