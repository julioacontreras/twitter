<script setup lang="ts">
import { computed } from 'vue'
import type { Post } from '../../../Types/post'
import PostImage from './PostImage.vue'
import PostVideo from './PostVideo.vue'
import PostText from './PostText.vue'

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
