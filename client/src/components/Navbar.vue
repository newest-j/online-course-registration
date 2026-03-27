<template>
  <div class="max-w-7xl m-auto flex items-center justify-center gap-4 bg-accent">
    <div class="flex items-center gap-2 text-sm sm:text-base">
      <div>
        <p class="text-primary">Free Course</p>
      </div>
      <div>
        <StarIcon class="size-3 text-yellow-100" />
      </div>
      <div>
        <p class="text-primary">Sale Ends Soon, Get it Now</p>
      </div>
    </div>

    <div><ArrowRightIcon class="text-primary size-4" /></div>
  </div>
  <nav class="sticky py-3 bg-primary">
    <div class="max-w-7xl m-auto lg:px-20 sm:px-6 px-4">
      <div class="flex justify-between gap-8">
        <!-- logo -->
        <router-link to="/">
          <img class="max-w-10 h-auto" src="@/assets/images/Logo.png" alt="logo image" />
        </router-link>

        <!-- desktop nav -->
        <div class="md:flex items-center w-full justify-between">
          <div class="hidden md:flex gap-4">
            <router-link
              class="text-text2 hover:text-accent transition-colors duration-200"
              :class="{ 'border-b-2 border-accent': $route.path === link.path }"
              v-for="link in navlink"
              :to="link.path"
              :key="link.path"
            >
              {{ link.name }}
            </router-link>
          </div>

          <div class="flex justify-end gap-4 items-center">
            <router-link
              class="text-text2 hover:text-accent transition-colors duration-200"
              :class="[
                { 'border-b-2 border-accent': $route.path === link.path },
                link.name === 'Login'
                  ? 'bg-accent hover:text-primary rounded-sm px-4 py-2  border-none'
                  : '',
              ]"
              v-for="link in navauth"
              :to="link.path"
              :key="link.path"
            >
              {{ link.name }}
            </router-link>
          </div>
        </div>

        <!-- bar button -->
        <button @click="isMenuOpen = !isMenuOpen" class="md:hidden">
          <Bars3Icon v-if="!isMenuOpen" class="size-4 text-text1" />
          <XMarkIcon v-else class="size-4 text-text1" />
        </button>

        <button @click="toggleDark" class="hidden md:block">
          <SunIcon v-if="isDark" class="size-5 text-text1" />
          <MoonIcon v-else class="size-5" />
        </button>
      </div>

      <!-- mobile nav -->
      <div v-if="isMenuOpen" class="md:hidden">
        <div class="flex flex-col gap-4 pt-3">
          <router-link
            @click="isMenuOpen = false"
            class="text-text1 hover:text-accent transition-colors duration-200"
            :class="{ 'border-l-2 border-accent pl-2 ': $route.path === link.path }"
            v-for="link in navlink"
            :to="link.path"
            :key="link.path"
          >
            {{ link.name }}</router-link
          >

          <button @click="toggleDark">
            <SunIcon v-if="isDark" class="size-5 text-text1" />
            <MoonIcon v-else class="size-5" />
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { ArrowRightIcon, MoonIcon, SunIcon } from '@heroicons/vue/24/outline'
import { StarIcon, Bars3Icon, XMarkIcon } from '@heroicons/vue/24/solid'
import type NavLink from '@/typescript/navlink'

import { onBeforeMount, ref } from 'vue'

const isMenuOpen = ref<boolean>(false)
const isDark = ref<boolean>(document.documentElement.classList.contains('dark'))
const toggleDark = (): void => {
  document.documentElement.classList.toggle('dark')
  isDark.value = !isDark.value

  localStorage.setItem('theme', isDark.value ? 'dark' : 'light')
}

onBeforeMount(() => {
  if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark')
    isDark.value = true
  }
})
const navlink: NavLink[] = [
  { name: 'Home', path: '/' },
  { name: 'Courses', path: '/course' },
  { name: 'About Us', path: '/about-us' },
  { name: 'Pricing', path: '/pricing' },
  { name: 'Contact', path: '/contact' },
]
const navauth: NavLink[] = [
  { name: 'Sign Up', path: '/sign-up' },
  { name: 'Login', path: '/login' },
]
</script>

<style scoped></style>
