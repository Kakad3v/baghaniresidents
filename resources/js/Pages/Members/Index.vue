<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    defineProps({
        members: Array,
        total:String
    })
</script>

<template>
    <Head title="Members" />

    <AuthenticatedLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 sm:px-0">
                    <p>There are currently {{ total }} members registered.</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
