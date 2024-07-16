import {  API_URL } from './api'
import { Post } from '../Types/post'

export const getPosts = async (): Promise<Post[]> => {
  const response = await fetch(`${API_URL}/post`)
  return await response.json() as Post[]
}