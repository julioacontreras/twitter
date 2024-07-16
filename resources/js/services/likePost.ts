import { Post } from '@/Types/post'
import { API_URL } from './api'

export const likePost = async (post: Post): Promise<void> => {
  await fetch(`${API_URL}/post/like/${post.id}`, { method: 'PUT'})
}