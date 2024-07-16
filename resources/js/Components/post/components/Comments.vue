<script setup lang="ts">
import type { Comment } from '@/Types/comment'

const model = defineModel<Comment[]>()
</script>

<template>
  <section>
    <div class="pt-1" v-for="comment in model" :key="`comment${comment.id}`">
      <p class="text-sm text-gray-600">{{ comment.text }}</p>
    </div>
  </section>
</template>