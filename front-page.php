<?php
/**
 * Template Name: Front Page SPA Landing Page
 * Description: Single Page Application Landing Page for Daydreams Massage Jakarta
 *
 * @package Daydreams_Massage_Jakarta
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO SECTION WITH SLIDE IMAGE CAROUSEL -->
    <section id="beranda" class="relative overflow-hidden bg-slate-950 text-white">
        <div class="relative min-h-[580px] sm:min-h-[640px] lg:min-h-[700px] flex items-center" id="hero-slider-container">
            <!-- Slide 1 -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100 z-10" data-slide="0">
                <img src="https://lh3.googleusercontent.com/pw/AP1GczNEnx9cL0qBmU3iJaXFqQhBzJ4TgrmVq76k2ingUwwL5PX-zNi2t1MTwWo9WuuoKe279WXhH0PORS7ndFC7K2wr-lGx8iPkIC5gEKs6Os7aDgQIvH0jDvU57rpsDJKbhBojIEhF_5cjI8Qroa40sX8u=w603-h628-s-no-gm?authuser=0" 
                     alt="Pijat Panggilan Jakarta 24 Jam Hotel & Apartemen" 
                     class="w-full h-full object-cover object-center" />
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/85 to-slate-900/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/60"></div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 z-0 pointer-events-none" data-slide="1">
                <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=80&w=1600&auto=format&fit=crop" 
                     alt="Traditional Body Massage & Relaksasi Otot" 
                     class="w-full h-full object-cover object-center" />
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/85 to-slate-900/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/60"></div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 z-0 pointer-events-none" data-slide="2">
                <img src="https://lh3.googleusercontent.com/pw/AP1GczPHp1r2NJmDB2EffXKhQlOsP0-0wQAG4uK80v37pxJ8s-OgjePGgJCEgCzL7ZC2tFFDf5PhII4HqKTCIOuYTZWecqOCegz1f--gpM0gw7SnydrLFnrQlQEcrwUs2EfF4nmLFp9EzuJL3TztnCzmKY9r=w628-h628-s-no-gm?authuser=0" 
                     alt="Reflexology & Pijat Masuk Angin" 
                     class="w-full h-full object-cover object-center" />
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/85 to-slate-900/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/60"></div>
            </div>

            <!-- Slide 4 -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 z-0 pointer-events-none" data-slide="3">
                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=1600&auto=format&fit=crop" 
                     alt="Couple Massage & Scrub Spa" 
                     class="w-full h-full object-cover object-center" />
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/85 to-slate-900/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/60"></div>
            </div>

            <!-- Hero Foreground Content -->
            <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <!-- Left Text Column -->
                    <div class="lg:col-span-8 space-y-6 text-center lg:text-left">
                        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-slate-900/80 border border-gold-500/40 text-xs font-semibold tracking-wide text-gold-400 backdrop-blur-md shadow-lg">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping inline-block"></span>
                            <span id="hero-tag-text">LAYANAN PIJAT PANGGILAN JAKARTA 24 JAM</span>
                        </div>

                        <h1 id="hero-headline" class="text-3xl sm:text-5xl lg:text-6xl font-bold font-serif tracking-tight leading-tight text-white drop-shadow-md">
                            Relaksasi Mewah & Privat <br class="hidden sm:inline">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-300 to-gold-500">
                                Di Kamar Hotel & Apartemen Anda
                            </span>
                        </h1>

                        <p id="hero-subheadline" class="text-sm sm:text-base lg:text-lg text-slate-200 max-w-2xl leading-relaxed">
                            Layanan massage & spa panggilan resmi langsung ke hotel bintang, apartemen mewah, dan hunian pribadi Anda di seluruh Jakarta. Terapis profesional bersertifikat tiba dalam 30–45 menit dengan etika, kesopanan, dan privasi terjaga 100%.
                        </p>

                        <!-- Company Profile Badge -->
                        <div class="p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800/80 backdrop-blur-md max-w-2xl text-xs sm:text-sm text-gold-200/90 flex items-start space-x-2.5 text-left">
                            <i class="fa-solid fa-certificate text-gold-400 mt-0.5 flex-shrink-0 text-sm"></i>
                            <span>
                                <strong class="text-white">PT. DAYDREAMS MASSAGE SEHAT JAKARTA</strong> — Memberikan kenyamanan, privasi, dan relaksasi total bagi pelanggan tanpa harus keluar rumah.
                            </span>
                        </div>

                        <!-- Trust Highlights -->
                        <div class="grid grid-cols-3 gap-2.5 max-w-lg pt-1 text-left">
                            <div class="bg-slate-900/75 backdrop-blur-md p-2.5 rounded-xl border border-slate-800">
                                <div class="text-gold-400 font-bold text-xs flex items-center">
                                    <i class="fa-solid fa-shield-halved mr-1.5"></i> Terapis Ahli
                                </div>
                                <p class="text-[10px] text-slate-300">Pria & Wanita Pilihan</p>
                            </div>
                            <div class="bg-slate-900/75 backdrop-blur-md p-2.5 rounded-xl border border-slate-800">
                                <div class="text-emerald-400 font-bold text-xs flex items-center">
                                    <i class="fa-solid fa-clock mr-1.5"></i> 30–45 Menit
                                </div>
                                <p class="text-[10px] text-slate-300">Tiba Cepat di Lokasi</p>
                            </div>
                            <div class="bg-slate-900/75 backdrop-blur-md p-2.5 rounded-xl border border-slate-800">
                                <div class="text-blue-400 font-bold text-xs flex items-center">
                                    <i class="fa-solid fa-star mr-1.5"></i> 100% Privat
                                </div>
                                <p class="text-[10px] text-slate-300">Aman & Terpercaya</p>
                            </div>
                        </div>

                        <!-- CTAs -->
                        <div class="pt-3 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5">
                            <a href="#admin-section"
                               class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 rounded-full text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all transform hover:-translate-y-0.5">
                                <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                                <span>Pilih Admin WhatsApp (24 Jam)</span>
                            </a>
                            <a href="#layanan"
                               class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3.5 rounded-full text-sm font-semibold text-slate-200 bg-slate-900/80 hover:bg-slate-800 border border-slate-700 backdrop-blur-md transition-all">
                                <span>Lihat Menu & Tarif</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Interactive Quick Admin Dispatch Box -->
                    <div class="lg:col-span-4">
                        <div class="bg-slate-900/90 backdrop-blur-xl p-6 rounded-3xl border border-slate-700/80 shadow-2xl space-y-4 text-left">
                            <div class="flex items-center justify-between pb-3 border-b border-slate-800">
                                <div class="flex items-center space-x-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="text-xs font-bold text-white uppercase tracking-wider">Admin Spa Online</span>
                                </div>
                                <span class="text-[10px] bg-emerald-500/20 text-emerald-400 px-2 py-0.5 rounded-full font-semibold">
                                    Buka 24 Jam
                                </span>
                            </div>

                            <p class="text-xs text-slate-300 leading-relaxed">
                                Silakan pilih admin untuk memesan atau konsultasi terapis yang ready:
                            </p>

                            <!-- Admin 1 (SISKA) -->
                            <div class="bg-slate-950/70 p-3.5 rounded-2xl border border-slate-800 hover:border-pink-500/50 transition-colors">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2.5">
                                        <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-pink-500 to-rose-600 flex items-center justify-center text-white font-bold text-xs shadow">
                                            SK
                                        </div>
                                        <div>
                                            <div class="text-xs font-bold text-white flex items-center">
                                                Admin 1 (SISKA)
                                                <span class="ml-1.5 w-1.5 h-1.5 rounded-full bg-emerald-400 inline-block"></span>
                                            </div>
                                            <div class="text-[11px] text-gold-400 font-mono">+62 895-6291-39936</div>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20panggil%20terapis%20pijat%20ke%20lokasi%20saya%20sekarang."
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-[11px] font-bold shadow transition-transform active:scale-95">
                                        <i class="fa-brands fa-whatsapp text-xs"></i>
                                        <span>Chat</span>
                                    </a>
                                </div>
                                <p class="text-[10px] text-slate-400">Siap melayani booking hotel & apartemen Jakarta</p>
                            </div>

                            <!-- Admin 2 (Mr.Erik) -->
                            <div class="bg-slate-950/70 p-3.5 rounded-2xl border border-slate-800 hover:border-gold-500/50 transition-colors">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2.5">
                                        <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-gold-500 to-amber-700 flex items-center justify-center text-slate-950 font-bold text-xs shadow">
                                            EK
                                        </div>
                                        <div>
                                            <div class="text-xs font-bold text-white flex items-center">
                                                Admin 2 (Mr.Erik)
                                                <span class="ml-1.5 w-1.5 h-1.5 rounded-full bg-emerald-400 inline-block"></span>
                                            </div>
                                            <div class="text-[11px] text-gold-400 font-mono">+62 852-2100-3849</div>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20panggil%20terapis%20pijat%20ke%20lokasi%20saya%20sekarang."
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-[11px] font-bold shadow transition-transform active:scale-95">
                                        <i class="fa-brands fa-whatsapp text-xs"></i>
                                        <span>Chat</span>
                                    </a>
                                </div>
                                <p class="text-[10px] text-slate-400">Siap melayani booking 24 jam & terapis pria/wanita</p>
                            </div>

                            <a href="#booking"
                               class="w-full block text-center py-2.5 px-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold border border-slate-700 transition-colors">
                                Isi Formulir Reservasi Online &darr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Navigation Controls -->
            <div class="absolute z-30 bottom-6 left-1/2 -translate-x-1/2 flex items-center space-x-3 bg-slate-950/80 px-4 py-2 rounded-full border border-slate-800 backdrop-blur-md">
                <button id="hero-prev-btn" aria-label="Previous Slide" class="p-1 rounded-full text-slate-400 hover:text-white transition-colors">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </button>
                <div class="flex items-center space-x-2" id="hero-dots">
                    <button class="hero-dot w-6 h-2 rounded-full bg-gold-400 transition-all" data-target="0"></button>
                    <button class="hero-dot w-2 h-2 rounded-full bg-slate-600 hover:bg-slate-400 transition-all" data-target="1"></button>
                    <button class="hero-dot w-2 h-2 rounded-full bg-slate-600 hover:bg-slate-400 transition-all" data-target="2"></button>
                    <button class="hero-dot w-2 h-2 rounded-full bg-slate-600 hover:bg-slate-400 transition-all" data-target="3"></button>
                </div>
                <button id="hero-next-btn" aria-label="Next Slide" class="p-1 rounded-full text-slate-400 hover:text-white transition-colors">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- SECTION ADMIN SPA ONLINE (24 JAM) -->
    <section id="admin-section" class="py-12 sm:py-16 px-4 sm:px-8 bg-slate-900 text-white border-b border-slate-800">
        <div class="max-w-6xl mx-auto space-y-8">
            <div class="text-center space-y-2 max-w-2xl mx-auto">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>CUSTOMER SERVICE 24 JAM</span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-bold font-serif">
                    Admin Spa Online (24 Jam)
                </h2>
                <p class="text-xs sm:text-sm text-slate-300">
                    Silakan pilih admin untuk memesan atau konsultasi terapis yang ready:
                </p>
            </div>

            <!-- Dual Admin Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Admin 1 (SISKA) -->
                <div class="bg-gradient-to-b from-slate-800/90 to-slate-950 p-6 sm:p-8 rounded-3xl border-2 border-slate-700/80 hover:border-pink-500/50 shadow-xl space-y-4 transition-all hover:shadow-2xl">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-pink-500 via-rose-500 to-rose-600 flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                SK
                            </div>
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-pink-400 bg-pink-950/60 px-2 py-0.5 rounded-full border border-pink-800">
                                    Customer Service 1
                                </span>
                                <h3 class="text-xl font-bold font-serif text-white mt-1">Admin 1 (SISKA)</h3>
                                <p class="text-xs text-emerald-400 flex items-center mt-0.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 mr-1.5 animate-ping"></span>
                                    Online Sekarang (24 Jam)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-slate-950/60 rounded-xl border border-slate-800 space-y-1 text-xs">
                        <div class="text-slate-400">Nomor WhatsApp Resmi:</div>
                        <div class="text-gold-400 font-mono font-bold text-base">+62 895-6291-39936</div>
                    </div>

                    <p class="text-xs text-slate-300 leading-relaxed">
                        Melayani booking pijat panggilan hotel, apartemen, dan perumahan di Jakarta. Konsultasi keluhan pegal, pilihan terapis wanita/pria, dan estimasi waktu sampai.
                    </p>

                    <div class="pt-2">
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20order%20terapis%20pijat%20panggilan%20Daydreams%20Massage%20sekarang."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full flex items-center justify-center py-3.5 px-5 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm shadow-lg shadow-emerald-600/30 transition-all transform hover:-translate-y-0.5">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            <span>Chat Admin SISKA (+62 895-6291-39936)</span>
                        </a>
                    </div>
                </div>

                <!-- Admin 2 (Mr.Erik) -->
                <div class="bg-gradient-to-b from-slate-800/90 to-slate-950 p-6 sm:p-8 rounded-3xl border-2 border-slate-700/80 hover:border-gold-500/50 shadow-xl space-y-4 transition-all hover:shadow-2xl">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-gold-500 via-amber-600 to-amber-700 flex items-center justify-center text-slate-950 font-bold text-xl shadow-lg">
                                EK
                            </div>
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-gold-400 bg-amber-950/60 px-2 py-0.5 rounded-full border border-amber-800">
                                    Customer Service 2
                                </span>
                                <h3 class="text-xl font-bold font-serif text-white mt-1">Admin 2 (Mr.Erik)</h3>
                                <p class="text-xs text-emerald-400 flex items-center mt-0.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 mr-1.5 animate-ping"></span>
                                    Online Sekarang (24 Jam)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-slate-950/60 rounded-xl border border-slate-800 space-y-1 text-xs">
                        <div class="text-slate-400">Nomor WhatsApp Resmi:</div>
                        <div class="text-gold-400 font-mono font-bold text-base">+62 852-2100-3849</div>
                    </div>

                    <p class="text-xs text-slate-300 leading-relaxed">
                        Melayani booking express 24 jam nonstop ke seluruh penjuru Jakarta. Fast dispatch 30-45 menit tiba di kamar hotel Anda dengan perlengkapan lengkap.
                    </p>

                    <div class="pt-2">
                        <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20order%20terapis%20pijat%20panggilan%20Daydreams%20Massage%20sekarang."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full flex items-center justify-center py-3.5 px-5 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm shadow-lg shadow-emerald-600/30 transition-all transform hover:-translate-y-0.5">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            <span>Chat Admin Mr.Erik (+62 852-2100-3849)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PROFIL PT & TENTANG KAMI -->
    <section id="tentang-kami" class="py-16 md:py-20 px-4 sm:px-8 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-6 space-y-5">
                    <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-gold-50 text-gold-800 text-xs font-semibold border border-gold-200">
                        <i class="fa-solid fa-award text-gold-600 mr-1"></i>
                        <span>LEGALITAS & KOMITMEN LAYANAN</span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold font-serif text-navy-900 leading-tight">
                        Daydreams Massage Jakarta <br />
                        <span class="text-gold-600">PT. DAYDREAMS MASSAGE SEHAT JAKARTA</span>
                    </h2>
  
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        <strong>Memberikan kenyamanan, privasi, dan relaksasi total bagi pelanggan tanpa harus keluar rumah.</strong> Menghadirkan terapis profesional bersertifikat langsung ke kamar hotel, apartemen mewah, dan hunian pribadi Anda di seluruh kawasan Jakarta.
                    </p>

                    <div class="space-y-3 text-xs sm:text-sm text-slate-700 pt-1">
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5 flex-shrink-0"></i>
                            <span><strong>100% Layanan Bersih & Profesional:</strong> Menjunjung tinggi etika kesopanan dan segala bentuk permintaan di luar standar terapi kebugaran kesehatan.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5 flex-shrink-0"></i>
                            <span><strong>Terapis Profesional Resmi:</strong> Seluruh tim terapis kami telah melalui pelatihan ketat pemijatan anatomi, sopan santun, dan higienitas.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5 flex-shrink-0"></i>
                            <span><strong>Privasi Tamu Dijamin Rapat:</strong> Identitas, alamat kamar hotel, atau nomor hunian Anda dijaga kerahasiaannya tanpa kompromi.</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=900&auto=format&fit=crop" 
                             alt="Relaksasi Spa Hotel PT Daydreams Massage Sehat Jakarta" 
                             class="w-full h-80 sm:h-96 object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/30 to-transparent flex flex-col justify-end p-6 text-white">
                            <span class="text-[11px] font-semibold text-gold-400 uppercase tracking-wider">
                                Jaminan Kepuasan & Kenyamanan
                            </span>
                            <h4 class="text-lg font-bold font-serif mt-1">Standar Bintang 5 Langsung di Kamar Anda</h4>
                            <p class="text-xs text-slate-300 mt-1">
                                Dilengkapi minyak esensial aromaterapi impor, kain/sprei steril baru, serta aromaterapi penenang pikiran.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION KEUNGGULAN (Mengapa Memilih Kami) -->
    <section id="keunggulan" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                    Standar Kualitas Tertinggi
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                    Mengapa Daydreams Massage Menjadi Pilihan Utama di Jakarta?
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Kami menghadirkan pengalaman spa hotel berbintang langsung ke ruang privat Anda dengan dedikasi pada kebersihan, profesionalisme, dan kesopanan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Keunggulan 1 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-gold-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-id-card-clip"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Terapis Bersertifikat & Berpengalaman</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Terapis kami telah melalui seleksi ketat dan pelatihan profesional. Menguasai titik saraf, teknik pijat anatomi tubuh, serta ramah dan mengutamakan kenyamanan pelanggan.
                    </p>
                </div>

                <!-- Keunggulan 2 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-emerald-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Layanan Standby 24 Jam Nonstop</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Lelah setelah penerbangan malam, lembur kantor, atau butuh relaksasi dini hari? Terapis Daydreams Massage siap meluncur kapan pun Anda membutuhkan, 24/7.
                    </p>
                </div>

                <!-- Keunggulan 3 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-gold-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Privasi & Keamanan Terjamin 100%</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Layanan kebugaran resmi dengan integritas tinggi. Data lokasi, nomor kontak, serta privasi tempat tinggal atau kamar hotel Anda kami jaga secara rahasia dan aman.
                    </p>
                </div>

                <!-- Keunggulan 4 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-blue-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-venus-mars"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Pilihan Terapis Pria / Wanita</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Anda bebas menentukan preferensi terapis pria atau wanita sesuai dengan rasa nyaman dan kebutuhan terapi tubuh Anda.
                    </p>
                </div>

                <!-- Keunggulan 5 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-gold-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-bottle-droplet"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Minyak Aromaterapi Alami</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Menggunakan essential oil berkualitas tinggi yang harum menenangkan, tidak lengket di kulit, serta membantu meredakan stres dan ketegangan otot.
                    </p>
                </div>

                <!-- Keunggulan 6 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-gold-400 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-navy-900 text-purple-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 font-serif">Jangkauan Seluruh DKI Jakarta</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Terapis tersebar di berbagai titik strategis Jakarta Selatan, Pusat, Barat, Timur, dan Utara. Waktu tunggu lebih singkat (estimasi 30 - 45 menit).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION LAYANAN & TARIF -->
    <section id="layanan" class="py-16 md:py-24 bg-slate-100/70 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                    Menu & Tarif Transparan
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                    Layanan Pijat Panggilan Daydreams
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Pilih paket pijat sesuai dengan keluhan tubuh Anda. Tarif transparan tanpa biaya tersembunyi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Layanan 1: Traditional Body Massage -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?q=80&w=800&auto=format&fit=crop" 
                                 alt="Traditional Body Massage Jakarta" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-amber-500 text-slate-950 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Best Seller
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 90 / 120 Menit
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Traditional Body Massage</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Teknik pemijatan tradisional Nusantara menggunakan telapak tangan dan ibu jari. Sangat efektif meredakan otot tegang, pegal punggung, dan melancarkan sirkulasi darah.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Pijat seluruh tubuh (kaki, punggung, leher)</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Free minyak aromaterapi relaksasi</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Terapis pria atau wanita bersertifikat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 200.000</span>
                                <span class="text-xs text-slate-500">/ 90 mnt</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin memesan Traditional Body Massage (90 Menit). Mohon infokan ketersediaan terapis.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Layanan 2: Reflexology & Totok Wajah -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=800&auto=format&fit=crop" 
                                 alt="Reflexology & Totok Wajah Jakarta" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Relaksasi Wajah
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 60 / 90 Menit
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Reflexology & Totok Wajah</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Penekanan pada titik akupresur telapak kaki dan tangan untuk menstimulasi organ vital tubuh, dikombinasikan dengan totok wajah agar sirkulasi wajah segar dan bercahaya.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Fokus titik refleksi kaki & tangan</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Totok wajah relaksasi anti-stres</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Melancarkan peredaran darah kepala</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 175.000</span>
                                <span class="text-xs text-slate-500">/ 60 mnt</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin pesan layanan Reflexology & Totok Wajah. Mohon infokan jadwal terapis ready.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Layanan 3: Pijat Full Body + Kerokan -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=800&auto=format&fit=crop" 
                                 alt="Pijat Full Body + Kerokan Masuk Angin" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Masuk Angin
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 90 / 120 Menit
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Pijat Tubuh + Kerokan Masuk Angin</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Solusi ampuh untuk badan demam ringan, masuk angin, kembung, dan pegal linu setelah perjalanan jauh. Dikombinasikan dengan minyak hangat aromatik.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Pijatan relaksasi + teknik kerokan higienis</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Minyak kayu putih / jahe hangat berkhasiat</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Menghilangkan pegal meriang cepat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 225.000</span>
                                <span class="text-xs text-slate-500">/ 90 mnt</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya butuh Pijat Full Body + Kerokan karena badan meriang/masuk angin. Mohon terapis segera datang.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Layanan 4: Body Scrub / Lulur Herbal Tradisional -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=800&auto=format&fit=crop" 
                                 alt="Lulur Tradisional & Body Scrub" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Perawatan Kulit
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 120 Menit
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Lulur Tradisional & Scrub Herbal</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Kombinasi pijat relaksasi tubuh dengan pembersihan kulit memakai butiran scrub lulur herbal alami. Mengangkat sel kulit mati dan menghaluskan kulit.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Pijat relaksasi 60 mnt + Lulur 60 mnt</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Bahan alami zaitun, bengkoang & kopi</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Kulit bersih, wangi & halus berkilau</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 275.000</span>
                                <span class="text-xs text-slate-500">/ 120 mnt</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin memesan layanan Lulur Tradisional & Scrub Herbal 120 menit.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Layanan 5: Deep Tissue & Pijat Capek Berat -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=800&auto=format&fit=crop" 
                                 alt="Deep Tissue Massage Otot Berat Jakarta" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Otot Kaku / Gym
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 90 / 120 Menit
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Deep Tissue / Pijat Otot Berat</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Dirancang khusus untuk atlet, penggemar gym, atau Anda yang mengalami kekakuan otot kronis pada pinggang, bahu, dan betis akibat rutinitas padat di Jakarta.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Tekanan lebih bertenaga & tepat sasaran</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Mengurai simpul otot (muscle knot)</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Terapis spesialis tenaga pria/wanita kuat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 250.000</span>
                                <span class="text-xs text-slate-500">/ 90 mnt</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin booking Deep Tissue Massage / Pijat Otot Bertenaga.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Layanan 6: Couple Massage Package -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=800&auto=format&fit=crop" 
                                 alt="Couple Massage Package 2 Orang" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                            <span class="absolute top-3 left-3 bg-pink-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">
                                Paket Pasangan
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-semibold flex items-center">
                                <i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> 120 Menit (2 Orang)
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-navy-900 mb-2 font-serif">Couple Massage Package (2 Orang)</h3>
                            <p class="text-slate-600 text-xs mb-4 leading-relaxed line-clamp-3">
                                Layanan pijat berdua sekaligus untuk pasangan suami istri di kamar hotel atau rumah. Kami kirim 2 orang terapis profesional secara bersamaan.
                            </p>
                            <ul class="space-y-1.5 mb-4 text-xs text-slate-600">
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> 2 Terapis profesional hadir bersamaan</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Full Body Massage + Totok Wajah / Refleksi</li>
                                <li class="flex items-center"><i class="fa-solid fa-circle-check text-emerald-500 mr-2 text-[11px]"></i> Bebas tentukan terapis pria atau wanita</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-100 flex flex-col space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-slate-500">Mulai dari</span>
                            <div>
                                <span class="text-xl font-bold text-navy-900">Rp 750.000</span>
                                <span class="text-xs text-slate-500">/ 2 Orang</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams Massage, saya ingin booking Paket Couple Massage untuk 2 orang terapis bersamaan.')); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-2 text-sm"></i> Pesan via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION TERAPIS STANDBY 24 JAM -->
    <section id="terapis" class="py-16 md:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    <i class="fa-solid fa-user-check mr-1 text-emerald-600"></i> Terapis Profesional Resmi
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                    Pilihan Terapis Siap Panggil (Pria & Wanita)
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Seluruh terapis Daydreams Massage Jakarta berpenampilan rapi,ramah, sopan, dan Profesional keahlian terapi kebugaran jasmani. Siap meluncur ke kamar hotel atau apartemen Anda 24 jam.
                </p>
                <div class="flex items-center justify-center gap-3 pt-2 text-xs">
                    <span class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full font-semibold">Terapis Wanita Tersedia</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full font-semibold">Terapis Pria Tersedia</span>
                    <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full font-semibold">100% Bebas Biaya Transport</span>
                </div>
            </div>

            <!-- Grid 8 Terapis -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">


                <!-- Terapis 1 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczPNCaKKhoZ38QgHoz5C5D4rUMTkkfrB6G6xSRyXvy6lLgG8w5aNrR5gl-2pY04rWv84WHdQlhOarrvFOpFv12qnYQLsGg1mrlL3fAzBqv5uZKSCX26WHgvGMtBEIEDP3McVjLMdHJTjTgYocKSSzi3q=w361-h341-s-no-gm?authuser=0" 
                             alt="Terapis Maya Putri" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Maya Putri</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Traditional & Relaksasi</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>6 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (420+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijatan lembut dan bertenaga teratur, menguasai titik akupresur dan aromaterapi relaksasi hotel bintang lima.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Maya%20Putri%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>



                <!-- Terapis 2 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczOdPvqsgI426Pg03SLb_t6Sb5Jd9Q-f5wuGqAcyw20LjAOESiEYSNPoLHhbefn-7Ycbnkl4xbievDs-Wsoou9z3C9c7oEBGQIYxpzb2zRg130_1pAu1QKxEb6RAuKYpBH5NyxU0wYL4T1KznKV-PUgh=w361-h341-s-no-gm?authuser=0" 
                             alt="Terapis Citra Anggraini" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Citra Anggraini</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Lulur & Body Scrub</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>5 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (380+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pakar perawatan kulit, lulur herbal tradisional dan totok wajah anti lelah yang membuat tubuh segar kembali.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Citra%20Anggraini%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>




                <!-- Terapis 3 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczMeRqFKbnHs-I7MAMdp_yYuvd1_4A5kvlId-rjSrQWindXlPBtrv6MtR1pIqvL3IhIc3RQm-V3V3UUB0TmaSp_KzZyDoUledpSyczubvRSAdLnI0srjqJGuSYXy1_X1dlmN_FKEzgr6cPDVVpMud2W3=w503-h628-s-no-gm?authuser=0" 
                             alt="Terapis Dewi Kartika" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Dewi Kartika</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Totok & Refleksi</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>7 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (510+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijatan ritmis yang sangat rileks, ahli totok saraf kepala migrain dan peredaran darah leher serta pundak.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Dewi%20Kartika%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>



                <!-- Terapis 4 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczOPuzSKi7HAQX3lWvIU7LYYvgfFJQdFQj92VO7yZJwIn-j2xdzUxkZbz8JDmY5dtOdNzNRfiE3z2ruhJIMnJ3GZzlUEs5KLIl5wZQm7WibbwS3dr4ivQOpCPvPL77XA96RpJgBNXaAsiu-e4Zh5JaKQ=w358-h628-s-no-gm?authuser=0" 
                             alt="Terapis Sarah Lestari" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Sarah Lestari</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Aromaterapi & Swedia</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>4 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (290+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijat Swedia menenangkan dengan minyak esensial lavender murni, cocok untuk yang insomnia atau stres kerja berat.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Sarah%20Lestari%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>



                <!-- Terapis 5 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczPNCaKKhoZ38QgHoz5C5D4rUMTkkfrB6G6xSRyXvy6lLgG8w5aNrR5gl-2pY04rWv84WHdQlhOarrvFOpFv12qnYQLsGg1mrlL3fAzBqv5uZKSCX26WHgvGMtBEIEDP3McVjLMdHJTjTgYocKSSzi3q=w361-h341-s-no-gm?authuser=0" 
                             alt="Terapis Ayudia" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Ayudia</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Traditional & Relaksasi</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>6 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (420+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijatan lembut dan bertenaga teratur, menguasai titik akupresur dan aromaterapi relaksasi hotel bintang lima.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Ayudia%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>



                <!-- Terapis 6 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczOAmbFjVVvUPYeZFEpHUv6v7i_Dp2bj5WV2Tzfs6BBLuz8ZvBf1you0oC2Ac3Jzh0Y4nJi5mKRQjiKNedBFT-CDOHlBSvLQrDQCuR8Wy8a6By_1KruH6-VKzlvKxDb3R3BhM3tpx96rlkPAVw94xHQ8=w353-h628-s-no-gm?authuser=0" 
                             alt="Terapis Claudiya" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Claudiya</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Lulur & Body Scrub</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>5 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (380+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pakar perawatan kulit, lulur herbal tradisional dan totok wajah anti lelah yang membuat tubuh segar kembali.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Claudiya%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>




                <!-- Terapis 7 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczNhZRsfwGVSul0dbJC-quG8X6-dQpQR-6qc832JMyQOL9lOdxJAlPyZiLy5IwrGTSCILf3xwyVbS5Nd2UCt4b56qivSwhtQ49F8bQhMZL5rt2JRS4jyZ3DTesLGQIZGsG0dBmXL99O5AqyH11M6MVNH=w472-h628-s-no-gm?authuser=0" 
                             alt="Terapis Kartika" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Kartika</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Totok & Refleksi</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>7 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (510+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijatan ritmis yang sangat rileks, ahli totok saraf kepala migrain dan peredaran darah leher serta pundak.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Kartika%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>



                <!-- Terapis 8 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczNeRStS9l_K760qFenHEjDPl4uOl9bYmpz_EaM_XsotOehtTBTCNFyVBcZ4Nio-zGnHPSVFAeVwsN8ZsDe1n7V_h88bLzwu7K85ljNIuSoFEe4bt_TglkaGUK-LxlumkrnNWyhIuV_6Zlt2swTo-yY=w537-h716-s-no-gm?authuser=0" 
                             alt="Terapis Anggelia" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-pink-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Wanita
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Anggelia</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Aromaterapi & Swedia</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>4 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (290+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pijat Swedia menenangkan dengan minyak esensial lavender murni, cocok untuk yang insomnia atau stres kerja berat.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20memilih%20Terapis%20Anggelia%20(Wanita)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>


                <!-- Terapis 9 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczPY_WnB35P-oEhrnDbKTeJQN6wRjvbwPx1xvsijJ-LQ-1ESWY6ACiTfTPOMLnv-B_0xMwoMPcY3M4n8GQ_LP0uE_MtorEYGJk_QLIBwAEOQBDRpl1Pmw8z_bvZKKxVEEtWoaOLm7cpyenpNGCmYXyYJ=w705-h716-s-no-gm?authuser=0" 
                             alt="Terapis Rian Pratama" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Pria
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Rian Pratama</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Deep Tissue & Pria</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>8 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (460+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Tekanan tenaga kuat dan mantap mengurai ketegangan otot pinggang dan bahu kaku akibat duduk di kantor seharian.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20memilih%20Terapis%20Rian%20Pratama%20(Pria)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>

                <!-- Terapis 10 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczNcVmLzq6T0aOorl-ffBaXQ_cSplUQIxofC9yiF79Xy6BVFLQfcKcfhJZWc0W6om_cRlzCKXhJQ6iugKRwF03Cfi-fxLW22MemhGn7hz3uk7Dfn-aKgB8Pa2wnp8QnOwGn_9W90Rj1iJxGgsx21IJi-=w557-h716-s-no-gm?authuser=0" 
                             alt="Terapis Bayu Nugroho" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Pria
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Bayu Nugroho</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Refleksi & Cedera Ringan</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>5 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (340+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Ahli titik saraf telapak kaki dan peregangan persendian (stretching) untuk mengembalikan fleksibilitas tubuh.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20memilih%20Terapis%20Bayu%20Nugroho%20(Pria)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>

                <!-- Terapis 11 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczN_3V-Bfc8fb9riUpdSsomuuegKikdWptIZNWFb5FD2p4xs1xaNecJCezCyteCiWtL-GGut-OGR5w7aEXGvu1HbI2k17zsKQFBQa88KuFt0c2K8GKqyOCOqWPAbWjSfDX-wshOIX35UlT3Z14B0M6-_=w50-h50-s-no-gm?authuser=0" 
                             alt="Terapis Dimas Saputra" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Pria
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Dimas Saputra</h4>
                            <p class="text-[11px] text-slate-300">Spesialis Masuk Angin & Kerokan</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>6 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 4.9 (390+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Pakar teknik kerokan merata dan pijatan badan meriang menggunakan ramuan herbal penghangat tubuh khas Nusantara.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20memilih%20Terapis%20Dimas%20Saputra%20(Pria)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>

                <!-- Terapis 12 -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/pw/AP1GczN6UF4KQglRxDUyf4qv0GvFNiUXIIU2VWvVTDBYKHotrf3zucbDWdN8IYCmlg8NSJSFTpdKZLKBQZAmhn30wrOhb0EP8vS3lO8ZwBep6En0x1k3M0o2rQ5HIj3tcE3vfEa08oAN0x-9vF-whEW1sWSs=w540-h716-s-no-gm?authuser=0" 
                             alt="Terapis Hendra Wijaya" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow">
                            Pria
                        </span>
                        <span class="absolute top-3 right-3 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center shadow">
                            <span class="w-1.5 h-1.5 rounded-full bg-white mr-1 animate-pulse"></span> Standby
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h4 class="font-bold text-base font-serif">Hendra Wijaya</h4>
                            <p class="text-[11px] text-slate-300">Master Terapis Senior</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Pengalaman: <strong>9 Tahun</strong></span>
                            <span class="text-amber-500 font-bold flex items-center"><i class="fa-solid fa-star mr-1"></i> 5.0 (620+)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 line-clamp-2">
                            Terapis senior dengan keahlian komprehensif full body massage, deep tissue bertenaga, dan stretching kebugaran atletik.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285221003849&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20memilih%20Terapis%20Hendra%20Wijaya%20(Pria)%20untuk%20layanan%20pijat."
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors shadow">
                            <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> Pilih Terapis Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION AREA LAYANAN (JAKARTA COVERAGE) -->
    <section id="area-layanan" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Details -->
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                        Jangkauan Layanan Luas
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                        Siap Datang ke Seluruh Wilayah DKI Jakarta 24 Jam
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kami memiliki jaringan terapis yang berdomisili di berbagai penjuru ibukota. Di mana pun lokasi hotel bintang 3/4/5, apartemen mewah, residence, atau rumah tinggal Anda, tim Daydreams Massage siap meluncur cepat.
                    </p>

                    <!-- City Breakdown Accordion/Cards -->
                    <div class="space-y-3">
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="flex items-center justify-between font-bold text-navy-900 text-sm">
                                <span class="flex items-center"><i class="fa-solid fa-location-dot text-gold-500 mr-2"></i> Jakarta Selatan</span>
                                <span class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded">30 Menit Sampai</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">
                                SCBD, Senopati, Kemang, Kuningan, Kebayoran Baru, Blok M, Pondok Indah, Tebet, Cilandak, Pasar Minggu, Gandaria, Pancoran.
                            </p>
                        </div>

                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="flex items-center justify-between font-bold text-navy-900 text-sm">
                                <span class="flex items-center"><i class="fa-solid fa-location-dot text-gold-500 mr-2"></i> Jakarta Pusat</span>
                                <span class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded">30 Menit Sampai</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">
                                MH Thamrin, Sudirman, Menteng, Tanah Abang, Senayan, Gambir, Cikini, Kemayoran, Salemba, Bendungan Hilir.
                            </p>
                        </div>

                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="flex items-center justify-between font-bold text-navy-900 text-sm">
                                <span class="flex items-center"><i class="fa-solid fa-location-dot text-gold-500 mr-2"></i> Jakarta Barat</span>
                                <span class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded">35 Menit Sampai</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">
                                Tomang, Slipi, Grogol, Tanjung Duren, Kebon Jeruk, Puri Indah, Taman Anggrek, Palmerah, Meruya.
                            </p>
                        </div>

                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="flex items-center justify-between font-bold text-navy-900 text-sm">
                                <span class="flex items-center"><i class="fa-solid fa-location-dot text-gold-500 mr-2"></i> Jakarta Utara & Jakarta Timur</span>
                                <span class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded">35 - 45 Menit Sampai</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">
                                Pluit, Pantai Indah Kapuk (PIK), Kelapa Gading, Sunter, Ancol, Rawamangun, Cawang, Matraman, Jatinegara.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Banner -->
                <div class="lg:col-span-6">
                    <div class="rounded-3xl bg-gradient-to-tr from-navy-900 via-navy-800 to-slate-900 p-8 text-white relative shadow-2xl overflow-hidden border border-slate-700">
                        <div class="relative z-10 space-y-6">
                            <div class="inline-flex items-center space-x-2 text-xs text-gold-400 font-semibold uppercase tracking-wider">
                                <i class="fa-solid fa-hotel"></i>
                                <span>Hotel & Apartemen Specialist</span>
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-bold font-serif leading-snug">
                                Menginap di Hotel atau Apartemen Jakarta?
                            </h3>
                            <p class="text-sm text-slate-300 leading-relaxed">
                                Anda tidak perlu repot keluar hotel di tengah kemacetan Jakarta. Cukup kirimkan nama hotel, nomor kamar, dan jenis layanan yang diinginkan. Terapis kami akan segera tiba dengan perlengkapan lengkap dan siap melayani Anda.
                            </p>

                            <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700 space-y-2">
                                <div class="flex items-center text-xs text-slate-300">
                                    <i class="fa-solid fa-circle-check text-emerald-400 mr-2"></i>
                                    <span>Terapis berpenampilan bersih, sopan, & rapi</span>
                                </div>
                                <div class="flex items-center text-xs text-slate-300">
                                    <i class="fa-solid fa-circle-check text-emerald-400 mr-2"></i>
                                    <span>Membawa minyak aromaterapi, kain alas, & perlengkapan higienis</span>
                                </div>
                                <div class="flex items-center text-xs text-slate-300">
                                    <i class="fa-solid fa-circle-check text-emerald-400 mr-2"></i>
                                    <span>Pembayaran fleksibel (Transfer Bank / Cash langsung)</span>
                                </div>
                            </div>

                            <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya sedang menginap di hotel/apartemen di Jakarta dan ingin panggil terapis pijat.')); ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center justify-center w-full py-3.5 px-6 rounded-xl bg-gold-500 hover:bg-gold-600 text-navy-950 font-bold text-sm shadow-lg transition-transform active:scale-95">
                                <i class="fa-brands fa-whatsapp text-lg mr-2"></i> Tanya Ketersediaan Terapis Terdekat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TARIF / HARGA (TABEL TRANSPARAN) -->
    <section id="tarif" class="py-16 md:py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                    Paket Hemat & Transparan
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                    Daftar Harga Pijat Panggilan Jakarta
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Tarif bersahabat, tanpa pungutan biaya misterius. Sudah termasuk minyak relaksasi pilihan.
                </p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-navy-950 text-white text-xs uppercase tracking-wider">
                            <tr>
                                <th scope="col" class="py-4 px-6 font-semibold">Jenis Layanan</th>
                                <th scope="col" class="py-4 px-4 font-semibold text-center">Durasi</th>
                                <th scope="col" class="py-4 px-6 font-semibold text-right">Tarif</th>
                                <th scope="col" class="py-4 px-6 font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Traditional Body Massage</div>
                                    <div class="text-xs text-slate-400">Pijat seluruh tubuh meredakan pegal linu</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">90 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 200.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Traditional Massage 90 Menit.')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/80 transition-colors bg-slate-50/40">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Traditional Body Massage (Long Session)</div>
                                    <div class="text-xs text-slate-400">Relaksasi tuntas dari kepala hingga ujung kaki</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">120 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 250.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Traditional Massage 120 Menit.')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Pijat Tradisional + Kerokan</div>
                                    <div class="text-xs text-slate-400">Pijat seluruh tubuh + kerokan masuk angin</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">90 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 225.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Pijat + Kerokan 90 Menit.')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/80 transition-colors bg-slate-50/40">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Lulur Herbal & Scrub Spa</div>
                                    <div class="text-xs text-slate-400">Pijat relaksasi 60 mnt + Lulur pembersih kulit 60 mnt</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">120 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 275.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Lulur Herbal & Scrub Spa 120 Menit.')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Deep Tissue / Pijat Otot Intensif</div>
                                    <div class="text-xs text-slate-400">Tekanan kuat untuk simpul otot kaku & atlet</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">90 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 250.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Deep Tissue Massage 90 Menit.')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/80 transition-colors bg-slate-50/40">
                                <td class="py-4 px-6 font-medium text-navy-900">
                                    <div class="font-bold">Couple Massage (Pasangan)</div>
                                    <div class="text-xs text-slate-400">2 Terapis datang bersamaan untuk Anda & pasangan</div>
                                </td>
                                <td class="py-4 px-4 text-center font-medium">120 Menit</td>
                                <td class="py-4 px-6 text-right font-bold text-navy-900">Rp 450.000</td>
                                <td class="py-4 px-6 text-center">
                                    <a href="<?php echo esc_url(daydreams_get_wa_link('Halo Admin Daydreams, saya ingin order Couple Massage (2 Orang).')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200">
                                        <i class="fa-brands fa-whatsapp mr-1.5"></i> Pesan
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 bg-slate-50 text-center border-t border-slate-100 text-xs text-slate-500">
                    <i class="fa-solid fa-circle-info mr-1 text-gold-600"></i> Catatan: Tarif dapat disesuaikan sedikit untuk jarak tempuh pinggiran / jam operasional larut malam tertentu. Konfirmasikan ke admin via WhatsApp.
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TESTIMONI / ULASAN PELANGGAN -->
    <section id="testimoni" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                    Ulasan Asli Tamu
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-navy-900">
                    Apa Kata Pelanggan Daydreams Massage Jakarta?
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Kepuasan dan kenyamanan Anda adalah prioritas mutlak kami. Simak testimoni nyata tamu hotel dan residen Jakarta.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 text-sm italic leading-relaxed mb-6">
                            "Lagi trip bisnis dan nginap di hotel area SCBD. Badan capek banget abis meeting seharian. Iseng kontak Daydreams jam 10 malam, terapisnya datang tepat waktu sekitar 35 menit. Pijatannya mantap, sopan, dan wangi minyaknya bikin langsung pules."
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 pt-4 border-t border-slate-200/80">
                        <div class="w-10 h-10 rounded-full bg-navy-900 text-gold-400 font-bold flex items-center justify-center text-sm">
                            RH
                        </div>
                        <div>
                            <div class="font-bold text-navy-900 text-sm">Rian H.</div>
                            <div class="text-xs text-slate-500">Tamu Hotel Bintang 5, SCBD Jaksel</div>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 text-sm italic leading-relaxed mb-6">
                            "Saya dan suami pesan Couple Massage 120 menit ke apartemen di Thamrin. Pelayanannya sangat profesional dan menghormati privasi. 2 terapis datang barengan dengan seragam rapi dan ramah. Recommended banget buat yang gamau macet-macetan di jalan."
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 pt-4 border-t border-slate-200/80">
                        <div class="w-10 h-10 rounded-full bg-gold-600 text-navy-950 font-bold flex items-center justify-center text-sm">
                            AW
                        </div>
                        <div>
                            <div class="font-bold text-navy-900 text-sm">Amanda & Suami</div>
                            <div class="text-xs text-slate-500">Residen Apartemen, Jakarta Pusat</div>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 text-sm italic leading-relaxed mb-6">
                            "Badan meriang dan masuk angin pas balik kerja lembur. Langsung pesen Pijat + Kerokan. Terapisnya ramah dan paham betul anatomi saraf punggung. Badan langsung enteng dan besoknya fit lagi. Fast response adminnya juara."
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 pt-4 border-t border-slate-200/80">
                        <div class="w-10 h-10 rounded-full bg-blue-900 text-white font-bold flex items-center justify-center text-sm">
                            DS
                        </div>
                        <div>
                            <div class="font-bold text-navy-900 text-sm">Deni Setiawan</div>
                            <div class="text-xs text-slate-500">Rumah Tinggal, Kebon Jeruk Jakbar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CARA ORDER & FORMULIR BOOKING CEPAT (INTEGRASI WA) -->
    <section id="booking" class="py-16 md:py-24 bg-gradient-to-b from-slate-900 to-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Order Steps -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-gold-950/60 px-3 py-1 rounded-full border border-gold-500/30">
                    Proses Praktis & Cepat
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif text-white">
                    Cara Pesan Pijat Panggilan Dalam 3 Langkah Mudah
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Tanpa perlu mendaftar atau instal aplikasi yang ribet. Cukup pesan lewat formulir di bawah atau langsung chat WhatsApp Admin kami.
                </p>
            </div>

            <!-- Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-slate-800/60 p-6 rounded-2xl border border-slate-700 text-center relative">
                    <div class="w-12 h-12 rounded-full bg-gold-500 text-navy-950 font-extrabold text-lg flex items-center justify-center mx-auto mb-4">
                        1
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 font-serif">Pilih Layanan & Durasi</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Tentukan jenis pijat (Tradisional, Refleksi, Scrub, Kerokan) serta durasi waktu yang Anda inginkan (60, 90, 120 menit).
                    </p>
                </div>
                <div class="bg-slate-800/60 p-6 rounded-2xl border border-slate-700 text-center relative">
                    <div class="w-12 h-12 rounded-full bg-gold-500 text-navy-950 font-extrabold text-lg flex items-center justify-center mx-auto mb-4">
                        2
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 font-serif">Kirim Alamat / Hotel</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Sebutkan nama hotel dan nomor kamar, nama apartemen, atau share live location rumah Anda via WhatsApp admin.
                    </p>
                </div>
                <div class="bg-slate-800/60 p-6 rounded-2xl border border-slate-700 text-center relative">
                    <div class="w-12 h-12 rounded-full bg-gold-500 text-navy-950 font-extrabold text-lg flex items-center justify-center mx-auto mb-4">
                        3
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 font-serif">Terapis Langsung Meluncur</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Terapis terdekat dari lokasi Anda segera menuju kamar Anda (estimasi 30-45 menit). Nikmati pijatan relaksasi tuntas!
                    </p>
                </div>
            </div>

            <!-- Interactive WhatsApp Booking Form -->
            <div class="max-w-3xl mx-auto bg-slate-800/90 rounded-3xl p-6 sm:p-10 border border-slate-700 shadow-2xl backdrop-blur-md">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold font-serif text-white mb-2">
                        Formulir Pemesanan Cepat via WhatsApp
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300">
                        Isi form ringkas ini. Sistem akan otomatis menyusun format pesan WhatsApp siap kirim ke Admin Daydreams.
                    </p>
                </div>

                <form id="quick-booking-form" class="space-y-4 text-left">
                    <!-- Row 0: Pilihan Admin WhatsApp -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Kirim Pesanan Ke Admin:</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="flex items-center p-3 rounded-xl bg-slate-900 border border-slate-700 cursor-pointer hover:border-pink-500/60 transition-colors">
                                <input type="radio" name="bf-target-admin" value="62895629139936" checked class="text-pink-500 focus:ring-pink-500 h-4 w-4 bg-slate-800 border-slate-600">
                                <span class="ml-3 text-xs text-white">
                                    <strong class="text-pink-400">Admin 1 (SISKA)</strong>
                                    <span class="block text-[11px] text-slate-400">+62 895-6291-39936</span>
                                </span>
                            </label>
                            <label class="flex items-center p-3 rounded-xl bg-slate-900 border border-slate-700 cursor-pointer hover:border-gold-500/60 transition-colors">
                                <input type="radio" name="bf-target-admin" value="6285221003849" class="text-gold-500 focus:ring-gold-500 h-4 w-4 bg-slate-800 border-slate-600">
                                <span class="ml-3 text-xs text-white">
                                    <strong class="text-gold-400">Admin 2 (Mr.Erik)</strong>
                                    <span class="block text-[11px] text-slate-400">+62 852-2100-3849</span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Row 1: Nama & WhatsApp -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="bf-nama" class="block text-xs font-semibold text-slate-300 mb-1.5">Nama Pemesan</label>
                            <input type="text" id="bf-nama" placeholder="Contoh: Bpk. Hendra" required
                                   class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="bf-layanan" class="block text-xs font-semibold text-slate-300 mb-1.5">Pilihan Layanan</label>
                            <select id="bf-layanan" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option value="Traditional Body Massage">Traditional Body Massage</option>
                                <option value="Reflexology & Totok Wajah">Reflexology & Totok Wajah</option>
                                <option value="Pijat Full Body + Kerokan">Pijat Full Body + Kerokan</option>
                                <option value="Lulur Herbal & Scrub Spa">Lulur Herbal & Scrub Spa</option>
                                <option value="Deep Tissue / Pijat Otot Bertenaga">Deep Tissue / Pijat Otot Bertenaga</option>
                                <option value="Couple Massage (Pasangan)">Couple Massage (Pasangan)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 2: Durasi & Pilihan Terapis -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="bf-durasi" class="block text-xs font-semibold text-slate-300 mb-1.5">Durasi Waktu</label>
                            <select id="bf-durasi" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option value="90 Menit">90 Menit (Paling Diminati)</option>
                                <option value="120 Menit">120 Menit (Puas & Maksimal)</option>
                                <option value="60 Menit">60 Menit (Refleksi / Quick)</option>
                            </select>
                        </div>
                        <div>
                            <label for="bf-gender" class="block text-xs font-semibold text-slate-300 mb-1.5">Preferensi Terapis</label>
                            <select id="bf-gender" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option value="Terapis Wanita">Terapis Wanita (Sopan & Ahli)</option>
                                <option value="Terapis Pria">Terapis Pria (Bertenaga & Ahli)</option>
                                <option value="Bebas / Siapa Saja Yang Ready">Bebas / Siapa Saja Yang Siap</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 3: Wilayah Jakarta & Waktu Panggilan -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="bf-area" class="block text-xs font-semibold text-slate-300 mb-1.5">Wilayah Jakarta</label>
                            <select id="bf-area" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option value="Jakarta Selatan">Jakarta Selatan</option>
                                <option value="Jakarta Pusat">Jakarta Pusat</option>
                                <option value="Jakarta Barat">Jakarta Barat</option>
                                <option value="Jakarta Timur">Jakarta Timur</option>
                                <option value="Jakarta Utara">Jakarta Utara</option>
                            </select>
                        </div>
                        <div>
                            <label for="bf-waktu" class="block text-xs font-semibold text-slate-300 mb-1.5">Waktu Diinginkan</label>
                            <select id="bf-waktu" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500">
                                <option value="Sekarang / Secepatnya">Sekarang / Secepatnya (30-45 mnt)</option>
                                <option value="1 Jam Lagi">1 Jam Lagi</option>
                                <option value="Malam Ini (Pukul 21:00 - 24:00)">Malam Ini (Pukul 21:00 - 24:00)</option>
                                <option value="Dini Hari (24:00 - 05:00)">Dini Hari (24:00 - 05:00)</option>
                                <option value="Jadwal Besok Hari">Jadwal Besok Hari</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 4: Alamat Lengkap / Hotel / Kamar -->
                    <div>
                        <label for="bf-alamat" class="block text-xs font-semibold text-slate-300 mb-1.5">
                            Nama Hotel & No Kamar / Apartemen / Alamat Rumah
                        </label>
                        <textarea id="bf-alamat" rows="2" placeholder="Contoh: Hotel Mercure Gatot Subroto, Kamar 508" required
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-900 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit"
                                class="w-full py-4 px-6 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-base shadow-lg transition-transform active:scale-98 flex items-center justify-center">
                            <i class="fa-brands fa-whatsapp text-2xl mr-2"></i>
                            <span>Kirim Booking Langsung ke WhatsApp Admin</span>
                        </button>
                        <p class="text-[11px] text-center text-slate-400 mt-2">
                            *Setelah tombol diklik, aplikasi WhatsApp Anda akan terbuka otomatis dengan data pesanan yang sudah rapi.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
