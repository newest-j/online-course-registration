<template>
  <footer class="bg-primary">
    <div class="max-w-7xl m-auto lg:px-20 sm:px-6 pt-14 pb-6">
      <div class="grid grid-cols-1 md:grid-cols-5">
        <!-- logo and contact -->
        <div class="col-span-1 md:col-span-2">
          <img class="max-w-10 h-auto mb-6" src="@/assets/images/Logo.png" alt="logo image" />
          <ul class="text-text1 space-y-2">
            <li class="flex items-center gap-2">
              <EnvelopeIcon class="size-4" />
              hello@skillbridge.com
            </li>
            <li class="flex items-center gap-2">
              <PhoneIcon class="size-4" />
              +91 91813 23 2309
            </li>
            <li class="flex items-center gap-2">
              <MapPinIcon class="size-4" />
              Somewhere in the World
            </li>
          </ul>
        </div>

        <!-- home -->
        <div>
          <h4 class="font-semibold mb-3 text-text1">Home</h4>
          <ul class="space-y-1 text-text2">
            <li v-for="link in footerhome" :key="link.path">
              <router-link
                class="hover:text-accent"
                :to="{ path: link.path, hash: `#${link.sectionid}` }"
              >
                {{ link.name }}
              </router-link>
            </li>
          </ul>
        </div>

        <!-- about -->
        <div>
          <h4 class="font-semibold mb-3 text-text1">About us</h4>
          <ul class="space-y-1 text-text2">
            <li v-for="link in footerabout" v :key="link.path">
              <router-link
                class="hover:text-accent"
                :to="{ path: link.path, hash: `#${link.sectionid}` }"
                >{{ link.name }}</router-link
              >
            </li>
          </ul>
        </div>

        <!-- social profile -->
        <div>
          <h4 class="font-semibold mb-3 text-text1">Social Profile</h4>
          <div class="flex gap-4">
            <a href="# " class="hover:text-blue-500 bg-background rounded-sm p-1 text-text1"
              ><FacebookIcon
            /></a>
            <a href="#" class="hover:text-black bg-background rounded-sm p-1 text-text1">
              <TwitterIcon
            /></a>
            <a href="#" class="hover:text-pink-500 bg-background rounded-sm p-1 text-text1"
              ><InstagramIcon
            /></a>
          </div>
        </div>
      </div>

      <div class="mt-12 pt-8 border-t border-background flex justify-center text-text2">
        <p>© 2023 Skillbridge. All rights reserved.</p>
      </div>
    </div>
  </footer>
</template>

<script setup lang="ts">
import { EnvelopeIcon, MapPinIcon, PhoneIcon } from '@heroicons/vue/24/solid'
import type FooterLink from '@/typescript/footerlink'
import FacebookIcon from './icons/FacebookIcon.vue'
import TwitterIcon from './icons/TwitterIcon.vue'
import InstagramIcon from './icons/InstagramIcon.vue'

const footerhome: FooterLink[] = [
  { name: 'Benefits', path: '/', sectionid: 'benefits' },
  { name: 'Our Courses', path: '/', sectionid: 'courses' },
  { name: 'Our Testimonials', path: '/', sectionid: 'testimonials' },
  { name: 'Our FAQ', path: '/', sectionid: 'benefits' },
]
const footerabout: FooterLink[] = [
  { name: 'Company', path: '/about-us', sectionid: 'company' },
  { name: 'Achievments', path: '/about-us', sectionid: 'achivements' },
  { name: 'Our Goals', path: '/about-us', sectionid: 'goals' },
]
</script>

<style scoped></style>
