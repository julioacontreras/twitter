<script setup lang="ts">
import type { Post } from '../../../Types/post'

const props = defineProps<Post>()

</script>

<template>
  <section class="bg-white rounded-md p-3 w-[600px]">
    <img v-if="props.image" :src="props?.image.url" class="rounded-md w-full bg-cover" />
    <p class="text-4xl capitalize text-gray-800 pt-2 pb-1">{{ props.title }}</p>
    <p class="text-2xl text-gray-500">{{ props.description }}</p>
  </section>
</template>