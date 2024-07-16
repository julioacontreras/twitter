<script setup lang="ts">
import type { Post } from '../../../types/post'
const props = defineProps<Post>()
</script>

<template>
  <section class="bg-white rounded-md p-3 w-[600px]">
    <img class="rounded-md" />
    <video v-if="props.video" class="w-full" controls>
      <source :src="props?.video.url" :type="`video/${props?.video.type}`">
      Your browser does not support the video tag.
    </video>
    <p class="text-4xl capitalize text-gray-800 pt-2">{{ props.title }}</p>
    <p class="text-2xl text-gray-500">{{ props.description }}</p>
  </section>
</template>