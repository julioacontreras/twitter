import {  API_URL } from './api'
import { Post, PostForm } from '../Types/post'

export const fetchCreatePost = async (form: PostForm): Promise<Post> => {
  const response = await fetch(`${API_URL}/post`,
    {
      method: 'POST',
      headers: {
        'content-type': 'application/json'
      },
      body: JSON.stringify(form)
    })
  return await response.json() as Post
}