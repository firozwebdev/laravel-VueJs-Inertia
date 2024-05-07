<script setup>
import AppNavBar from '@/Components/AppNavBar.vue'
import Child3 from '@/Components/Child3.vue'
import { usePage } from '@inertiajs/vue3';
const page = usePage();
//console.log(page.props.data);
</script>

<template> 
    <AppNavBar/>
    <h1>This is Page3.</h1>
    <p>Page Message: {{ page.props.data.message}}</p>
    <Child3 :data="page.props.data" />
</template>

<style scoped></style>