<script setup lang="ts">

</script>

<template>
  <form name="signIn" method="POST" class="w-[400px] bg-white rounded-md p-6">
    <div class="flex flex-col gap-3 w-full items-center pt-3 pb-6">
      <p class="text-gray-700 font-bold text-3xl">Sign In</p>
      <input type="text" placeholder="Username" required class="p-3 rounded-md border w-full" />
      <input type="email" placeholder="Email" required class="p-3 rounded-md border w-full" />
      <div class="pt-6">
        <button type="submit"
          class="bg-purple-500 text-white rounded-lg py-2 px-4 ease-in duration-300 hover:scale-105">Sign
          In</button>
      </div>
    </div>
  </form>
</template>