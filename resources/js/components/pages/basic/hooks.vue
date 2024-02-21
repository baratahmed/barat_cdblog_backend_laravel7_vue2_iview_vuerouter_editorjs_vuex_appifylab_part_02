<template>
    <div>
        <h1 ref="myref">Hook tutorial</h1>
        <h2 >My name is: {{name}}</h2>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name: 'Barat'
        }
    }, 

    beforeCreate(){

    },
    created(){
        // call mostly initial data from it... 
        //data and other function is avilable but not html
    },
    mounted(){
        console.log(this.$refs.myref)
    }
}
</script>