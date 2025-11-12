<?php 
$pageTitle = "Conexões Inteligentes: IoT";
include 'includes/header.php'; 
?>

    <main>
      <h2>Conexões Inteligentes: O Papel da IoT na era digital</h2>

      <div class="author-section left-aligned">
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo" /> <div class="author-text">
          <span class="author-info"
            >Escrito por <strong>Gilson T. Silva</strong> • 5 min de
            leitura</span
          >
          <button class="follow-button">Seguir</button>
        </div>
      </div>

      <img
        src="https://builtin.com/sites/www.builtin.com/files/styles/ckeditor_optimize/public/inline-images/machine-learning-pillar-page-overview.jpeg"
        alt="Imagem de um robô"
        width="830"
      />

      <p>
        A <strong>Internet das Coisas (IoT)</strong> é um dos principais
        impulsionadores da transformação digital, criando novas maneiras de
        conectar dispositivos, sistemas e processos de negócios. A IoT é
        composta por uma rede de dispositivos que se comunicam entre si e com
        plataformas centrais, o que permite a automação, a coleta de dados em
        tempo real e uma gestão mais eficiente. Essa tecnologia está
        transformando indústrias, desde a manufatura até a saúde, facilitando um
        ambiente digital mais inteligente e responsivo.
      </p>

      <h4>Personalização da Aprendizagem</h4>

      <p>
        Na manufatura, por exemplo, a IoT possibilita o monitoramento contínuo
        de máquinas, identificando falhas antes que ocorram e promovendo a
        manutenção preditiva. No setor de logística, sensores conectados
        permitem o rastreamento em tempo real de mercadorias, otimizando rotas
        de entrega e garantindo a integridade dos produtos. A IoT também é
        crucial na coleta e análise de grandes volumes de dados, o que melhora a
        tomada de decisões e a adaptação às mudanças do mercado.
      </p>

      <p>
        Entretanto, a adoção da IoT também traz desafios, como a segurança dos
        dados e a interoperabilidade entre dispositivos de diferentes
        fabricantes. Estratégias de cibersegurança e padrões de comunicação são
        essenciais para garantir uma integração eficiente e segura dos
        dispositivos conectados. Mesmo assim, o potencial da IoT em criar um
        ambiente de negócios mais conectado e eficiente continua a crescer,
        tornando-se uma peça chave na transformação digital de empresas em todo
        o mundo.
      </p>

      <div class="article-info">
        <p>Publicado em 21 de outubro de 2024</p>
      </div>

      <hr />

      <section class="related-posts">
        <h4>Outros posts do autor</h4>

        <div class="post-preview">
          <a href="rpa.php">
            <img src="https://www.leansolutions.com.br/wp-content/uploads/2023/03/O-que-e-RPA-entenda-tudo-sobre-automacao-robotica-de-processos.png.webp" 
            alt="RPA"   width="300" >

            <h4>Automatização de Processos Empresariais</h4>
            <p>om Robotic Process Automation (RPA)</p>
          </a>
        </div>

        <div class="post-preview">
          <a href="IaEtica.php">
            <img
              src="https://fluxoconsultoria.poli.ufrj.br/wp-content/uploads/2024/04/blockchain-1024x512.png"
              alt="Imagem de IA"
              width="300"
            />
            <h4>Preocupações Éticas Relacionadas à Inteligência Artificial</h4>
            <p>O mundo pode está seguindo um ponto sem retorno</p>
          </a>
        </div>

      </section>

      <div class="author-section left-aligned">
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo" /> <div class="author-text">
          <span class="author-info"
            >Escrito por <strong>Gilson T. Silva</strong> • 5 min de
            leitura</span
          >
          <button class="follow-button">Seguir</button>
        </div>
      </div>


      <section id="comments-section">
        <h4>Comentários</h4>

        
    
        <form action="includes/inserir_comentario.php" method="POST"> <input type="hidden" name="id_artigo" value="6"> <input type="text" id="comment-name" name="nome" placeholder="Seu nome" required>
            <textarea id="comment-text" name="comentario" placeholder="Seu comentário" required></textarea>
            <button id="submit-com"type="submit">Enviar</button>
        </form>
    
        <div id="comment-list">

        </div>
        <?php
    include_once 'includes/conexao.php';

    $id_artigo = 6;

    try {
        $sql = "SELECT nome, comentario FROM comentarios WHERE id_artigo = ? ORDER BY id DESC";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id_artigo);

            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='comment'>";
                          echo "<p class='comment-author'><strong>" . htmlspecialchars($row['nome']) . "</strong></p>";
                          echo "<p class='comment-text'>" . htmlspecialchars($row['comentario']) . "</p>";
                        echo "</div>";
                        echo "<hr>";
                    }
                } else {
                    echo "<p class='no-comments'>Nenhum comentário ainda. Seja o primeiro a comentar!</p>";
                }
            } else {
                die("Erro ao executar a consulta: " . $stmt->error);
            }

            $stmt->close();
        } else {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $conn->close();
    } catch (Exception $e) {
        die("Erro inesperado: " . $e->getMessage());
    }
    ?>


    </section>
    </main>

<?php 
include 'includes/footer.php'; 
?>