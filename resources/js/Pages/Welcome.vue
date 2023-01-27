<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({

});

</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="flex flex-col space-y-6 justify-center items-center w-[93%] sm:w-1/4">
            <div>
                <h1 class="text-2xl font-bold text-gray-700">Baghani Residents</h1>
            </div>
            <Link :href="route('login')" class="w-full text-center text-xl  font-semibold tracking-wide rounded-lg px-8 py-2 shadow bg-white border">Proceed To Your Account</Link>
            <Link :href="route('register')" class="w-full text-center text-xl  font-semibold tracking-wide rounded-lg px-8 py-2 shadow bg-black text-white">Become A Member</Link>
        </div>
    </div>
</template>
