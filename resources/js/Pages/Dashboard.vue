<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <div class="px-4 sm:px-0 text-gray-900 space-y-3">
                       <Link :href="route('household.members.add', $page.props.auth.user)">Add Household Member</Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
