<template>
  <div class="flex justify-between items-center">
    <div>
      <h1 class="font-bold text-2xl sm:text-4xl text-text1">{{ title }}</h1>
      <p class="text-text2">{{ description }}</p>
    </div>
    <div>
      <slot />
    </div>
  </div>
</template>

<script setup lang="ts">
interface Props {
  title: string
  description: string
}
defineProps<Props>()
</script>

<style scoped></style>
