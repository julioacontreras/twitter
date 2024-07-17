<script setup lang="ts">
import { ref } from 'vue'
import TextInput from '../TextInput.vue'
import PrimaryButton from '../PrimaryButton.vue'
import type { PostForm } from '@/Types/post'
import { usePost } from './Composable/usePost'

const { createPost } = usePost()

enum TypeContent {
  TEXT = 0,
  IMAGE,
  VIDEO
}

const message = ref('')

const typeContent = ref<TypeContent>(TypeContent.TEXT)

const form = ref<PostForm>({
  title: '',
  description: ''
})

const create = () => {
  createPost(form.value)
  form.value.title = ''
  form.value.description = ''

  message.value = 'Post saved!'
}

const setTypeContent = (type: TypeContent) => {
  typeContent.value = type
  if (typeContent.value == TypeContent.IMAGE) {
    form.value.image_url = ''
    form.value.video_type = undefined
    form.value.video_url = undefined
  }
  if (typeContent.value == TypeContent.VIDEO) {
    form.value.video_type = ''
    form.value.video_url = ''
    form.value.image_url = undefined
  }
  if (typeContent.value == TypeContent.TEXT) {
    form.value.video_type = undefined
    form.value.video_url = undefined
    form.value.image_url = undefined
  }
}

</script>

<template>
  <section class="bg-white rounded-md p-6 w-[600px] flex flex-col gap-4">
    <p class="text-2xl text-gray-600">New post</p>

    <div class="flex justify-between">
      <div class="flex gap-2 items-center">
        <label>Text</label>
        <input @click="setTypeContent(TypeContent.TEXT)" type="Radio" v-model="typeContent"
          :checked="typeContent == TypeContent.TEXT"></input>
      </div>
      <div class="flex gap-2 items-center">
        <label>Image</label>
        <input @click="setTypeContent(TypeContent.IMAGE)" type="Radio" v-model="typeContent"
          :checked="typeContent == TypeContent.IMAGE"></input>
      </div>
      <div class="flex gap-2 items-center">
        <label>Video</label>
        <input @click="setTypeContent(TypeContent.VIDEO)" type="Radio" v-model="typeContent"
          :checked="typeContent == TypeContent.VIDEO"></input>
      </div>
    </div>

    <TextInput required name="title" placeholder="Title" v-model="form.title"></TextInput>
    <TextInput required name="description" placeholder="Description" v-model="form.description"></TextInput>


    <div v-if="typeContent == TypeContent.IMAGE" class="w-full">
      <TextInput required placeholder="Image URL" name="image_url" v-model="form.image_url" class="w-full"></TextInput>
    </div>
    <div v-if="typeContent == TypeContent.VIDEO" class="flex gap-4">
      <TextInput required class="flex-1" placeholder="Video URL" name="video_url" v-model="form.video_url"></TextInput>
      <TextInput required placeholder="Type video ex: mp4" name="video_type" v-model="form.video_type"></TextInput>
    </div>

    <div class="flex justify-end pt-6">
      <PrimaryButton @click="create">Create</PrimaryButton>
    </div>
    <p class="text-purple-600">{{ message }}</p>
  </section>
</template>