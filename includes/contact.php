<!-- Section Contact - Version Bootstrap 5 -->
<section id="contact" class="section d-flex justify-content-center align-items-center p-3">

    <div class="container ">

        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Contact me</h2>
                <p class="lead text-muted mb-5">Have a question or a projects in mind? Send me a message.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Your name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" id="message" rows="5" placeholder="Your message..."
                            required></textarea>
                        <div class="invalid-feedback">Please write a message.</div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-send me-2"></i>Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Script pour la validation Bootstrap -->
<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>