<script setup lang="ts">
import { computed } from 'vue'
import type { Post } from '../../../types/post'
import PostImage from './post-image.vue'
import PostVideo from './post-video.vue'
import PostText from './post-text.vue'

const props = defineProps<Post>()

const isVideo = computed(() => {
  return props.video !== null
})

const isImage = computed(() => {
  return props.image !== null
})

</script>

<template>
  <div v-if="isVideo">
    <PostVideo v-bind="props"></PostVideo>
  </div>
  <div v-else-if="isImage">
    <PostImage v-bind="props"></PostImage>
  </div>
  <div v-else>
    <PostText v-bind="props"></PostText>
  </div>
</template>
