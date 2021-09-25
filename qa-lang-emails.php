<?php

/*	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org
	
	File: qa-lang/de/qa-lang-emails.php
	Version: 1.8
	Date: 2019-09-19
	Description: Language phrases for email notifications in German
	Translation: Peter Chiochetti, Moritz Bunkus, Philip Schilling, Corinna Baldauf, Fulgor@github


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
'a_commented_body' => "Balasan Anda di ^site_title telah menerima komentar baru dari ^c_handle: \n\n ^open ^c_content ^close. \n\nBalasan Anda adalah:\n\n ^open ^c_context ^close \n\nAnda dapat membalas dengan komentar Anda sendiri:\n ^url \n\nTerima kasih \n\n ^site_title ",
'a_commented_subject' => 'Balasan Anda di ^site_title telah menerima komentar baru',
'a_followed_body' => "Jawaban Anda di ^site_title menerima pertanyaan serupa baru dari ^q_handle:\n\n^open ^q_title ^close. \n\nJawaban Anda adalah:\n\n^open ^a_content ^close \n\nSilakan klik tautan berikut untuk menjawab pertanyaan baru: \n^url \n\nTerima kasih\n\n^site_title ",
'a_followed_subject' => 'Jawaban Anda di ^site_title memiliki pertanyaan serupa',
'a_selected_body' => "Selamat! Jawaban Anda di ^site_title terpilih sebagai yang terbaik oleh ^s_handle:\n\n^open ^a_content ^close \n\nPertanyaannya adalah:\n\n^open ^q_title ^close \n\nSilakan klik tautan berikut untuk melihat jawabannya: \n^url \n\nTerima kasih\n\n^site_title ",
'a_selected_subject' => 'Jawaban Anda di ^site_title terpilih sebagai yang terbaik!',
'c_commented_body' => "Di ^site_title ^c_handle meninggalkan komentar baru setelah komentar Anda:\n\n^open ^c_content ^close \n\nDi sini Anda dapat menemukan percakapan:\n\n^open ^c_context ^close \n\nAnda dapat membalas dengan komentar Anda sendiri: \n^url \n\nTerima kasih\n\n^site_title ",
'c_commented_subject' => 'Komentar Anda di ^site_title telah ditambahkan ke',
                'confirm_body' => "Silahkan klik link berikut untuk mengkonfirmasi alamat email Anda di ^site_title: \n^url \n\nKode konfirmasi: ^code \n\nTerima kasih\n\n^site_title",
'confirm_subject' => '^site_title - konfirmasi alamat email',
'feedback_body' => "Komentar: \n^message \n\nNama: \n^name \n\nE-Mail: \n^email \n\nHalaman sebelumnya: \n^before \n\nAkun: \n^url \n\ alamat nIP: \n^ip \n\nBrowser: \n^browser ",
'feedback_subject' => '^feedback',
'new_password_body' => "Di bawah ini Anda akan menemukan kata sandi baru Anda untuk ^site_title. \n\nSandi: ^password \n\nSilakan ubah kata sandi ini saat Anda masuk lagi nanti. \n\nTerima kasih\n\n^site_title \n^url",
'new_password_subject' => '^site_title - kata sandi baru Anda',
'remoderate_body' => "Tulisan yang diubah oleh ^p_handle memerlukan persetujuan Anda yang diperbarui:\n\n^open ^p_context ^close \n\nKlik di bawah untuk menyetujui atau menolak perubahan:\n\n^url\n\n\nKlik di bawah untuk memeriksa perubahan yang tertunda:\n\n^a_url\n\n\nTerima kasih\n\n^site_title ",
'remoderate_subject' => '^moderate site_title',
'u_registered_body' => "Akun baru telah terdaftar sebagai ^u_handle. \n\nKlik di bawah untuk melihat profil:\n\n^url \n\nTerima kasih\n\n^site_title",
'u_to_approve_body' => "Akun baru telah terdaftar sebagai ^u_handle. \n\nKlik di bawah untuk mengonfirmasi:\n\n^url \n\nKlik di bawah ini untuk melihat semua aplikasi yang tertunda:\n\n^a_url \n\nTerima kasih\n\n^site_title ",
'u_registered_subject' => '^site_title memiliki akun baru',
'u_approved_body' => "Anda dapat melihat profil baru Anda di sini:\n\n^url \n\nTerima kasih\n\n^site_title",
'u_approved_subject' => 'Akun ^site_title Anda telah disetujui',
'wall_post_subject' => 'Tulis di pinboard Anda ^site_title',
'wall_post_body' => "^f_handle tulis di cork board anda di ^site_title:\n\n^open ^post ^close \n\nAnda dapat membalas di sini:\n\n^url \n\nTerima kasih\n\n^site_title ",
'q_answered_body' => "^a_handle menjawab pertanyaan Anda di ^site_title:\n\n^open ^a_content ^close \n\nPertanyaan Anda adalah:\n\n^open ^q_title ^close \n\nJika jawabannya bagus Anda dapat memilihnya sebagai yang terbaik: \n^url \n\nTerima kasih\n\n^site_title ",
'q_answered_subject' => 'Pertanyaan Anda di ^site_title telah dijawab',
'q_commented_body' => "^c_handle mengomentari pertanyaan Anda di ^site_title:\n\n^open ^c_content ^close \n\nPertanyaan Anda adalah:\n\n^open ^c_context ^close \n\nAnda dapat menggunakan a Balas komentar Anda sendiri: \n^url \n\nTerima kasih\n\n^site_title ",
'q_commented_subject' => 'Pertanyaan Anda di ^site_title memiliki komentar baru',
'q_posted_body' => "^q_handle memposting pertanyaan baru\n\n^open ^q_title\n\n^q_content ^close \n\nKlik link berikut untuk melihat pertanyaan: \n^url \n\nTerima kasih\n\n^site_title ",
'q_posted_subject' => 'Ada pertanyaan baru di ^site_title',
'reset_body' => "Silahkan klik link berikut untuk mereset password Anda untuk ^site_title: \n^url \n\nAtau, Anda dapat memasukkan kode di bawah ini pada kolom di website. \n\nCode: ^code \n\nJika Anda tidak ingin mengatur ulang kata sandi Anda, abaikan saja email ini. \n\nTerima kasih\n\n^site_title ",
'reset_subject' => '^site_title - setel ulang kata sandi',
'welcome_body' => "Terima kasih telah mendaftar dengan ^site_title.\n\n^custom ^confirmation \nDetail login Anda adalah: \n\nAkun: ^handle \nE-Mail: ^email \nSandi: ^password \n\nHarap simpan informasi ini dengan aman. \n\nTerima kasih\n\n^site_title \n^url ",
'welcome_confirm' => "Silakan klik link berikut untuk mengkonfirmasi alamat email Anda: \n^url \n",
'welcome_subject' => 'Selamat datang di ^site_title!',
'flagged_body' => "Sebuah kiriman dari ^p_handle menerima ^flag:\n\n^open ^p_context ^close \n\nKlik tautan berikut untuk melihat kiriman: \n^url \n\nKlik di bawah untuk memeriksa semua yang tertunda posting yang ditandai \n^a_url \n\nTerima kasih\n\n^site_title ",
'flagged_subject' => '^site_title telah menandai sebuah pos',
'private_message_body' => "Anda telah menerima pesan pribadi dari ^f_handle di ^site_title:\n\n^open ^message ^close.\n\n^more Terima kasih\n\n^site_title\n\n\nIn den Anda dapat menggunakan pengaturan akun Anda untuk memblokir pesan pribadi: \n^a_url ",
'private_message_info' => "Informasi selengkapnya tentang ^f_handle: \n^url \n\n",
'private_message_reply' => "Klik link untuk membalas ^f_handle dengan pesan pribadi: \n^url \n\n",
'private_message_subject' => 'Pesan dari ^f_handle di ^site_title',
'moderate_body' => "Sebuah posting dari ^p_handle memerlukan persetujuan:\n\n^open ^p_context ^close \n\nKlik link ini untuk menyetujui atau menolak posting:\n\n^url \n\nKlik Di Bawah untuk memeriksa setiap posting yang beredar \n^a_url \n\nTerima kasih\n\n^site_title ",
'moderate_subject' => '^moderate site_title',
'to_handle_prefix' => "^, \n\n",
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
