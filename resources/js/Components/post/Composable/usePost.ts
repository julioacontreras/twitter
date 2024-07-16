import { ref } from 'vue'
import { getPosts } from '../../../Services/getPosts'
import { Post } from '../../../Types/post'

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

  const filter = (search: string) => {
    search = search.toLowerCase()
    if (search === '') {
      return posts.value
    }
    return posts.value.filter(item => {
      return item.title.toLowerCase().includes(search) || item.description.toLowerCase().includes(search)
    })
  }

  return {
    posts,
    loadPosts,
    isLoading,
    hasError,
    filter
  }
}