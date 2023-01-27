<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="flex flex-col space-y-6 justify-center items-center">
            <div>
                <h1 class="text-xl font-bold text-gray-700">Baghani Residents Organization</h1>
            </div>
            <Link :href="route('register')" class="w-full text-center text-lg rounded-lg px-8 py-2 shadow bg-black text-white">Become A Member</Link>
            <Link :href="route('login')" class="w-full text-center text-lg rounded-lg px-8 py-2 shadow bg-white border">Proceed To Your Account</Link>
        </div>
    </div>
</template>
