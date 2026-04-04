<template>
  <div class="bg-primary p-6 rounded-md">
    <div class="flex justify-between items-center">
      <div>
        <h1 class="text-text1 font-bold">{{ title }}</h1>
        <p class="text-text2">{{ description }}</p>
      </div>
      <button class="text-text1 border border-background p-1">View Course</button>
    </div>

    <div class="flex gap-2 my-2">
      <img
        class="w-md h-auto"
        v-for="(image, index) in videoimages"
        :key="index"
        :src="image"
        alt=""
      />
    </div>
    <div class="flex justify-between items-center mb-4">
      <div class="flex text-text2 gap-2">
        <span class="rounded-sm border border-background p-1">{{ duration }} Weeks</span>
        <span class="rounded-sm border border-background p-1">{{ level }}</span>
      </div>
      <div class="text-text2">
        <span class="font-bold">By {{ author }}</span>
      </div>
    </div>
    <div class="rounded-md border border-background">
      <h1 class="text-text2 font-bold p-2">Curriculum</h1>
      <div class="flex divide-x divide-background py-2 px-3 border-t border-background">
        <div v-for="(curriculum, index) in curriculums" :key="index">
          <h1 class="font-extrabold md:text-4xl text-xl text-text1">0{{ index + 1 }}</h1>
          <p class="text-text2">{{ curriculum }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
interface Props {
  title: string
  description: string
  videoimages: string[]
  duration: number
  level: string
  author: string
  curriculums: string[]
}
defineProps<Props>()
</script>

<style scoped></style>
