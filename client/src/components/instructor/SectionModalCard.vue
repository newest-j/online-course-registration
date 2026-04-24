<template>
  <div>
    <!-- model button -->
    <button
      @click="isOpen = true"
      class="flex items-center gap-3 text-primary rounded-sm bg-text1 p-2"
    >
      <PlusIcon class="size-4" />
      <span>Add Section</span>
    </button>

    <!-- model -->

    <div v-if="isOpen" class="fixed flex items-center justify-center inset-0 p-2 z-1">
      <!-- overlay -->
      <div class="absolute inset-0 bg-text1/50" @click="isOpen = false"></div>

      <!-- the model box -->
      <div class="bg-primary w-full max-w-md p-4 rounded-md z-2">
        <div class="flex justify-between items-start">
          <div>
            <h1 class="text-text1 font-medium text-lg">Add New Section</h1>
            <p class="text-text2 mt-2 mb-5">Create a new section for your course content</p>
          </div>
          <div>
            <XMarkIcon class="size-4" @click="isOpen = false" />
          </div>
        </div>

        <h1 class="text-text1 font-medium mb-1">Section Title</h1>
        <input
          type="text"
          placeholder="e.g., Introduction to Javascript"
          class="bg-gray-200 rounded-sm w-full focus:outline-none focus:ring-4 focus:ring-background placeholder-background"
        />

        <div class="flex justify-end items-center mt-3 gap-1">
          <button @click="isOpen = false" class="p-1 rounded-sm border border-background">
            Cancel
          </button>
          <button class="rounded-sm text-primary p-1 bg-text1">Add Section</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { PlusIcon, XMarkIcon } from '@heroicons/vue/16/solid'

const isOpen = ref<boolean>(false)
</script>

<style scoped></style>
