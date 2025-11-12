<?php 
$pageTitle = "Blockchain";
include 'includes/header.php'; 
?>

    <main>
      <h2>Blockchain: Segurança e Transparência nas Transações</h2>

      <div class="author-section left-aligned">
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo"> <div class="author-text">
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
        O <strong>Blockchain</strong> está se destacando como uma tecnologia
        essencial na transformação digital, especialmente por sua capacidade de
        oferecer segurança e transparência em transações de negócios.
        Originalmente criada para suportar criptomoedas, essa tecnologia agora é
        usada em vários setores para garantir a integridade de dados e a
        confiança em processos digitais. Em sua essência, o blockchain é um
        livro-razão distribuído, imutável e compartilhado, onde os registros de
        transações são mantidos de forma segura e acessível a todos os
        participantes da rede.
      </p>

      <h4>Personalização da Aprendizagem</h4>

      <p>
        O principal benefício do blockchain é sua capacidade de garantir a
        <strong>segurança</strong> das transações, uma vez que cada bloco de
        dados é criptograficamente ligado ao anterior, criando uma cadeia segura
        que é praticamente impossível de ser alterada sem detecção. Isso reduz
        significativamente os riscos de fraudes e manipulações de dados.
        Empresas que lidam com informações sensíveis, como bancos, empresas de
        logística e organizações de saúde, estão usando o blockchain para
        proteger registros de transações financeiras, rastrear produtos na
        cadeia de suprimentos e até mesmo proteger dados de pacientes,
        garantindo que eles não sejam alterados ou acessados de forma não
        autorizada.
      </p>

      <p>
        Além da segurança, o blockchain promove a transparência. Todos os
        participantes da rede podem visualizar as transações registradas, o que
        aumenta a confiança entre as partes envolvidas. Em setores como o de
        logística, por exemplo, a tecnologia permite rastrear cada etapa de um
        produto, desde o ponto de origem até o consumidor final. Isso não apenas
        melhora a eficiência operacional, mas também aumenta a confiança do
        consumidor, que pode verificar a autenticidade e a origem dos produtos
        adquiridos. No setor financeiro, contratos inteligentes baseados em
        blockchain automatizam o cumprimento de acordos, executando
        <strong>transações</strong>
        automaticamente quando as condições pré-definidas são atendidas.
      </p>

      <p>
        Apesar dos seus benefícios, a implementação do blockchain na
        transformação digital apresenta desafios. Um dos principais é a
        <strong>escalabilidade</strong>, já que a adição de novos blocos pode
        ser lenta e exigir muita energia computacional, especialmente em redes
        públicas. Além disso, o custo de implementação inicial pode ser alto, já
        que exige um investimento em infraestrutura e treinamento para que as
        equipes compreendam como utilizar essa tecnologia de forma eficaz. Por
        fim, a questão da regulamentação é um ponto crítico, já que muitos
        países ainda estão desenvolvendo leis e políticas para governar o uso do
        blockchain de maneira segura e justa.
      </p>

      <p>
        No entanto, à medida que as empresas se adaptam à transformação digital,
        o blockchain está se tornando uma ferramenta indispensável para aqueles
        que desejam operar com mais segurança e transparência. A tecnologia é
        particularmente promissora quando integrada a outros elementos da
        transformação digital, como a inteligência artificial e a Internet das
        Coisas (IoT), criando um ecossistema digital mais seguro, transparente e
        eficiente. Em resumo, o blockchain não apenas suporta a transformação
        digital, mas também estabelece uma base de confiança em um mundo cada
        vez mais digital.
      </p>

      <div class="article-info">
        <p>Publicado em 21 de outubro de 2024</p>
      </div>

      <hr />

      <section class="related-posts">
        <h4>Outros posts do autor</h4>
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
        <img src="assets/images/gilson.jpg" alt="Foto do Autor" class="author-photo"> <div class="author-text">
          <span class="author-info"
            >Escrito por <strong>Gilson T. Silva</strong> • 5 min de
            leitura</span
          >
          <button class="follow-button">Seguir</button>
        </div>
      </div>

      <section id="comments-section">
        <h4>Comentários</h4>

        
    
        <form action="includes/inserir_comentario.php" method="POST"> <input type="hidden" name="id_artigo" value="2"> <input type="text" id="comment-name" name="nome" placeholder="Seu nome" required>
            <textarea id="comment-text" name="comentario" placeholder="Seu comentário" required></textarea>
            <button id="submit-com"type="submit">Enviar</button>
        </form>
    
        <div id="comment-list">

        </div>
        <?php
    include_once 'includes/conexao.php'; 

    $id_artigo = 2;

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