<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CreatePost from '@/Components/Post/CreatePost.vue';

</script>

<template>
    <div
        class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 py-12">

        <Head title="New Post" />

        <AuthenticatedLayout>
            <CreatePost></CreatePost>
        </AuthenticatedLayout>
    </div>

</template>
