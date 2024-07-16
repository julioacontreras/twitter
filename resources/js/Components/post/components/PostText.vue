<script setup lang="ts">
import type { Post } from '../../../Types/post'
const props = defineProps<Post>()
</script>

<template>
  <section>
    <p class="text-4xl capitalize text-gray-800 w-1/3">{{ props.title }}</p>
    <p class="text-xl text-gray-500">{{ props.description }}</p>
  </section>
</template>