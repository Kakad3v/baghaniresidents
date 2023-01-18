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

    <div class="relative flex items-top justify-center min-h-screen bg-[#A3BB98] dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="flex items-center space-x-5">
        <h1 class="text-4xl text-[#F0ECCF]">Coming Soon...</h1>
        <!-- <Link href="/register" class="bg-[#f0eccf] text-[#A3BB98] text-2xl rounded-xl p-2 border-4 border-[#03C988]">Register</Link> -->
        </div>
    </div>
</template>
