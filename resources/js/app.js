import { createApp } from "vue";
import EditSummary from "./components/EditSummary.vue";
import TestComponent from "./components/TestComponent.vue";

const app = createApp({
    data() {
        return {
            showEditBtn: false,

            showEditForm: false,
        }
    },

    methods: {},


});

app.component("EditSummary",EditSummary);
app.component("TestComponent",TestComponent);
app.mount('#summary');
  