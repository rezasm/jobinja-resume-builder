import { createApp } from "vue";
import EditSummary from "./components/EditSummary.vue";
import SummaryBox from "./components/SummaryBox";
import PersonalInfo from "./components/PersonalInfo";

const app = createApp({
    
    data(){
        return{

        }
    }

});

app.component("SummaryBox",SummaryBox);
app.component("EditSummary",EditSummary);
app.component("PersonalInfo",PersonalInfo);
app.mount('#root');

  