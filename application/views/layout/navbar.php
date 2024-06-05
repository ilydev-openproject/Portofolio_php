<nav class="navbar navbar-expand-lg bg-transparent" id="home">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- <img src="<?= base_url('/public/img/logo/logo.webp') ?>" alt="Logo" class="d-inline-block align-text-top"> -->
            !lymzb
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pakaryan">Pakaryan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="dropdown mode">
                <button class="btn btn-link dropdown-toggle" id="theme-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-brightness-high"></i>
                </button>
                <ul class="dropdown-menu p-2" aria-labelledby="theme-toggle">
                    <li><a class="dropdown-item my-1" href="#" data-theme="light"><i class="bi bi-brightness-high"></i> Light</a></li>
                    <li><a class="dropdown-item my-1" href="#" data-theme="dark"><i class="bi bi-moon-stars"></i> Dark</a></li>
                    <li><a class="dropdown-item my-1" href="#" data-theme="auto"><i class="bi bi-circle-half"></i> Auto</a></li>
                </ul>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const dropdownItems = document.querySelectorAll('.dropdown-item');

                        const currentTheme = localStorage.getItem('theme') || 'light';
                        setTheme(currentTheme);

                        dropdownItems.forEach(item => {
                            item.addEventListener('click', (event) => {
                                event.preventDefault();
                                const selectedTheme = event.currentTarget.getAttribute('data-theme');
                                setTheme(selectedTheme);
                            });
                        });

                        function setTheme(theme) {
                            let themeIcon;
                            switch (theme) {
                                case 'dark':
                                    themeIcon = 'bi-moon-stars';
                                    document.documentElement.setAttribute('data-bs-theme', 'dark');
                                    break;
                                case 'auto':
                                    themeIcon = 'bi-circle-half';
                                    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                                        document.documentElement.setAttribute('data-bs-theme', 'dark');
                                    } else {
                                        document.documentElement.setAttribute('data-bs-theme', 'light');
                                    }
                                    break;
                                case 'light':
                                default:
                                    themeIcon = 'bi-brightness-high';
                                    document.documentElement.setAttribute('data-bs-theme', 'light');
                                    break;
                            }
                            localStorage.setItem('theme', theme);
                            updateButtonIcon(themeIcon);
                            updateActiveItem(theme);
                        }

                        function updateButtonIcon(themeIcon) {
                            const buttonIcon = document.querySelector('.dropdown-toggle .bi');
                            buttonIcon.className = `bi ${themeIcon}`;
                        }

                        function updateActiveItem(theme) {
                            dropdownItems.forEach(item => {
                                if (item.getAttribute('data-theme') === theme) {
                                    item.classList.add('active');
                                } else {
                                    item.classList.remove('active');
                                }
                            });
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</nav>