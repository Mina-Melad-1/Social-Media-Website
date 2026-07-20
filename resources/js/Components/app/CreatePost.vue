<script setup>
import { ref } from "vue";
import InputTextarea from "@/Components/InputTextarea.vue";
import { useForm } from "@inertiajs/vue3";

const newPostForm = useForm({
  body: "",
});
defineProps({});

const newPost = ref({
  body: "",
});

function submit() {
  newPostForm.post(route("posts.store"), {
    onSuccess: () => {
      newPostForm.reset();
    },
  });
}
</script>

<template>
  <div class="p-4 bg-white rounded-lg border mb-4">
    <InputTextarea
      class="w-full min-h-[80px] resize-none rounded-2xl border border-gray-300 bg-white px-4 py-3 text-gray-700 placeholder-gray-400 shadow-sm transition-all duration-200 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100 hover:border-gray-400"
      placeholder="Click here to create a new post"
      @click="creatingPost = true"
      v-model="newPostForm.body"
    />
    <div v-if="creatingPost" class="flex gap-2 justify-between">
      <button
        type="button"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 relative"
      >
        Attach Files
        <input type="file" class="absolute left-0 top-0 right-0 bottom-0 opacity-0" />
      </button>
      <button
        @click="submit"
        type="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
      >
        Submit
      </button>
    </div>
  </div>
</template>

<style scoped></style>
