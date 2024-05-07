<script setup>
import AppNavBar from '@/Components/AppNavBar.vue';
import { useForm, usePage } from '@inertiajs/vue3';

const  {flash}  = usePage()
//console.log(flash);

const form = useForm({
    first_name: 'test',
    last_name: 'test',
    email: 'test@gmail.com',
})

function submit() {
    form.post('/postBackRequest', {
        preserveScroll: true,
        onSuccess: () => {
            //form.reset('first_name', 'last_name', 'email')
            //console.log(page.flash) //here page.props is undefinded why?
            //console.log(flash)
        },
    });
}
</script>

<template> 
    <AppNavBar/>
    <h1>This is Page4.</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div v-if="$page.props.flash?.message" class="alert">
                    {{ $page.props.flash.message }}
                </div>
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" v-model="form.first_name" id="first_name" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" v-model="form.last_name" id="last_name" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
               
        </div>
    </div>
</template>

<style scoped></style>