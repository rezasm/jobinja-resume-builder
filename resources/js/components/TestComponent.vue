<template>
    <div>

        this is a test template the value is {{this.value}}
    </div>
</template>

<script>
export default {
    
    data() {
        return {
            value:2        
        }
    },

    created(){
        alert(1);
    }



}
</script>