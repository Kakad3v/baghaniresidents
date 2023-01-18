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
<h1 class="text-4xl text-[#F0ECCF]">Coming Soon...</h1>
    </div>
</template>
