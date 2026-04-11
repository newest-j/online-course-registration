<template>
  <div class="bg-primary p-6 rounded-md group">
    <div
      class="w-12 h-12 bg-background/50 group-hover:bg-background transition-colors rounded-sm mb-4"
    >
      <component :is="icon" class="size-6 text-accent" />
    </div>
    <h1 class="text-text1 md:text-xl text-lg mb-3">{{ title }}</h1>
    <p class="text-text2">{{ description }}</p>
  </div>
</template>

<script setup lang="ts">
import type { Component } from 'vue'

interface Props {
  title: string
  description: string
  icon: Component
}
defineProps<Props>()
</script>

<style scoped></style>
