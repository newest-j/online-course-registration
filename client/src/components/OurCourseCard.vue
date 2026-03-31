<template>
  <div class="bg-primary rounded-sm p-12">
    <img class="rounded-sm w-sm h-auto" :src="videoimage" alt="" />
    <div class="flex items-center justify-between mb-4 mt-3">
      <div class="flex text-text2 gap-2">
        <span class="rounded-sm border border-background p-1">{{ duration }} Weeks</span>
        <span class="rounded-sm border border-background p-1">{{ level }}</span>
      </div>
      <div class="text-text2">
        <span class="font-bold">By {{ author }}</span>
      </div>
    </div>
    <h1 class="text-text1 font-extrabold">{{ title }}</h1>
    <p class="text-text2 my-3">{{ description }}</p>
    <button class="py-1 w-full text-center rounded-sm bg-background text-text1">Get it Now</button>
  </div>
</template>

<script setup lang="ts">
interface Props {
  videoimage: string
  duration: number
  level: string
  author: string
  title: string
  description: string
}
defineProps<Props>()
</script>

<style scoped></style>
