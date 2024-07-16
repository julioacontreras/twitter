<script setup lang="ts">
import type { Post } from '../../../types/post'

const props = defineProps<Post>()
</script>

<template>
  <section>
    {{ props.title }}
  </section>
</template>
