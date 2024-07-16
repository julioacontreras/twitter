import {  API_URL } from './api'
import { Post } from '../types/post'

export const getPosts = async (): Promise<Post[]> => {
  const response = await fetch(`${API_URL}/post`)
  return await response.json() as Post[]
}