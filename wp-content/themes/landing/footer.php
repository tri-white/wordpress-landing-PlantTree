
    <!-- Футер -->
    <footer class="bg-light text-center text-white mt-5">
        <div class="container p-1">
          <section class="my-1">
            <!-- Посилання на соц.мережі -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #333333;"
              href="https://github.com/tri-white/tri-white"
              target="_blank"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
        </div>
      
        <!-- Назва та дані сайту-->
        <div class="text-center p-3 bg-success">
          © 2020
          <a class="text-white" href="#top">Plant-a-tree.com</a>
        </div>
      </footer>

      <?php
        $bg_image_url = 'http://localhost/wplab.trunin/wp-content/uploads/2023/12/bg.png';
        ?>

    <style>
        #hero-section {
            background: linear-gradient(rgba(0,0,0,0.438), rgba(0,0,0,0.438)), url('<?php echo esc_url($bg_image_url); ?>');
            background-size: cover;
        }
    </style>
    <!-- BOOTSTRAP + JS files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>