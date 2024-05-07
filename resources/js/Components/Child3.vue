<script setup>

const props = defineProps({
    data: Object
})
console.log(props.data);
</script>

<template> 
   
    <h1>This is Child3 component</h1>
    <p>Child3 shared_data: {{ props.data.shared_data}}</p>
</template>

<style scoped></style>