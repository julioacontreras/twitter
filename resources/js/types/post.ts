export type Post = {
  id: number
  title: string
  description: string
  likeCount: number
  image?: {
    id: number
    url: string
  },
  video?: {
    id: number
    url: string
    type: string
  }
}