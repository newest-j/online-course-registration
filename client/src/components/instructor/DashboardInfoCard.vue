<template>
  <div class="border border-background rounded-md p-2 flex justify-between w-full items-center">
    <div>
      <div class="flex items-center gap-2">
        <h1 class="font-bold text-lg text-text1">{{ title }}</h1>
        <span>{{ mode }}</span>
      </div>
      <p class="text-background">{{ coursestudents }} Students enrolled</p>
    </div>
    <div>
      <div class="flex gap-2 text-text2"></div>
      <EyeIcon class="size-3" />
      <PencilSquareIcon class="size-3" />
    </div>
  </div>
</template>

<script setup lang="ts">
import { PencilSquareIcon, EyeIcon } from '@heroicons/vue/24/outline'
interface Props {
  title: string
  mode: string
  coursestudents: number
}
defineProps<Props>()
</script>

<style scoped></style>
