<script setup lang="ts">
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
</script>

<template>
  <div class="min-h-screen bg-background transition-colors duration-300">
    <Navbar />
    <main>
      <router-view />
    </main>
    <Footer />
  </div>
</template>

<style scoped></style>
