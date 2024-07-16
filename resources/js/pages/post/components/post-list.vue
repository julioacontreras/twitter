<script setup lang="ts">
import { onMounted, ref, computed } from 'vue'
import { usePost } from '../composable/use-post'
import Post from './post.vue'

const { isLoading, posts, loadPosts, hasError, filter } = usePost()
const search = ref('')

onMounted(() => {
  loadPosts()
})

const resultPosts = computed(() => {
  return filter(search.value)
})
</script>

<template>
  <section class="min-w-[600px]">
    <div class="bg-white rounded-md p-3">
      <input type="text" v-model="search" placeholder="Search..." class="border rounded-md w-full p-3" />
    </div>
    <p class="pt-6"></p>
    <div v-if="hasError">
      Ops... Have some error, try un a couple minutes.
    </div>
    <div v-else-if="isLoading">
      Loading...
    </div>
    <div v-else class="flex flex-col gap-12 ">
      <Post v-bind="post" v-for="post in resultPosts" :key="`post-${post.id}`" />
    </div>
  </section>
</template>