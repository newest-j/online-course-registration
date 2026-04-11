<template>
  <div class="p-4 bg-primary rounded-md">
    <div class="flex justify-end font-extrabold text-text1">
      <h1 class="md:text-6xl text-4xl">{{ heading }}</h1>
    </div>
    <p class="text-text1 font-bold my-6">{{ title }}</p>
    <div class="flex flex-col gap-3">
      <div
        class="flex items-center p-3 border border-background hover:border-accent hover:border-3 group"
        v-for="(lesson, index) in lessons"
        :key="index"
      >
        <div>
          <p class="font-semibold">{{ lesson }}</p>
          <span class="text-text2">Lesson 0{{ index + 1 }}</span>
        </div>
        <div class="flex items-center text-text2 bg-background p-2 group-hover:bg-accent">
          <ClockIcon class="size-4" />
          <span>{{ duration }}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ClockIcon } from '@heroicons/vue/24/outline'
interface Props {
  heading: number
  title: string
  lessons: string[]
  duration: string
}
defineProps<Props>()
</script>

<style scoped></style>
