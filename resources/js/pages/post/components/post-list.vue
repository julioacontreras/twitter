<script setup lang="ts">
import { onMounted } from 'vue'
import { usePost } from '../composable/use-post'
import Post from './post.vue'

const { isLoading, posts, loadPosts, hasError } = usePost()

onMounted(() => {
  loadPosts()
})
</script>

<template>
  <section>
    <div v-if="hasError">
      Ops... Have some error, try un a couple minutes.
    </div>
    <div v-else-if="isLoading">
      Loading...
    </div>
    <div v-else>
      <Post v-bind="post" v-for="post in posts" :key="`post-${post.id}`" />
    </div>
  </section>
</template>