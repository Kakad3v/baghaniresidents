<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        user: Object
    })

    const form = useForm({
        name: '',
        email: '',
        phone: '',
        identification: '',
        gender: '',
        type: '',
        password: '',
        password_confirmation: '',
        terms: false,
    });

    const submit = () => {
        form.post(route('household.members.store', { user: props.user }), {
            onFinish: () => form.reset(),
        });
    };
</script>
<template>
    <Head title="Members" />
    <AuthenticatedLayout>
      <div class="py-6 bg-gray-50 h-[90vh]">
        <div class="sm:px-6 lg:px-8 flex justify-center">
            <form @submit.prevent="submit" class="w-[90%] sm:w-1/3 space-y-2">
                <h1 class="text-lg text-gray-800 tracking-wide font-semibold">Add Household Member</h1>
                <div class="flex flex-col space-y-1">
                    <label for="name" class="text-sm text-gray-600">Relationship</label>
                    <select v-model="form.type" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                        <option value="">Choose</option>
                        <option value="spouse">Spouse</option>
                        <option value="child">Child</option>
                        <option value="sibling">Sibling</option>
                        <option value="other">Other</option>
                    </select>
                    <span v-if="form.errors.type">{{ form.errors.type }}</span>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="name" class="text-sm text-gray-600">Name</label>
                    <input type="text" v-model="form.name" placeholder="Member name" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                    <span v-if="form.errors.name">{{ form.errors.name }}</span>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="email" class="text-sm text-gray-600">Email</label>
                    <input type="email" v-model="form.email" placeholder="Member email" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                    <span v-if="form.errors.email">{{ form.errors.email }}</span>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="phone" class="text-sm text-gray-600">Phone Number</label>
                    <input type="text" v-model="form.phone" placeholder="Member phone" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                    <span v-if="form.errors.phone">{{ form.errors.phone }}</span>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="identification" class="text-sm text-gray-600">Identification</label>
                    <input type="text" v-model="form.identification" placeholder="Member identification" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                    <span v-if="form.errors.identification">{{ form.errors.identification }}</span>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="name" class="text-sm text-gray-600">Gender</label>
                    <select v-model="form.gender" class="border-gray-100 rounded-lg text-gray-600 shadow-xs">
                        <option value="">Choose</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span v-if="form.errors.gender">{{ form.errors.gender }}</span>
                </div>
                <div>
                    <button class="w-full bg-black text-white py-2 rounded-lg font-bold text-lg shadow-sm">Add Member</button>
                </div>
            </form>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>

