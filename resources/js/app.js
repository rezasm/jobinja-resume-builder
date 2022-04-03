import { createApp } from "vue";
import EditSummary from "./components/EditSummary.vue";
import SummaryBox from "./components/SummaryBox.vue";
import PersonalInfo from "./components/PersonalInfo.vue";
import EditPersonalInfo from "./components/EditPersonalInfo.vue";
import AboutMe from "./components/AboutMe.vue";
import EditAboutMe from "./components/EditAboutMe.vue";
import MySkills from "./components/MySkills.vue";
import EditMySkills from "./components/EditMySkills.vue";

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
app.component("AboutMe",AboutMe);
app.component("EditAboutMe",EditAboutMe);
app.component("MySkills",MySkills);
app.component("EditMySkills",EditMySkills);
app.mount('#root');

  