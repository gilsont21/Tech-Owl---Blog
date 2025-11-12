<?php 
$pageTitle = "Inteligência Artificial";
include 'includes/header.php'; 
?>

    <main>
      <h2>Inteligência Artificial</h2>

      <div class="author-section left-aligned">
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo"> <div class="author-text">
          <span class="author-info">Escrito por <strong>Gilson T. Silva</strong> • 5 min de leitura</span>
          <button class="follow-button">Seguir</button>
        </div>
      </div>
      
      <img
        src="https://startupi.com.br/wp-content/uploads/2023/01/Rascunho-imagens62.jpg"
        alt="Imagem de uma IA"
        width="830"
      />

      <p>
        A Inteligência Artificial (IA) está se tornando uma ferramenta poderosa
        no setor educacional, promovendo uma revolução silenciosa que afeta
        tanto professores quanto alunos. Com o avanço das tecnologias de machine
        learning, sistemas de IA agora podem analisar grandes volumes de dados,
        identificar padrões de aprendizado, e oferecer recomendações
        personalizadas para melhorar o desempenho educacional.
      </p>

      <h4>Personalização da Aprendizagem</h4>

      <div class="container-texto">
        <p class="highlightable">
        Um dos principais benefícios da IA na educação é sua capacidade de
        personalizar o aprendizado. Com a IA, plataformas educacionais podem
        adaptar-se ao ritmo de aprendizado de cada aluno, oferecendo conteúdos
        ajustados às suas necessidades. Por exemplo, plataformas como o Khan
        Academy utilizam algoritmos de IA para sugerir vídeos, exercícios e
        atividades com base no desempenho passado do aluno, permitindo um
        aprendizado mais eficiente e individualizado. Essa personalização pode
        se manifestar de várias formas:
      </p>
      <button id="copiar-texto">Copiar</button>
      </div>

        <ul>
          <li>
            <strong>Tutoria Inteligente: </strong>Sistemas de tutoria baseados
            em IA podem fornecer feedback imediato e guiar os alunos através de
            conceitos difíceis, ajustando o nível de dificuldade com base nas
            respostas do aluno. Exemplos de sistemas de tutoria incluem o Smart
            Sparrow e o Carnegie Learning.
          </li>
          <li>
            <strong>Plataformas Adaptativas: </strong> como o DreamBox oferecem
            experiências personalizadas de aprendizagem de matemática, onde o
            software ajusta as atividades com base nas interações dos alunos com
            o conteúdo.
          </li>
        </ul>
      <p>
        Além disso, a IA ajuda a automatizar tarefas repetitivas que muitas
        vezes consomem o tempo dos professores, como a correção de provas e
        atividades de múltipla escolha. Isso libera mais tempo para que os
        professores possam focar em atividades de ensino mais criativas e em
        interações mais produtivas com os alunos. Assistentes virtuais baseados
        em IA, como o famoso Jill Watson, podem responder a dúvidas frequentes
        dos alunos, fornecendo apoio rápido e eficiente, especialmente em
        plataformas de ensino online.
      </p>

      <p>
        Outro impacto importante da IA é na inclusão. Ferramentas de leitura de
        texto para fala, tradução automática e reconhecimento de voz permitem
        que alunos com deficiências visuais, auditivas ou motoras tenham acesso
        a uma educação de qualidade. Isso torna a sala de aula mais inclusiva e
        garante que as barreiras físicas e cognitivas sejam minimizadas.
      </p>

      <p>
        No entanto, o uso da IA também traz desafios e preocupações éticas. A
        coleta massiva de dados por essas plataformas levanta questões sobre a
        privacidade dos alunos. Além disso, o acesso desigual à tecnologia pode
        ampliar a disparidade educacional entre escolas mais ricas, que podem
        adotar essas soluções, e aquelas com menos recursos, que ficam excluídas
        dessa revolução tecnológica.
      </p>

      <p>
        Mesmo com esses desafios, a IA tem o potencial de transformar
        positivamente a educação. O segredo para um bom uso dessa tecnologia
        está no equilíbrio between inovação e cautela, garantindo que ela seja
        usada para beneficiar todos os alunos de maneira justa e ética.
      </p>

      <p>
        Esse é o futuro da educação:
        <strong
          >mais personalizada, inclusiva e inteligente — com o apoio da
          inteligência artificial.</strong
        >
      </p>
    
      <div class="article-info">
        <p>Publicado em 21 de outubro de 2024</p>
      </div>


      <hr>

      

      <section class="related-posts">
        <h4>Outros posts do autor</h4>
        <div class="post-preview">
          <a href="IaEtica.php">
            <img
              src="https://fluxoconsultoria.poli.ufrj.br/wp-content/uploads/2024/04/blockchain-1024x512.png"
              alt="Imagem de IA"
              width="300"
            />
            <h4>Preocupações Éticas Relacionadas à Inteligência Artificial </h4>
            <p>O mundo pode está seguindo um ponto sem retorno</p>
          </a>
        </div>
        

        
      </section>

      <div class="author-section left-aligned">
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo"> <div class="author-text">
          <span class="author-info">Escrito por <strong>Gilson T. Silva</strong> • 5 min de leitura</span>
          <button class="follow-button">Seguir</button>
        </div>
      </div>

      <section id="comments-section">
        <h4>Comentários</h4>

        
    
        <form action="includes/inserir_comentario.php" method="POST"> <input type="hidden" name="id_artigo" value="3"> <input type="text" id="comment-name" name="nome" placeholder="Seu nome" required>
            <textarea id="comment-text" name="comentario" placeholder="Seu comentário" required></textarea>
            <button id="submit-com"type="submit">Enviar</button>
        </form>
    
        <div id="comment-list">

        </div>
        <?php
    include_once 'includes/conexao.php'; 

    $id_artigo = 3;

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