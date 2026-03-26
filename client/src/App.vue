<script setup lang="ts">
import Navbar from '@/components/Navbar.vue'
</script>

<template>
  <div class="min-h-screen bg-primary transition-colors duration-300">
    <Navbar />
    <main>
      <router-view />
    </main>
  </div>
</template>

<style scoped></style>
