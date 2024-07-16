import { ref } from 'vue'
import { getPosts } from '../../../Services/getPosts'
import { fetchCreatePost } from '../../../Services/createPost'
import { Post, PostForm } from '../../../Types/post'

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

  const createPost = async (form: PostForm) => {
    await fetchCreatePost(form)
    loadPosts()
  }

  return {
    posts,
    loadPosts,
    createPost,
    filter,
    isLoading,
    hasError
  }
}