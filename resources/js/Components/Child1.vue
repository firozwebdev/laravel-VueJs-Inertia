<script setup>

const props = defineProps({
    data: Object
})
console.log(props.data);
</script>

<template> 
    
    <h3>This is Child Component.</h3>
    <h4>Page Name: {{ props.data.title}}</h4>
    <p>Page Description: {{ props.data.description}}</p>
    <p>Page Url: {{ props.data.url}}</p>
</template>

<style scoped></style>