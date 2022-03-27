import { createApp } from "vue";
import EditSummary from "./components/EditSummary.vue";
import SummaryBox from "./components/SummaryBox";
import PersonalInfo from "./components/PersonalInfo";
import EditPersonalInfo from "./components/EditPersonalInfo";

const app = createApp({
    
    data(){
        return{

        }
    }

});

app.component("SummaryBox",SummaryBox);
app.component("EditSummary",EditSummary);
app.component("PersonalInfo",PersonalInfo);
app.component("EditPersonalInfo",EditPersonalInfo);
app.mount('#root');

  