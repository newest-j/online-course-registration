<template>
  <div>
    <div class="p-6 bg-primary rounded-t-md">
      <p>{{ description }}</p>
    </div>

    <div class="mt-0.5 px-6 py-4 flex justify-between bg-primary rounded-b-md">
      <div class="flex items-center">
        <img class="w-6 h-auto" :src="authorimage" alt="authorimage" />
        <span>{{ author }}</span>
      </div>

      <button class="bg-background rounded-sm p-2">Read Full Story</button>
    </div>
  </div>
</template>

<script setup lang="ts">
interface Props {
  description: string
  authorimage: string
  author: string
}
defineProps<Props>()
</script>

<style scoped></style>
