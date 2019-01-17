
<footer>
        <div class="subscribe">
            <h3>Nyhetsbrev</h3>
            <form action="">
                <label for="email-addr"></label>
                <input type="email" name='email' class='validation[requested, custom[onlyLetter], length[0,100]] feedback-input'
                    placeholder='Email address' id='email-addr'>
                <input type="submit" value='Subscribe' id='subscribeBtn'>
            </form>
        </div>

        <div class="copy">
            <p>&copy; 2018 by Anonymous</p>
            <ul class="icons">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-pinterest-p"></i>
            </ul>
        </div>

        <div class="scroll-up">
            <a class='up' href='#container'><i class="fas fa-chevron-up"></i></a>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>
