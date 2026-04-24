<template>
  <div>
    <!-- model button -->
    <button
      @click="isOpen = true"
      class="flex justify-center items-center gap-3 text-text1 rounded-sm border border-background py-1"
    >
      <PlusIcon class="size-4" />
      <span>Add Lesson</span>
    </button>

    <!-- model -->
    <div v-if="isOpen" class="inset-0 flex justify-center items-center fixed">
      <!-- overlay -->
      <div class="absolute inset-0 bg-text1/50" @click="isOpen = false"></div>

      <!-- the model box -->
      <div class="w-full max-w-md max-h-[90vh] bg-primary rounded-md overflow-y-auto p-5 z-2">
        <div class="flex justify-end">
          <XMarkIcon class="size-4 text-text2" @click="isOpen = false" />
        </div>

        <h1 class="text-text1 font-medium">Lesson Title *</h1>
        <input
          type="text"
          placeholder="e.g., Variables and Data Type"
          class="bg-gray-300 px-2 rounded-sm w-full focus:outline-none focus:ring-4 focus:ring-background my-2 placeholder-background"
        />

        <h1 class="text-text1 font-medium">Description</h1>
        <input
          type="text"
          placeholder="Brief description of what the student will learn"
          class="bg-gray-300 px-2 rounded-sm w-full focus:outline-none focus:ring-4 focus:ring-background my-2 placeholder-background"
        />

        <h1 class="text-text1 font-medium">Lesson Video</h1>
        <div
          class="w-full border border-background rounded-md flex flex-col justify-center items-center p-6"
        >
          <div class="p-2 rounded-full bg-blue-300">
            <ArrowUpTrayIcon class="size-6 text-blue-500" />
          </div>

          <h1 class="text-lg font-medium mt-2 text-text1">Upload Video</h1>
          <p class="text-background my-2">MP4, MOV, AVI, or other video formats (max 500MB)</p>
          <label class="cursor-pointer border border-background p-1 rounded-sm text-text1">
            Choose video
            <input type="file" accept="video/*" class="hidden" />
          </label>
        </div>

        <div class="border border-blue-400 bg-blue-300 text-blue-700 rounded-sm my-2">
          <span class="font-bold">Note:</span>
          In a production environment, videos would be uploaded to a service like AWS S3, Google
          Cloud Storage, or a specialized video hosting platform like Vimeo or Wistia.
        </div>

        <h1 class="text-text1 font-medium">Duration (seconds)</h1>
        <input
          type="number"
          placeholder="200"
          class="bg-gray-300 px-2 rounded-sm w-full focus:outline-none focus:ring-4 focus:ring-background my-2 placeholder-background"
        />

        <div class="flex items-center justify-between w-full border border-background mb-4">
          <div>
            <h1 class="text-text1 font-bold">Free Preview</h1>
            <p class="text-background">Allow non-enrolled students to watch this lesson</p>
          </div>

          <div>
            <label class="inline-flex relative items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="w-11 h-6 rounded-full peer-checked:bg-text1 transition-colors"></div>
              <div
                class="absolute rounded-full bg-primary transition-transform peer-checked:translate-x-5"
              ></div>
            </label>
          </div>
        </div>

        <div class="flex justify-end items-center gap-1">
          <button @click="isOpen = false" class="p-1 rounded-sm border border-background">
            Cancel
          </button>
          <button class="rounded-sm text-primary p-1 bg-text1">Add Lesson</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { PlusIcon, XMarkIcon, ArrowUpTrayIcon } from '@heroicons/vue/16/solid'

const isOpen = ref<boolean>(false)
</script>

<style scoped></style>
