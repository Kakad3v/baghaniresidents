<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/vue3';

    const props = defineProps({
        members: Array
    })

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-6 bg-gray-100 h-[90vh] overflow-y-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 sm:py-6">
                <div class="">
                    <div class=" text-gray-900">
                       <Link :href="route('household.members.add', $page.props.auth.user)" class="px-3 py-1.5 border border-gray-200 sm:py-2 shadow rounded-lg bg-white">Add Household Member</Link>
                    </div>
                </div>
                <div class="grid sm:grid-cols-4 gap-4 sm:gap-6">
                    <div v-for="member in props.members" :key="member.id" class="bg-white shadow  rounded-xl">
                        <div class="divide-y">
                            <h1 class="px-4 py-3 text-lg font-semibold tracking-wide">{{ member.name }}</h1>
                            <div class="space-y-2 py-3">
                                <div class="flex justify-between px-4 py-0.5">
                                <span class="uppercase text-xs font-semibold">ID:</span>
                                <p class="font-bold">{{  member.identification  }}</p>
                            </div>
                            <div class="flex justify-between px-4 py-0.5">
                                <span class="uppercase text-xs font-semibold">Phone:</span>
                                <p class="font-bold">{{  member.phone  }}</p>
                            </div>
                            <div class="flex justify-between px-4 py-0.5">
                                <span class="uppercase text-xs font-semibold">Type:</span>
                                <p class="capitalize font-bold">{{  member.type  }}</p>
                            </div>
                            <div class="flex justify-between px-4 py-0.5">
                                <span class="uppercase text-xs font-semibold">Status:</span>
                                <p class="capitalize font-bold">{{  member.status  }}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
