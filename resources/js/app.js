import { createApp } from "vue";
import axios from 'axios'
import VueAxios from 'vue-axios'
import { createI18n } from 'vue-i18n'

import EditSummary from "./components/EditSummary.vue";
import ImageUploader from "./components/ImageUploader.vue";
import SummaryBox from "./components/SummaryBox.vue";
import PersonalInfo from "./components/PersonalInfo.vue";
import EditPersonalInfo from "./components/EditPersonalInfo.vue";
import AboutMe from "./components/AboutMe.vue";
import EditAboutMe from "./components/EditAboutMe.vue";
import MySkills from "./components/MySkills.vue";
import EditMySkills from "./components/EditMySkills.vue";
import LastJobs from "./components/LastJobs.vue";
import JobItem from "./components/JobItem.vue";
import EditJobItem from "./components/EditJobItem.vue";
import NewJobItem from "./components/NewJobItem.vue";
import EducationHistory from "./components/EducationHistory.vue";
import EducationItem from "./components/EducationItem.vue";
import EditEducationItem from "./components/EditEducationItem.vue";
import NewEducation from "./components/NewEducation.vue";
import MyLanguages from "./components/MyLanguages.vue";
import LanguageItem from "./components/LanguageItem.vue";
import EditLanguageItem from "./components/EditLanguageItem.vue";
import NewLanguageItem from "./components/NewLanguageItem.vue";
import Modal from "./components/Modal.vue";
import ModalItem from "./components/ModalItem.vue";



const app = createApp({
    
    data(){
        return{

        }
    }

});
 

const messages = {
    en: {
      message: {
        better_job: 'better_job'
      }
    },
    fa: {
      message: {
        better_job: 'به دنبال شغل بهتر',
        hello: 'به دنبال شغل بهتر',
      }
    }
  }


const i18n = createI18n({
    locale: 'fa', // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
   
  })

app.component("SummaryBox",SummaryBox);
app.component("ImageUploader",ImageUploader);
app.component("EditSummary",EditSummary);
app.component("PersonalInfo",PersonalInfo);
app.component("EditPersonalInfo",EditPersonalInfo);
app.component("AboutMe",AboutMe);
app.component("EditAboutMe",EditAboutMe);
app.component("MySkills",MySkills);
app.component("EditMySkills",EditMySkills);
app.component("LastJobs",LastJobs);
app.component("JobItem",JobItem);
app.component("EditJobItem",EditJobItem);
app.component("NewJobItem",NewJobItem);
app.component("EducationHistory",EducationHistory);
app.component("EducationItem",EducationItem);
app.component("EditEducationItem",EditEducationItem);
app.component("NewEducation",NewEducation);
app.component("MyLanguages",MyLanguages);
app.component("LanguageItem",LanguageItem);
app.component("EditLanguageItem",EditLanguageItem);
app.component("NewLanguageItem",NewLanguageItem);
app.component("Modal",Modal);
app.component("ModalItem",ModalItem);

app.use(VueAxios, axios) 
app.use(i18n) 
app.mount('#root');

  