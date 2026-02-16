<?php include 'header.php'?>
<body>


    <header>
        <h1>Contact Us</h1>
    </header>

    <div class="container">
        <form method="post" action="contact_process.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" aria-placeholder="Message"></textarea>
            <button type='submit' name='submit'>Send</button>
        </form>
    </div>
    
    <footer> 2026 Hameen Flourist hop</footer>
</body>
</html>     