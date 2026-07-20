<script setup>
import PostItem from "./PostItem.vue";

defineProps({

  posts: Array

})

const post1 = {
  user: {
    id: 1,
    avatar: "https://i.pravatar.cc/150?img=1",
    name: "John Doe",
  },
  group: null,
  attachment: [
    {
      id: 1,
      name: "image1.jpg",
      url: "https://picsum.photos/1000",
      mime: "image/jpeg",
    },
    {
      id: 2,
      name: "image2.jpg",
      url: "https://picsum.photos/1000",
      mime: "image/jpeg",
    },
    {
      id: 3,
      name: "document.docs",
      url: "https://example.com/document.pdf",
      mime: "application/docs",
    },
  ],
  body: `
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    `,
  created_at: "2024-06-01 15:12",
};

const post2 = {
  user: {
    id: 2,
    avatar: "https://i.pravatar.cc/150?img=2",
    name: "Jane Smith",
  },
  group: {
    id: 1,
    name: "Vue.js Enthusiasts",
  },
  body: `
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    `,
  created_at: "2024-06-01 15:12",
};
</script>

<template>
  <div class="overflow-auto h-full">
    <PostItem v-for="post of posts" :key="post.id" :post="post" />
  </div>
</template>

<style scoped></style>
