# Prak-PBO
## Jawaban Soal UTS
## 1. Mampu mendemonstrasikan penyelesaian masalah dengan pendekatan matematika dan algoritma pemrograman secara tepat
Berikut adalah contoh pendekatan matematika dan algoritma pemrograman untuk mengimplementasikan fitur-fitur yang Anda sebutkan pada program website diskusi:

1. Basis Data:
Untuk menyimpan pertanyaan dan jawaban, saya menggunakan basis data relasional menggunakan SQL. Basis data ini akan memungkinkan kita untuk menyimpan dan mengelola data dengan efisien.

2. Penampilan Pertanyaan dan Jawaban:
   - Setiap pertanyaan dan jawaban dapat disimpan dalam objek yang memiliki atribut Title, question, author, dan created_at.
   - Untuk menampilkan pertanyaan dan jawaban, kita saya menggunakan Library React typescript untuk merancang tampilan yang sesuai. Pada bagian backend, Saya menggunakan bahasa pemrograman PHP sebagai restAPI yang menghubungkan data dari penyimpanan dan menyajikannya ke pengguna.

3. Membuat Pertanyaan dan Jawaban:
   - Ketika seorang pengguna ingin membuat pertanyaan atau jawaban, saya menyediakan formulir input di halaman yang relevan. Data yang dimasukkan oleh pengguna dapat dikirim ke server melalui permintaan HTTP POST.
   - Di sisi server, saya menggunakan framework Laravel untuk menangani permintaan dan menyimpan data pertanyaan atau jawaban yang baru dibuat ke penyimpanan yang sesuai.

4. Mengedit Pertanyaan dan Jawaban:
   - Ketika seorang pengguna ingin mengedit pertanyaan atau jawaban, saya menyediakan tautan atau tombol "Edit" di samping pertanyaan atau jawaban tersebut.
   - Ketika pengguna mengklik tautan atau tombol "Edit", halaman pengeditan akan ditampilkan dengan formulir yang berisi data pertanyaan atau jawaban yang ada. Pengguna dapat mengubah data yang ada dan mengirimkan permintaan HTTP POST ke server.
   - Di sisi server, diperbarui data pertanyaan atau jawaban yang ada dalam penyimpanan dengan data yang baru dikirimkan oleh pengguna.

5. Menghapus Pertanyaan dan Jawaban:
   - Ketika seorang pengguna ingin menghapus pertanyaan atau jawaban, saya ingin menyediakan tautan atau tombol "Hapus" di dalam option edit.
   - Ketika pengguna mengklik tautan atau tombol "Hapus", permintaan HTTP DELETE akan dikirimkan ke server untuk menghapus pertanyaan atau jawaban yang sesuai dengan index yang dipilih oleh pengguna.

6. Login dan Logout:
   - Untuk login, saya ingin menyediakan formulir login di halaman login yang meminta pengguna untuk memasukkan email dan kata sandi. Data tersebut akan dikirimkan ke server melalui permintaan HTTP POST.
   - Di sisi server, saya membuat logika untuk memeriksa apakah email dan kata sandi yang dimasukkan oleh pengguna cocok dengan data yang ada dalam penyimpanan. Jika cocok, kita dapat mengatur sesi login untuk pengguna dan memberikan akses ke fitur-fitur yang memerlukan otentikasi.
   - Untuk logout, saya ingin menyediakan tautan atau tombol "Logout" di halaman yang sesuai. Ketika pengguna mengklik tautan atau tombol "Logout", sesi login akan dihapus dan pengguna akan diarahkan kembali ke halaman login.

  untuk implementasi program nya dapat dilihat pada code program berikut :
tampilkan, membuat,  edit dan hapus pertanyaan  :
tampilkan, membuat,  edit dan hapus jawaban :
Login & logout  : 

## 2. Mampu menjelaskan algoritma dari solusi yang dibuat
Tentu! Berikut adalah penjelasan singkat tentang beberapa algoritma yang dapat digunakan dalam solusi yang telah dijelaskan sebelumnya:

1. Algoritma menampilkan Pertanyaan dan Jawaban:
   - Algoritma ini melibatkan langkah-langkah berikut:
     - Mengambil data pertanyaan dan jawaban dari database.
     - Mengurutkan pertanyaan dan jawaban berdasarkan id.
     - Menampilkan pertanyaan dan jawaban dalam tampilan web.

2. Algoritma Membuat Pertanyaan dan Jawaban:
   - Algoritma ini melibatkan langkah-langkah berikut:
     - Menerima data masukan dari pengguna melalui formulir.
     - Memvalidasi data masukan, misalnya, memastikan bahwa data yang dimasukkan tidak kosong atau sesuai format yang diinginkan.
     - Menyimpan data pertanyaan atau jawaban yang baru dibuat ke database.

3. Algoritma Mengedit Pertanyaan dan Jawaban:
   - Algoritma ini melibatkan langkah-langkah berikut:
     - Menerima permintaan pengguna untuk mengedit pertanyaan atau jawaban tertentu.
     - Mengambil data pertanyaan atau jawaban yang ada dari database, id pertanyaan atau jawaban sesuai pengguna yang sedang login.
     - Menampilkan formulir pengeditan yang berisi data yang ada.
     - Menerima data pengeditan dari pengguna melalui formulir.
     - Memperbarui data pertanyaan atau jawaban yang ada dengan data yang baru.

4. Algoritma Menghapus Pertanyaan dan Jawaban:
   - Algoritma ini melibatkan langkah-langkah berikut:
     - Menerima permintaan pengguna untuk menghapus pertanyaan atau jawaban tertentu.
     - Mengambil data pertanyaan atau jawaban yang ada dari database.
     - Menghapus data pertanyaan atau jawaban tersebut dari database.

5. Algoritma Login dan Logout:
   - Algoritma ini melibatkan langkah-langkah berikut:
     - Menerima data masukan dari pengguna melalui formulir login.
     - Memverifikasi data masukan dengan data login yang valid dalam database.
     - Mengatur sesi login untuk pengguna yang berhasil login.
     - Menghapus sesi login untuk pengguna yang berhasil logout.

untuk implementasi program nya dapat dilihat pada code program berikut :
tampilkan, membuat,  edit dan hapus pertanyaan  :
tampilkan, membuat,  edit dan hapus jawaban :
Login & logout  : 

## 3. Mampu menjelaskan Konsep dasar OOP
### 1. Inheritance

Inheritance adalah mekanisme dalam pemrograman berorientasi objek di mana sebuah class mewarisi properti dan metode dari class lain yang disebut superclass atau parent class. Class yang menerima warisan disebut subclass atau child class. Dengan menggunakan inheritance, kita dapat mengatur hierarki class dan mewarisi sifat-sifat umum dari class yang sudah ada, sehingga mengurangi duplikasi kode dan mempermudah pemeliharaan.

### 2. Encapsulation

Encapsulation adalah konsep dalam pemrograman OOP yang menggabungkan data dan metode dalam satu unit yang disebut objek. Dalam encapsulation, data (variabel) di dalam objek dibungkus (encapsulated) bersama metode-metode (fungsi) yang beroperasi pada data tersebut. Tujuan utama encapsulation adalah untuk menyembunyikan detail implementasi dari luar, sehingga objek hanya dapat diakses melalui metode yang telah ditentukan.

### 3. Abstraction

Abstraction adalah proses menyembunyikan detail implementasi dan hanya menampilkan fungsionalitas yang relevan. Dalam pemrograman OOP, abstraction dicapai melalui pembuatan class abstract yang tidak dapat diinstansiasi, dan class-class turunan yang mengimplementasikan fungsionalitas yang abstrak tersebut.

### 4. Polymorphism

Polymorphism adalah konsep dalam pemrograman OOP yang mengizinkan penggunaan suatu interface yang sama oleh objek-objek dengan jenis yang berbeda. Dengan polymorphism, objek-objek dengan jenis yang berbeda dapat dianggap sebagai objek dari tipe yang sama saat digunakan dalam operasi atau pemanggilan metode.

## 4. Mampu mendemonstrasikan penggunaan Encapsulation secara tepat

Link Source Code : https://github.com/MiqbalF2021/Prak-PBO-BrainlyClone/blob/main/brainly-api/app/Models/User.php

## 5. Mampu mendemonstrasikan penggunaan Abstraction secara tepat

Link Source Code : https://github.com/MiqbalF2021/Prak-PBO-BrainlyClone/blob/main/brainly-api/app/Http/Controllers/AuthenticationController.php

Pada Program diatas Interface "Authenticator" adalah contoh abstraksi dalam kode program tersebut.
Interface tersebut mendefinisikan metode yang harus diimplementasikan oleh kelas yang menggunakannya tanpa memberikan detail implementasi.
Kelas "AuthenticationController" mengimplementasikan metode-metode tersebut dengan memberikan implementasi spesifik untuk setiap metode.

## 6. Mampu mendemonstrasikan penggunaan Inheritance dan Polymorphism secara tepat

Link Source Code : https://github.com/MiqbalF2021/Prak-PBO-BrainlyClone/blob/main/brainly-api/app/Http/Controllers/AnswerController.php

## 7. Mampu menerjemahkan proses bisnis ke dalam skema OOP secara tepat. Bagaimana cara Kamu mendeskripsikan proses bisnis (kumpulan use case) ke dalam OOP

1. Identifikasi Objek:
Identifikasi objek-objek yang terlibat dalam proses bisnis. Objek-objek ini akan menjadi kelas-kelas dalam OOP. Misalnya, dalam konteks website Brainly, beberapa objek yang terlibat adalah "Pertanyaan", "Jawaban", "Pengguna", "Sesi Login", dll.

2. Identifikasi Atribut dan Metode:
Untuk setiap objek, identifikasi atribut-atribut yang relevan (data yang mereka miliki) dan metode-metode (fungsi yang dapat mereka lakukan). Misalnya, objek "Pertanyaan" dapat memiliki atribut seperti title, pertanyaan, dan created_at, serta metode seperti "update()" dan "destroy()".

3. Definisikan Kelas:
Gunakan konsep kelas dalam OOP untuk mendefinisikan kelas-kelas berdasarkan objek-objek yang diidentifikasi sebelumnya. Setiap kelas akan berisi atribut-atribut dan metode-metode yang relevan. Misalnya, Anda dapat membuat kelas "Pertanyaan" dengan atribut-atribut yang sesuai dan metode-metode seperti "update()" dan "destroy()".

4. Hubungan Antar Kelas:
Identifikasi hubungan antar kelas. Dalam OOP, hubungan ini dapat diwujudkan dalam bentuk pewarisan (inheritance), asosiasi (association), atau komposisi (composition). Misalnya, kelas "Jawaban" mungkin memiliki hubungan asosiasi dengan kelas "Pertanyaan" karena setiap jawaban terkait dengan satu pertanyaan.

## 8. Mampu menjelaskan rancangan dalam bentuk Class Diagram, dan Use Case table
### Class Diagram
```mermaid
 class Controller {
        <<abstract>>
        +handleRequest()
    }
    
    class QuestController {
        -quest: Quest
        +createQuest()
        +editQuest()
        +deleteQuest()
    }
    
    class AnswerController {
        -answer: Answer
        +createAnswer()
        +editAnswer()
        +deleteAnswer()
    }
    
    class AuthController {
        -user: User
        +login()
        +logout()
    }
    
    class User {
        -userId: int
        -username: string
        -password: string
        +getUserInfo()
    }
    
    class Answer {
        -answerId: int
        -content: string
        -createdAt: datetime
        -user: User
        +editContent()
        +deleteAnswer()
    }
    
    class Quest {
        -questId: int
        -title: string
        -content: string
        -createdAt: datetime
        -user: User
        +editTitle()
        +editContent()
        +deleteQuest()
    }
    
    Controller <|-- QuestController
    Controller <|-- AnswerController
    Controller <|-- AuthController
    AuthController *-- User
    QuestController *-- Quest
    AnswerController *-- Answer
```


### UseCase Table
| No | UseCase | Prioritas (%) | terimplementasi |
|---------|---------|---------|---------|
| 1 | User dapat mengajukan pertanyaan    | 10   | Y |
| 2 | User dapat menjawab pertanyaan    | 10    | Y |
| 3 | User dapat mengedit pertanyaanya    | 9    | Y |
| 4 | User dapat menghapus pertanyaannya    | 9    | Y |
| 5 | User dapat mengedit jawabannya    | 9    | Y |
| 6 | User dapat menghapus jawabannya    | 9    | Y |
| 7 | User dapat login    | 7    | Y |
| 8 | User dapat logout    | 7   | Y |
| 9 | dapat menampilkan pertanyaan dan jawaban  | 9    | Y |

## 9. Mampu memberikan gambaran umum aplikasi kepada publik menggunakan presentasi berbasis video

Link Vidio : https://youtu.be/TrvG1pSM2bU

## 10. Inovasi UX

