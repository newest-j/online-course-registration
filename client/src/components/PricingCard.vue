<template>
  <div class="bg-background p-4 rounded-md">
    <h1 class="bg-accent py-1 text-text1 rounded-sm text-center">{{ planname }}</h1>
    <div class="flex justify-center">
      <div class="text-text1 font-bold md:text-6xl text-4xl">${{ price }}</div>
      <div class="text-text2">/{{ duration }}</div>
    </div>
    <div class="flex flex-col rounded-md">
      <div class="bg-primary px-6 pt-2 pb-6">
        <h1 class="font-bold text-center text-text1">Available Features</h1>
        <ul>
          <li
            v-for="(feature, index) in features"
            :key="index"
            class="flex items-center rounded-sm gap-2 border border-background p-1"
          >
            <span>
              <CheckIcon class="size-4 bg-orange-200" v-if="feature.included" />
              <XMarkIcon class="size-4 bg-orange-200" v-else />
            </span>
            <span class="text-text2">{{ feature.text }}</span>
          </li>
        </ul>
      </div>
      <button class="text-center py-2 text-primary bg-accent rounded-sm">Get Started</button>
    </div>
  </div>
</template>

<script setup lang="ts">
import { CheckIcon, XMarkIcon } from '@heroicons/vue/16/solid'
interface Feature {
  text: string
  included: boolean
}
interface Props {
  planname: string
  price: string
  duration: string
  features: Feature[]
}
defineProps<Props>()
</script>

<style scoped></style>
