<?php include 'header.php'; ?>

<h2>Contato</h2>
<p>

    <body>
        <h1>Formulário de Contato</h1>

        <form action="send.php" method="post" novalidate>
            <label for="nome">Seu nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

            <label for="email">Email de envio:</label>
            <input type="email" id="email" name="email" placeholder="Email de envio" required>
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="6" placeholder="Digite sua mensagem" required></textarea>


            <div style="position:absolute; left:-9999px;">
                <label>Se você é humano, deixe em branco</label>
                <input type="text" name="website" value="">
            </div>

            <button type="submit">Enviar</button>
        </form>
    </body>
</p>

<?php include 'footer.php'; ?>