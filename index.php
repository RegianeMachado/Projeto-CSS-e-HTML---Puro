<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portifólio css e html">
        <meta name="keywords" content="HTML,CSS">
        <meta name="author" content="Regiane Machado">
        <title>Projeto CSS e HTML - Puro</title>
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <header class="main-header"> 
            <a href="index.php" class="main-header-link imagem-link"><img src="images/avatar.jpg" alt=""></a>
            <h1 class="main-header-title">Trabalho de <br> <strong>Regi Sabbath</strong>, 
                <br>Desenvolvdora web</h1>
            <p>
            Conheça mais em <a href="http://wwww.google.com" class="main-header-link">Google</a>    
            </p>
        </header>
        <main class="main-content">
            <section class="main-content-section">
                <h2> Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. 
                    Suspendisse consectetur justo in tristique aliquam. Praesent et egestas velit, vitae eleifend felis. 
                    Donec finibus justo non auctor fermentum. Fusce convallis, quam et blandit laoreet, magna nulla condimentum dui, 
                    a placerat nisl libero vel nunc. Nam id risus sed odio volutpat dignissim. 
                    Proin eu augue suscipit, interdum diam ut, vehicula quam. Aenean mattis dolor quis facilisis volutpat. 
                    Curabitur elementum tincidunt ipsum, nec faucibus tellus volutpat id. Mauris blandit vel nisl quis tempus. 
                    Aenean ornare consectetur lorem non dignissim. Mauris efficitur purus nisl. Cras rhoncus eu tellus nec volutpat.</p>
                <a href="#" title="Veja mais" class="button-default">Veja mais</a>
            </section>
            <section class="main-content-section">
                <h3>Recent Works</h3>
                <div class="row">
                    <div class="col-2">
                        <article class="recent-works-card">
                            <a href="images/fulls/01.jpg" class="imagem-link"><img src="images/thumbs/01.jpg" title="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                        <article class="recent-works-card">
                            <a href="images/fulls/02.jpg"  class="imagem-link"><img src="images/thumbs/02.jpg" title="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                        <article class="recent-works-card">
                            <a href="images/fulls/03.jpg"  class="imagem-link"><img src="images/thumbs/03.jpg" title="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                    </div>
                    <div class="col-2">
                        <article class="recent-works-card">
                            <a href="images/fulls/04.jpg"  class="imagem-link"><img src="images/thumbs/04.jpg" alt="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                        <article class="recent-works-card">
                            <a href="images/fulls/05.jpg"  class="imagem-link"><img src="images/thumbs/05.jpg" alt="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                        <article class="recent-works-card">
                            <a href="images/fulls/06.jpg"  class="imagem-link"><img src="images/thumbs/06.jpg" alt="description"></a>
                            <p class="recent-works-card-title">Lorem Ipsum</p>
                            <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                        </article>
                    </div>
                </div>
                <a href="#" title="Veja Portifolio Completo" class="button-default">Veja Portifolio Completo</a>
            </section>
            <section class="main-content-section">
                <h3>Get in touch</h3>
                <p>Maecenas vitae eleifend nunc. Sed finibus malesuada nisl at aliquam. </p>
                <div class="row">
                    <div class="col-2-3">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-2">
                                    <label for='nome'>Nome</label>
                                    <input type="text" name="nome" id="nome" autofocus>
                                </div>
                                <div class="col-2">
                                    <label for='email'>Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>
                            <labe>Digite sua mensagem</labe>
                            <textarea name="mensagem" id="mensagem"></textarea>
                            <input type="submit" value="Enviar" class="button-default button-default-stroke button-default-big">
                        </form>
                    </div>
                    <div class="col-1-3">
                        <address>
                            <p>
                                <span>
                                    Endereço:
                                </span>
                                rua Julio barbosa de lima 10
                            </p>
                            <p>
                                <span>Telefone</span>
                                00-000000
                            </p>
                            <p>
                                <span>Email</span>
                                teste@teste.com
                            </p>
                        </address>
                    </div>
                </div>    
            </section>
            <section class="main-content-section">
                <h3>Elements</h3>
                <h4>Text</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<b> This is bold</b> and <bold>this is strong</bold>
                <i>Aliquam ac gravida justo.</i> Integer molestie convallis mi, <em>at pretium tellus rutrum non.</em>
                <sup>This is sup</sup>and <sub>This is sub</sub>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <code>foreach($a as $b)...</code>
                </p>
                <h1> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                <h6> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                 <h4>Blockquote</h4>
                <blockquote cite="https://www.lipsum.com/feed/html">
                   
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac gravida justo. 
                        Integer molestie convallis mi, at pretium tellus rutrum non. Maecenas sem lorem, suscipit vitae neque sit amet, iaculis blandit lacus.
                        Etiam leo metus, viverra eu pellentesque et, vestibulum eu diam. Nunc consequat venenatis urna eu finibus. 
                        Praesent tempor massa ex, vel convallis neque bibendum et. Ut mauris quam, tempus et arcu id, condimentum euismod lorem. 
                        Phasellus semper dolor sed interdum volutpat.
                    </p>                
                </blockquote>
                <q cite="https://www.lipsum.com/feed/html">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac gravida justo. </p>
                </q>
                <h4>Preformatado</h4>
                <pre>
                    <code>
                     if ($a > $b)
                        echo "a is bigger than b";   
                    </code>
                </pre>

                <h4>Listas</h4>
                <div class="row">
                    <div class="col-2">
                        <h5>Não ordenadas</h5>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>
                        <h5>Não ordenadas</h5>
                        <ol>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ol> 
                    </div>
                    <div class="col-2">
                        <h5>Alternadas</h5>
                        <ul class="ul-alternate">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>
                        <h5>Icons</h5>
                        <ul class="ul-icons">
                            <li> <i class="fab fa-twitter-square"></i></li>
                            <li><i class="fab fa-facebook-square"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                    </div>
                </div>

                <h5>Actions</h5>
                <div class="row">
                    <div class="col-2">
                        <p>
                            <a href="#" class="button-default">Default</a>
                            <a href="#" class="button-default button-default-stroke">Small</a>
                        </p>
                        <p>
                            <a href="#" class="button-default button-default-small">Default</a>
                            <a href="#" class="button-default button-default-small button-default-stroke">Small</a>
                        </p>
                    </div>
                    <div class="col-2">
                        <p>
                            <a href="#" class="button-default button-default-full">Default</a>
                            <a href="#" class="button-default button-default-full button-default-stroke">Small</a>
                        </p>
                        <p>
                            <a href="#" class="button-default button-default-full button-default-small">Default</a>
                            <a href="#" class="button-default button-default-full button-default-small button-default-stroke">Small</a>
                        </p>
                    </div>
                </div>
                <h4>Tabelas</h4>
                <h5>Default</h5>
                <table class="table">
                    <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    </th>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>

                        </tr>
                        <tr>
                            <td>Item 2</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 3</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 4</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 5</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                </table>

                <h5>Alternate</h5>
                <table class="table table-alternate">
                    <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    </th>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>

                        </tr>
                        <tr>
                            <td>Item 2</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 3</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 4</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                        <tr>
                            <td>Item 5</td>
                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>12.99</td>
                        </tr>
                    </tbody>
                </table>
                <h5>Buttons</h5>
                <p>
                    <button  class="button-default">Default</button>
                    <button  class="button-default button-default-stroke">Default</button>
                </p>
                <p>
                    <button  class="button-default button-default-small">Default</button>
                    <button class="button-default button-default-small button-default-stroke">Default</button>
                </p>
                <p>
                    <button  class="button-default button-default-full">Default</button>
                    <button  class="button-default button-default-full button-default-stroke">Default</button>
                </p>
                <p>
                    <button  class="button-default button-default-full button-default-small">Default</button>
                    <button  class="button-default button-default-full button-default-small button-default-stroke">Default</button>
                </p>
                <input class="button-default" type="submit" value="Enviar">
                <h5>Formulário</h5>
                <form action="dados.php">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email">
                    <select>
                        <option value="0">Selecione</option>
                        <option value="1">Opção 1</option>
                        <option value="2">Opção 2</option>
                        <option value="3">Opção 3</option>
                        <option value="4">Opção 4</option>
                    </select>
                    <div class="row">
                        <div class="col-2">
                            <label>
                                <input type="radio" name="prioridade" value="baixa">
                                Prioridade baixa</label>
                            <label>
                                <input type="radio" name="prioridade" value="media">
                                Prioridade média</label>
                            <label>
                                <input type="radio" name="prioridade" value="alta">
                                Prioridade alta</label>
                        </div>
                        <div class="col-2">
                            <label>   
                                <input type="checkbox" name="copy" value="1">
                                Envie uma cópia
                            </label>
                            <label>
                                <input type="checkbox" name="human" value="2">
                                Não sou um robô
                            </label>
                        </div>
                    </div>

                    <label for="msg">Mensagem</label>
                    <textarea placeholder="Digite seu texto" id="msg"></textarea>
                    <input type="submit" value="enviar" class="button-default button-default-big">
                    <input type="reset" value="apagar" class="button-default button-default-stroke button-default-big">
                </form>
            </section>
            <section class="main-content-section">
                <h3>Imagens</h3>
                <div class="gallery-img">
                    <img src="images/fulls/01.jpg" alt="">
                </div>
                <div class="gallery-thumb row">
                    <img class="col-1-3" src="images/thumbs/01.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/02.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/03.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/04.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/05.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/06.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/07.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/08.jpg" alt="">
                    <img class="col-1-3" src="images/thumbs/03.jpg" alt="">
                </div>

                <h4>Left &amp; Right<h4>
                        <img src="images/avatar.jpg" alt="" class="img-left">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac gravida justo. 
                            Integer molestie convallis mi, at pretium tellus rutrum non. Maecenas sem lorem, suscipit vitae neque sit amet, iaculis blandit lacus.
                            Etiam leo metus, viverra eu pellentesque et, vestibulum eu diam. Nunc consequat venenatis urna eu finibus. Praesent tempor massa ex, vel convallis neque bibendum et. Ut mauris quam, tempus et arcu id, condimentum euismod lorem. Phasellus semper dolor sed interdum volutpat. Vivamus mollis, augue sit amet sagittis faucibus, nunc ipsum aliquet quam, sodales porttitor enim odio at dui. Etiam vitae dui vel erat condimentum euismod. Cras eget risus ut nisl porttitor scelerisque vel sed lorem. Cras eros felis, auctor pellentesque porta in, commodo et turpis. Praesent non libero in enim cursus tempus eu in justo. Pellentesque ornare risus non nunc vulputate egestas. 
                            Sed vulputate velit quis fringilla ullamcorper.</p>
                        <img src="images/avatar.jpg" alt="" class="img-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac gravida justo. 
                            Integer molestie convallis mi, at pretium tellus rutrum non. Maecenas sem lorem, suscipit vitae neque sit amet, iaculis blandit lacus.
                            Etiam leo metus, viverra eu pellentesque et, vestibulum eu diam. Nunc consequat venenatis urna eu finibus. Praesent tempor massa ex, vel convallis neque bibendum et. Ut mauris quam, tempus et arcu id, condimentum euismod lorem. Phasellus semper dolor sed interdum volutpat. Vivamus mollis, augue sit amet sagittis faucibus, nunc ipsum aliquet quam, sodales porttitor enim odio at dui. Etiam vitae dui vel erat condimentum euismod. Cras eget risus ut nisl porttitor scelerisque vel sed lorem. Cras eros felis, auctor pellentesque porta in, commodo et turpis. Praesent non libero in enim cursus tempus eu in justo. Pellentesque ornare risus non nunc vulputate egestas. 
                            Sed vulputate velit quis fringilla ullamcorper.</p>

                        </section>
                        </main>
                        <footer class="main-footer">
                            <ul class="ul-icons">
                                <li><a class="icon-link"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a class="icon-link"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a class="icon-link"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <ul class="copyright">
                                <li>@Untitled</li><li>Design:</li><a href="">Regi Sabbath</a></li>
                            </ul>
                        </footer>
                        </body>
                        </html>
