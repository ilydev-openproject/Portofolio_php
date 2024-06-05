<?php
$this->load->view('layout/header');
?>

<!-- content -->
<section>
    <div class="hero mb-5">
        <div class="bg-hero"></div>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="hero-body p-5 shadow">
                    <div class="row h-100 d-flex align-items-center">
                        <div class="col-lg-6 col-12">
                            <h3>Hello Guys 👋🏼, I'm</h3>
                            <h1>Ilyas <span>Maazib</span></h1>
                            <span class="segment"><a href="https://id.wikipedia.org/wiki/Pengembang_web" target="_blank">Web Developer</a>
                                <div class="vr"></div> <a href="https://id.wikipedia.org/wiki/Desain_antarmuka_pengguna" target="_blank">UI/UX</a>
                                <div class="vr"></div> <a href="https://id.wikipedia.org/wiki/Desain_antarmuka_pengguna" target="_blank">UI Design</a>
                            </span>
                            <div class="chtgroup mt-5">
                                <a href="" class="btn btn-lg"><span>Chat me <i class="fad fa-comment-alt-smile"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="images">
                                <div class="round1 shadow"></div>
                                <div class="round2 shadow"></div>
                                <div class="round3 shadow"></div>
                                <div class="round4 shadow"></div>
                                <img src="<?= base_url('/public/img/hero.png') ?>" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flow my-5 d-flex justify-content-around">
                    <div class="think d-flex justify-content-start align-items-center">
                        <i class="fad fa-headphones fa-2x"></i>
                        <div class="text">
                            <span>Putar Musik</span>
                            <p>Cari titik nyaman dulu.</p>
                        </div>
                    </div>
                    <div class="idea d-flex justify-content-start align-items-center">
                        <i class="fad fa-lightbulb-on fa-2x"></i>
                        <div class="text">
                            <span>Idea!</span>
                            <p>Lanjut ekspresikan kreasi</p>
                        </div>
                    </div>
                    <div class="idea d-flex justify-content-start align-items-center">
                        <i class="fad fa-cogs fa-2x"></i>
                        <div class="text">
                            <span>Action!</span>
                            <p>Hajar eksekusi crafting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="about my-5">
        <div class="container-fluid">
            <div class="wrapper">
                <div class="header mb-5">
                    <h2>Selamat Datang <br> di Web Pribadi Saya</h2>
                    <h6>Sedikit potensi diri saya <i class="fad fa-bullseye-arrow"></i></h6>
                </div>
                <div class="row g-4 mb-5">
                    <div class="col-lg-4">
                        <div class="card p-2" style="background-color: #FF8D3E">
                            <div class="card-body">
                                <h5 class="card-title mb-5">Front End</h5>
                                <div class="card-text">
                                    <p>Saya bisa menjadi frontend developer dengan pengalaman saya menggunakan framework seperti bootstrap, tailwind, next js dsb.</p>
                                </div>
                                <div class="tool mt-5 d-flex justify-content-end align-items-center">
                                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/figma.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/react.webp') ?>" width="30" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-2" style="background-color: #FFE8D1">
                            <div class="card-body">
                                <h5 class="card-title mb-5">Back End</h5>
                                <div class="card-text">
                                    <p>Framework PHP masih menjadi titik ternyaman saya dalam mengolah data dari sisi server seperti Codeigniter dan Laravel.</p>
                                </div>
                                <div class="tool mt-5 d-flex justify-content-end align-items-center">
                                    <img src="<?= base_url('/public/img/tech/ci.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" width="30" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-2" style="background-color: #93705B">
                            <div class="card-body">
                                <h5 class="card-title mb-5">Add. Skill</h5>
                                <div class="card-text">
                                    <p>Pemahaman lain yang sering saya gunakan dalam pengembangan web yaitu Js, Jquery terkadang dan library lain.</p>
                                </div>
                                <div class="tool mt-5 d-flex justify-content-end align-items-center">
                                    <img src="<?= base_url('/public/img/tech/js.webp') ?>" width="30" height="auto" alt="">
                                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?>" width="30" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile my-5 py-5">
                    <div class="header mt-5 mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>Tentang Saya</h2>
                            <h6>Kenalan yuk! <i class="fad fa-handshake"></i></h6>
                        </div>
                        <div class="icon p-3  d-flex justify-content-center align-items-center shadow">
                            <i class="fad fa-user-chart fa-2x"></i>
                        </div>
                    </div>
                    <div class="row h-100 d-flex justify-content-center align-items-center">
                        <div class="col-lg-6 h-100">
                            <div class="images h-100">
                                <div id="masked" class="profiles w-100"></div>
                                <img id="mask" src="<?= base_url('/public/img/profile.webp') ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 h-100 d-flex justify-content-center align-items-center">
                            <div class="experience">
                                <p>
                                    Saya adalah <strong>Full Stack Web Developer</strong> dengan pengalaman lebih dari <strong>2 tahun</strong> dalam mengembangkan <strong>aplikasi web yang responsif dan user-friendly</strong>. Saya menguasai teknologi front-end seperti <strong>HTML</strong>, <strong>CSS</strong>, dan <strong>JavaScript</strong>, serta framework seperti <strong>Bootstrap</strong>, <strong>Bulma</strong>, dan <strong>Tailwind CSS</strong>. Saya juga menggunakan <strong>Figma</strong> untuk desain antarmuka yang nyaman dan intuitif.
                                </p>
                                <p>
                                    Di sisi back-end, saya terbiasa menggunakan <strong>PHP</strong> dengan framework <strong>Laravel</strong> dan <strong>CodeIgniter</strong>, serta berpengalaman mengelola database seperti <strong>MySQL</strong> dan <strong>PostgreSQL</strong>. Saya telah memimpin dan berpartisipasi dalam berbagai proyek, termasuk <strong>sistem manajemen konten</strong>, <strong>platform e-commerce</strong>, dan <strong>aplikasi web perusahaan</strong> dengan fungsionalitas kompleks.
                                </p>
                                <p>
                                    Saya fokus pada <strong>kolaborasi efektif</strong>, <strong>komunikasi jelas</strong>, dan <strong>metodologi agile</strong> untuk memastikan proyek selesai tepat waktu dan sesuai harapan. Saya berkomitmen untuk terus <strong>belajar</strong> dan <strong>berkembang</strong> seiring kemajuan teknologi.
                                </p>
                                <div class="btn-chat mt-5">
                                    <a href="#" class="btn btn-lg">Chat me <i class="fad fa-comments-alt ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="wrapper-tech text-start">
        <div class="wrapper">
            <div class="container-fluid">
                <h2>Tech Stack</h2>
                <h6>Tech Stack saya <i class="fad fa-cogs"></i></h6>
            </div>
        </div>
        <div class="tech1 my-5 mb-4 d-flex justify-content-end align-items-center">
            <div class="slidert g-3 d-flex justify-content-end align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
            <div class="slidert g-2 d-flex justify-content-start align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
            <div class="slidert g-3 d-flex justify-content-start align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tech2 mb-5 pt-3 d-flex justify-content-start align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="sliderb g-3 d-flex justify-content-start align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
            <div class="sliderb g-2 d-flex justify-content-start align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
            <div class="sliderb g-3 d-flex justify-content-start align-items-center">
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/figma.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Figma</h4>
                        <span>UI/UX Design</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/thailwind.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Thailwind Css</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/ci.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Codeigniter</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/jquery.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Jquery</h4>
                        <span>Js Library</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/js.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Javascript</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/nextjs.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Next Js</h4>
                        <span>Frontend Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/php.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>PHP</h4>
                        <span>Programming lang.</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/bootstrap.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Bootstrap</h4>
                        <span>CSS Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/flutter.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Flutter</h4>
                        <span>Mobile Develeopment</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/laravel.webp') ?>" alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>Laravel</h4>
                        <span>PHP Framework</span>
                    </div>
                </div>
                <div class="tech-item shadow mx-3 d-flex justify-content-start align-items-center">
                    <img src="<?= base_url('/public/img/tech/react.webp') ?> " alt="agcenna assets" class="img-fluid" width={500} height={500} />
                    <div class="gtext text-start">
                        <h4>React Js</h4>
                        <span>Front-End Development</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="pakaryan">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="header my-5">
                    <h2>Pakaryan</h2>
                    <h6>Sebutan hasil karya untuk saya <i class="fad fa-photo-video"></i></h6>
                </div>
                <div class="list">
                    <div class="pakaryan-group py-5 px-1 d-flex justify-content-start align-items-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/img/pakaryan/argaweb.webp') ?>" alt="">
                                </div>
                                <div class="card-text p-lg-4 p-2 d-flex justify-content-between align-tems-center">
                                    <div class="text">
                                        <h4>Arga Architect</h4>
                                        <p>Architecture Web</p>
                                    </div>
                                    <div class="btn-see">
                                        <button href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat <i class="fad fa-window ms-2"></i></button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/img/pakaryan/berlian.webp') ?>" alt="">
                                </div>
                                <div class="card-text p-lg-4 p-2 d-flex justify-content-between align-tems-center">
                                    <div class="text">
                                        <h4>PO. Berlian Jaya</h4>
                                        <p>Transportation Web</p>
                                    </div>
                                    <div class="btn-see">
                                        <button href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat <i class="fad fa-window ms-2"></i></button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="contact">
        <div class="container-fluid">
            <div class="header my-5">
                <h2>Contact</h2>
                <h6>Saya terbuka untuk networking <i class="fad fa-user-plus"></i></i></h6>
            </div>

        </div>
    </div>
</section>

<?php
$this->load->view('layout/footer');
?>