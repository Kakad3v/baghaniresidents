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

    <div
        class="relative grid place-items-center min-h-screen bg-gray-900 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
    <h1 class="text-8xl text-white">Coming soon...</h1>
    </div>
</template>
