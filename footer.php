    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quem-somos">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#infraestrutura">Infraestrutura e tecnologia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#trabalhe-conosco">Trabalhe conosco</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-quote rounded-pill ms-2" href="https://wa.me/+5571991619389">Solicitar orçamento</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row my-5 align-items-end">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/e-log-branca.svg" alt="E-LOG" height="200">
                </div>
                <div class="col-md-4 text-center text-md-end mt-5">
                    <h5><i class="fab fa-linkedin"></i> <i class="fab fa-instagram"></i></h5>
                    <p>Rodovia BR 324, nº 13664, Palestina - Salvador - BA<br>CEP: 41.308-500</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/+5571991619389" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Update active nav link on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>