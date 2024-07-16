import { ref } from 'vue'
import { getPosts } from '../../../services/get-posts'
import { Post } from '../../../types/post'

export const usePost = () => {
  const posts = ref<Post[]>([])
  const isLoading = ref(false)
  const hasError = ref(false)

  const loadPosts = async () => {
    try {
      posts.value = await getPosts()
      isLoading.value = false
    } catch (error) {
      hasError.value = true
    }
  }

  return {
    posts,
    loadPosts,
    isLoading,
    hasError
  }
}