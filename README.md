

## 🕌 AyoBelajarBareng

Proyek ini adalah platform blog Islami berbasis Laravel yang memungkinkan penulisan dan publikasi konten Islami seperti tafsir, hadits, doa, dan materi dakwah. Sistem ini mendukung fitur kategori, komentar, reaksi (polls), slider beranda, dan manajemen status artikel.

---

## 📦 Fitur Utama

* ✅ **Postingan Blog**: Artikel dengan judul, isi, cover, meta SEO, dan status publikasi.
* 📂 **Kategori**: Mengelompokkan artikel sesuai topik Islami (Tafsir, Hadits, Fiqih, dll).
* 💬 **Komentar**: Komentar oleh pengunjung, dengan status moderasi.
* ❤️ **Reaksi Polls**: Reaksi sederhana (like, love, dll) sebagai feedback pembaca.
* 🖼️ **Slider**: Tampilan konten pilihan di beranda dengan status aktif.
* 🔍 **SEO Meta**: Metadata untuk deskripsi dan keyword artikel.

---

## 🧩 Struktur Utama

| Fitur    | Tabel        | Model      |
| -------- | ------------ | ---------- |
| Post     | `posts`      | `Post`     |
| Kategori | `categories` | `Category` |
| Komentar | `comments`   | `Comment`  |
| Reaksi   | `reactions`  | `Reaction` |
| Slider   | `sliders`    | `Slider`   |

---

## 🚦 Routing Utama

| URL                | Fungsi                        |
| ------------------ | ----------------------------- |
| `/`                | Menampilkan semua post        |
| `/post/{slug}`     | Menampilkan detail post       |
| `/category/{slug}` | Menampilkan post per kategori |
| `/sliders`         | Menampilkan slider aktif      |

---
