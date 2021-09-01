<footer id="footer" class="padtop3">
    <section class="row padbottom10 padtop10" style="margin-left:0; margin-right:0;">
        <div class="col-sm-6">
            <div class="contato-footer">
                <a style="color: white;" href="https://github.com/StephanieHeffer" target="_blank" rel="noopener">Github
                </a> <br />
                <a style="color: white;" href="https://www.linkedin.com/in/stephanie-heffer-cavaletti-6a76b421b/" target="_blank" rel="noopener">LinkedIn</a>
                <p id="btn-contato" style="color:white;">E-Mail</p>
            </div>

        </div>
        <div class="col-sm-6">
            <div style="color:white" id="contato"><?php echo do_shortcode('[contact-form-7 id="62" title="Formulário de contato 1"]'); ?></div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="footer py-3">
            <p style="color: white;">Nousk. <?php echo date('Y'); ?> Open Source</p>
            <?php dynamic_sidebar('footer-widget-area'); ?>
            <p style="color: white;">Idealizado e Desenvolvimento por mim.</p>
        </div>
    </div>

</footer>

<script>
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });
</script>

<script>
    const rafa = document.querySelector("#rafa");
    rafa.addEventListener("click", function() {
        const loader = document.querySelector(".loader");
        loader.style.display = "block";
        loader.className += " hidden"; // class "loader hidden"
    });
</script>


<script>
    let formulario = document.getElementById("contato");
    document.getElementById("btn-contato").onclick = function() {
        formulario.classList.toggle("fade");
    }
</script>

