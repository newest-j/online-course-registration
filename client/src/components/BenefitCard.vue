<template>
  <div class="bg-primary p-6">
    <div class="flex justify-end font-extrabold text-text1">
      <h1 class="md:text-6xl text-4xl mb-3">{{ heading }}</h1>
    </div>
    <h3 class="font-bold text-text1">{{ title }}</h3>
    <p class="text-text2">{{ description }}</p>

    <!-- arrowup shift -->
    <div class="flex justify-end mt-3">
      <div class="inset-shadow-sm inset-shadow-background/30 p-6 rounded-sm">
        <ArrowUpRightIcon class="size-6 text-accent" />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ArrowUpRightIcon } from '@heroicons/vue/16/solid'
interface Props {
  heading: number
  title: string
  description: string
}
defineProps<Props>()
</script>

<style scoped></style>
