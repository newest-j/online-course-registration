<template>
  <div class="max-w-7xl m-auto flex items-center justify-center gap-4 bg-accent">
    <div class="flex items-center gap-2">
      <div>
        <p class="text-white">Free Course</p>
      </div>
      <div>
        <StarIcon class="size-3 text-yellow-100" />
      </div>
      <div>
        <p class="text-white">Sale Ends Soon, Get it Now</p>
      </div>
    </div>

    <div><ArrowRightIcon class="text-white size-4" /></div>
  </div>
  <nav class="sticky py-3">
    <div class="max-w-7xl m-auto lg:px-14 sm:px-6 px-4">
      <div class="flex justify-between">
        <!-- logo -->
        <router-link to="/">
          <img class="size-10" src="@/assets/images/Logo.png" alt="logo image" />
        </router-link>

        <!-- desktop nav -->
        <div class="hidden md:flex items-center w-full justify-between">
          <div>
            <router-link v-for="link in navlink" :to="link.path" :key="link.path">
              {{ link.name }}
            </router-link>
          </div>

          <div>
            <router-link v-for="link in navauth" :to="link.path" :key="link.path">
              {{ link.name }}
            </router-link>
          </div>
        </div>

        <!-- bar button -->
        <button @click="isMenuOpen = !isMenuOpen" class="md:hidden">
          <Bars3Icon v-if="!isMenuOpen" class="size-4" />
          <XMarkIcon v-else class="size-4" />
        </button>
      </div>

      <!-- mobile nav -->
      <div v-if="isMenuOpen" class="md:hidden">
        <div class="flex flex-col">
          <router-link
            @click="isMenuOpen = false"
            v-for="link in navlink"
            :to="link.path"
            :key="link.path"
          >
            {{ link.name }}</router-link
          >
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { ArrowRightIcon } from '@heroicons/vue/24/outline'
import { StarIcon, Bars3Icon, XMarkIcon } from '@heroicons/vue/24/solid'
import type NavLink from '@/typescript/navlink'

import { ref } from 'vue'

const isMenuOpen = ref<boolean>(false)
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
