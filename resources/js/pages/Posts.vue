<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PostList from '@/Components/post/components/post-list.vue';
</script>

<template>
    <div
        class="flex flex-col items-center justify-center bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 py-12">

        <Head title="Posts" />

        <AuthenticatedLayout>

            <PostList></PostList>
        </AuthenticatedLayout>

    </div>

</template>
