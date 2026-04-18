<template>
  <div class="bg-primary p-4">
    <div class="flex justify-between items-center">
      <div>
        <h1 class="text-text1 font-semibold">{{ title }}</h1>
        <p class="text-text2 mt-2 mb-5">{{ description }}</p>
      </div>
      <div class="relative rounded-sm p-2 hover:bg-background" ref="menu">
        <EllipsisVerticalIcon @click.stop="toggleMenu()" class="size-4 text-text1 cursor-pointer" />
        <div
          v-if="isOpen"
          class="absolute z-1 bg-primary mt-2 border border-background rounded-md right-0 w-60 h-auto text-text2"
        >
          <div class="flex items-center gap-4 p-2">
            <PencilSquareIcon class="size-4" />
            <span class="cursor-pointer">Edit details</span>
          </div>

          <div class="flex items-center gap-4 p-2">
            <Cog6ToothIcon class="size-4" />
            <span class="cursor-pointer">Manage Content</span>
          </div>

          <div class="flex items-center gap-4 border-t border-background p-2">
            <TrashIcon class="size-4" />
            <span class="text-red-500 cursor-pointer">Delete course</span>
          </div>
        </div>
      </div>
    </div>

    <div class="flex items-center gap-4 text-text2">
      <div class="flex items-center gap-2">
        <UsersIcon class="size-3" />
        <span>{{ coursestudent }} students</span>
      </div>
      <div class="flex items-center gap-2">
        <BookOpenIcon class="size-3" />
        <span>{{ numberofsections }} sections</span>
      </div>
    </div>
    <div class="flex justify-between items-center my-3">
      <div class="font-semibold">₦{{ price }}</div>
      <div class="text-primary bg-text1 rounded-sm">{{ coursemode }}</div>
    </div>
    <div class="flex justify-between items-center">
      <div class="font-medium text-text1">Published</div>
      <label class="inline-flex items-center cursor-pointer relative">
        <input type="checkbox" class="sr-only peer" />
        <div
          class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-text1 transition-colors"
        ></div>
        <div
          class="absolute size-5 bg-primary rounded-full ml-1 transition-transform peer-checked:translate-x-5"
        ></div>
      </label>
    </div>
    <div class="flex justify-between items-center text-text1 mt-3">
      <div
        class="flex items-center justify-center py-2 gap-3 p-3 px-10 border border-background rounded-sm"
      >
        <Cog6ToothIcon class="size-4" />
        <span>Content</span>
      </div>
      <div class="p-2 border border-background rounded-sm">
        <PencilSquareIcon class="size-4" />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { onBeforeUnmount, onMounted, ref, useTemplateRef } from 'vue'
import { EllipsisVerticalIcon } from '@heroicons/vue/16/solid'
import {
  BookOpenIcon,
  UsersIcon,
  Cog6ToothIcon,
  PencilSquareIcon,
  TrashIcon,
} from '@heroicons/vue/24/outline'
interface Props {
  title: string
  description: string
  coursestudent: number
  numberofsections: number
  price: number
  coursemode: string
}
defineProps<Props>()

const isOpen = ref(false)
const menuRef = useTemplateRef<HTMLElement>('menu')
const toggleMenu = (): void => {
  isOpen.value = !isOpen.value
}

const handleClickOutside = (e: MouseEvent): void => {
  if (menuRef.value && !menuRef.value.contains(e.target as Node)) {
    isOpen.value = false
  }
}
onMounted(() => {
  document.addEventListener('click', handleClickOutside)
})

onBeforeUnmount(() => {
  document.removeEventListener('click', handleClickOutside)
})
</script>

<style scoped></style>
