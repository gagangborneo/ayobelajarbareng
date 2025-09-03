<template>
  <div class="flex flex-col h-screen bg-gray-100">

    <!-- Kolom Pesan -->
    <div
        ref="chatBox"
        class="flex-1 overflow-y-auto p-4 space-y-4"
    >
      <div
        v-for="(msg, index) in messages"
        :key="index"
        :class="msg.from === 'me' ? 'flex items-start justify-end space-x-2' : 'flex items-start space-x-2'"
      >
        <!-- Avatar lawan -->
        <div
          v-if="msg.from !== 'me'"
          class="w-8 h-8 rounded-full bg-gray-300"
        ></div>

        <!-- Bubble -->
        <div
          :class="[
            'rounded-lg p-3 shadow max-w-xs',
            msg.from === 'me'
              ? 'bg-blue-500 text-white'
              : 'bg-white text-gray-800'
          ]"
        >
          <p class="text-sm">{{ msg.text }}</p>
          <span
            :class="msg.from === 'me' ? 'text-xs text-gray-200' : 'text-xs text-gray-400'"
          >
            {{ msg.time }}
          </span>
        </div>

        <!-- Avatar kita -->
        <div
          v-if="msg.from === 'me'"
          class="w-8 h-8 rounded-full bg-gray-300"
        ></div>
      </div>
    </div>

  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from "vue";

const chatBox = ref(null);
const newMessage = ref("");
const messages = ref([
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
  { from: "other", text: "Halo, apa kabar?", time: "10:00" },
  { from: "me", text: "Baik, bagaimana denganmu?", time: "10:01" },
  { from: "other", text: "Aku juga baik, lagi ngopi nih 😁", time: "10:02" },
  { from: "me", text: "Mantap, aku juga baru selesai kerja 💻", time: "10:03" },
]);

function scrollToBottom() {
  nextTick(() => {
    if (chatBox.value) {
      chatBox.value.scrollTop = chatBox.value.scrollHeight;
    }
  });
}

function sendMessage() {
  if (newMessage.value.trim() === "") return;
  messages.value.push({
    from: "me",
    text: newMessage.value,
    time: "Sekarang",
  });
  newMessage.value = "";
  scrollToBottom();
}

onMounted(() => {
  scrollToBottom();
});
</script>
