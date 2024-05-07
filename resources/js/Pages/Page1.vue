<script setup>
import AppNavBar from '@/Components/AppNavBar.vue';
import Child1 from '@/Components/Child1.vue';
const props = defineProps({
    data: Object
})
//console.log(props.data.child);
</script>

<template> 
    <AppNavBar/>
    <h1> Page Title: {{ props.data.title}}</h1>
    <p> Page Description: {{ props.data.description}}</p>
    <Child1 :data="props.data.child"/>
</template>

<style scoped></style>