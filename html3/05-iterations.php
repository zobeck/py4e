<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>-</title>
  <style>
    code{white-space: pre-wrap;}
    span.smallcaps{font-variant: small-caps;}
    span.underline{text-decoration: underline;}
    div.column{display: inline-block; vertical-align: top; width: 50%;}
    div.hanging-indent{margin-left: 1.5em; text-indent: -1.5em;}
    ul.task-list{list-style: none;}
  </style>
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
</head>
<body>
<h1 id="iteración">Iteración</h1>
<p></p>
<h2 id="update">Actualización de variables</h2>
<p> </p>
<p>Uno de los usos habituales de las sentencias de asignación consiste en realizar una actualización sobre una variable – en la cual el valor nuevo de esa variable depende del antiguo.</p>
<pre class="python"><code>x = x + 1</code></pre>
<p>Esto quiere decir "‘toma el valor actual de <code>x</code>, añádele 1, y luego actualiza <code>x</code> con el nuevo valor’’.</p>
<p>Si intentas actualizar una variable que no existe, obtendrás un error, ya que Python evalúa el lado derecho antes de asignar el valor a <code>x</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; x = x + 1
NameError: name &#39;x&#39; is not defined</code></pre>
<p>Antes de que puedas actualizar una variable, debes <em>inicializarla</em>, normalmente mediante una simple asignación:</p>
<p></p>
<pre class="python"><code>&gt;&gt;&gt; x = 0
&gt;&gt;&gt; x = x + 1</code></pre>
<p>Actualizar una variable añadiéndole 1 se denomina <em>incrementar</em>; restarle 1 recibe el nombre de <em>decrementar</em> (o disminuir).</p>
<p> </p>
<h2 id="la-sentencia-while">La sentencia <code>while</code></h2>
<p>    </p>
<p>Los PCs se suelen utilizar a menudo para automatizar tareas repetitivas. Repetir tareas idénticas o muy similares sin cometer errores es algo que a las máquinas se les da bien y en cambio a las personas no. Como las iteraciones resultan tan habituales, Python proporciona varias características en su lenguaje para hacerlas más sencillas.</p>
<p>Una forma de iteración en Python es la sentencia <code>while</code>. He aquí un programa sencillo que cuenta hacia atrás desde cinco y luego dice “¡Despegue!”.</p>
<pre class="python"><code>n = 5
while n &gt; 0:
    print(n)
    n = n - 1
print(&#39;¡Despegue!&#39;)</code></pre>
<p>Casi se puede leer la sentencia <code>while</code> como si estuviera escrita en inglés. Significa, “Mientras <code>n</code> sea mayor que 0, muestra el valor de <code>n</code> y luego reduce el valor de <code>n</code> en 1 unidad. Cuando llegues a 0, sal de la sentencia <code>while</code> y muestra la palabra <code>¡Despegue!</code>”</p>
<p></p>
<p>Éste es el flujo de ejecución de la sentencia <code>while</code>, explicado de un modo más formal:</p>
<ol type="1">
<li><p>Se evalúa la condición, obteniendo <code>Verdadero</code> or <code>Falso</code>.</p></li>
<li><p>Si la condición es falsa, se sale de la sentencia <code>while</code> y se continúa la ejecución en la siguiente sentencia.</p></li>
<li><p>Si la condición es verdadera, se ejecuta el cuerpo del <code>while</code> y luego se vuelve al paso 1.</p></li>
</ol>
<p>Este tipo de flujo recibe el nombre de <em>bucle</em>, ya que el tercer paso enlaza de nuevo con el primero. Cada vez que se ejecuta el cuerpo del bucle se dice que realizamos una <em>iteración</em>. Para el bucle anterior, podríamos decir que “ha tenido cinco iteraciones”, lo que significa que el cuerpo del bucle se ha ejecutado cinco veces.</p>
<p>  </p>
<p>El cuerpo del bucle debe cambiar el valor de una o más variables, de modo que la condición pueda en algún momento evaluarse como falsa y el bucle termine. La variable que cambia cada vez que el bucle se ejecuta y controla cuándo termina éste, recibe el nombre de <em>variable de iteración</em>. Si no hay variable de iteración, el bucle se repetirá para siempre, resultando así un <em>bucle infinito</em>.</p>
<h2 id="bucles-infinitos">Bucles infinitos</h2>
<p>Una fuente de diversión sin fin para los programadores es la constatación de que las instrucciones del champú: “Enjabone, aclare, repita”, son un bucle infinito, ya que no hay una <em>variable de iteración</em> que diga cuántas veces debe ejecutarse el proceso.</p>
<p> </p>
<p>En el caso de una <code>cuenta atrás</code>, podemos verificar que el bucle termina, ya que sabemos que el valor de <code>n</code> es finito, y podemos ver que ese valor se va haciendo más pequeño cada vez que se repite el bucle, de modo que en algún momento llegará a 0. Otras veces un bucle es obviamente infinito, porque no tiene ninguna variable de iteración.</p>
<h2 id="bucles-infinitos-y-break">“Bucles infinitos” y <code>break</code></h2>
<p> </p>
<p>A veces no se sabe si hay que terminar un bucle hasta que se ha recorrido la mitad del cuerpo del mismo. En ese caso se puede crear un bucle infinito a propósito y usar la sentencia <code>break</code> para salir fuera de él cuando se desee.</p>
<p>El bucle siguiente es, obviamente, un <em>bucle infinito</em>, porque la expresión lógica de la sentencia <code>while</code> es simplemente la constante lógica <code>True (verdadero)</code>;</p>
<pre class="python"><code>n = 10
while True:
    print(n, end=&#39; &#39;)
    n = n - 1
print(&#39;¡Terminado!&#39;)</code></pre>
<p>Si cometes el error de ejecutar este código, aprenderás rápidamente cómo detener un proceso de Python bloqueado en el sistema, o tendrás que localizar dónde se encuentra el botón de apagado de tu equipo. Este programa funcionará para siempre, o hasta que la batería del equipo se termine, ya que la expresión lógica al principio del bucle es siempre cierta, en virtud del hecho de que esa expresión es precisamente el valor constante <code>True</code>.</p>
<p>A pesar de que en este caso se trata de un bucle infinito inútil, se puede usar ese diseño para construir bucles útiles, siempre que se tenga la precaución de añadir código en el cuerpo del bucle para salir explícitamente, usando <code>break</code> cuando se haya alcanzado la condición de salida.</p>
<p>Por ejemplo, supón que quieres recoger entradas de texto del usuario hasta que éste escriba <code>fin</code>. Podrías escribir:</p>
<pre class="python"><code>while True:
    linea = input(&#39;&gt; &#39;)
    if linea == &#39;fin&#39;:
        break
    print(linea)
print(&#39;¡Terminado!&#39;)

# Código: https://es.py4e.com/code3/copytildone1.py</code></pre>
<p>La condición del bucle es <code>True</code>, lo cual es verdadero siempre, así que el bucle se repetirá hasta que se ejecute la sentencia break.</p>
<p>Cada vez que se entre en el bucle, se pedirá una entrada al usuario. Si el usuario escribe <code>fin</code>, la sentencia <code>break</code> hará que se salga del bucle. En cualquier otro caso, el programa repetirá cualquier cosa que el usuario escriba y volverá al principio del bucle. Éste es un ejemplo de su funcionamiento:</p>
<pre><code>&gt; hola a todos
hola a todos
&gt; he terminado
he terminado
&gt; fin
¡Terminado!</code></pre>
<p>Este modo de escribir bucles <code>while</code> es habitual, ya que así se puede comprobar la condición en cualquier punto del bucle (no sólo al principio), y se puede expresar la condición de parada afirmativamente (“detente cuando ocurra…”), en vez de tener que hacerlo con lógica negativa (“sigue haciéndolo hasta que ocurra…”).</p>
<h2 id="finalizar-iteraciones-con-continue">Finalizar iteraciones con <code>continue</code></h2>
<p> </p>
<p>Algunas veces, estando dentro de un bucle se necesita terminar con la iteración actual y saltar a la siguiente de forma inmediata. En ese caso se puede utilizar la sentencia <code>continue</code> para pasar a la siguiente iteración sin terminar la ejecución del cuerpo del bucle para la actual.</p>
<p>A continuación se muestra un ejemplo de un bucle que repite lo que recibe como entrada hasta que el usuario escribe “fin”, pero trata las líneas que empiezan por el carácter almohadilla como líneas que no deben mostrarse en pantalla (algo parecido a lo que hace Python con los comentarios).</p>
<pre class="python"><code>while True:
    linea = input(&#39;&gt; &#39;)
    if linea[0] == &#39;#&#39; :
        continue
    if linea == &#39;fin&#39;:
        break
    print(linea)
print(&#39;¡Terminado!&#39;)

# Código: https://es.py4e.com/code3/copytildone2.py</code></pre>
<p>He aquí una ejecución de ejemplo de ese nuevo programa con la sentencia <code>continue</code> añadida.</p>
<pre><code>&gt; hola a todos
hola a todos
&gt; # no imprimas esto
&gt; ¡imprime esto!
¡imprime esto!
&gt; fin
¡Terminado!</code></pre>
<p>Todas las líneas se imprimen en pantalla, excepto la que comienza con el símbolo de almohadilla, ya que en ese caso se ejecuta <code>continue</code>, finaliza la iteración actual y salta de vuelta a la sentencia <code>while</code> para comenzar la siguiente iteración, de modo que que se omite la sentencia <code>print</code>.</p>
<h2 id="bucles-definidos-usando-for">Bucles definidos usando <code>for</code></h2>
<p> </p>
<p>A veces se desea repetir un bucle a través de un <em>conjunto</em> de cosas, como una lista de palabras, las líneas de un archivo, o una lista de números. Cuando se tiene una lista de cosas para recorrer, se puede construir un bucle <em>definido</em> usando una sentencia <code>for</code>. A la sentencia <code>while</code> se la llama un bucle <em>indefinido</em>, porque simplemente se repite hasta que cierta condición se hace <code>Falsa</code>, mientras que el bucle <code>for</code> se repite a través de un conjunto conocido de elementos, de modo que ejecuta tantas iteraciones como elementos hay en el conjunto.</p>
<p>La sintaxis de un bucle <code>for</code> es similar a la del bucle <code>while</code>, en ella hay una sentencia <code>for</code> y un cuerpo que se repite:</p>
<pre class="python"><code>amigos = [&#39;Joseph&#39;, &#39;Glenn&#39;, &#39;Sally&#39;]
for amigo in amigos:
    print(&#39;Feliz año nuevo:&#39;, amigo)
print(&#39;¡Terminado!&#39;)</code></pre>
<p>En términos de Python, la variable <code>amigos</code> es una lista<a href="#fn1" class="footnote-ref" id="fnref1" role="doc-noteref"><sup>1</sup></a> de tres cadenas y el bucle <code>for</code> se mueve recorriendo la lista y ejecuta su cuerpo una vez para cada una de las tres cadenas en la lista, produciendo esta salida:</p>
<pre class="python"><code>Feliz año nuevo: Joseph
Feliz año nuevo: Glenn
Feliz año nuevo: Sally
¡Terminado!</code></pre>
<p>La traducción de este bucle <code>for</code> al español no es tan directa como en el caso del <code>while</code>, pero si piensas en los amigos como un <em>conjunto</em>, sería algo así como: “Ejecuta las sentencias en el cuerpo del bucle una vez <em>para (for)</em> cada amigo que esté <em>en (in)</em> el conjunto llamado amigos.”</p>
<p>Revisando el bucle <code>for</code>, <em>for</em> e <em>in</em> son palabras reservadas de Python, mientras que <code>amigo</code> y <code>amigos</code> son variables.</p>
<pre class="python"><code>for amigo in amigos:
    print(&#39;Feliz año nuevo::&#39;, amigo)</code></pre>
<p>En concreto, <code>amigo</code> es la <em>variable de iteración</em> para el bucle for. La variable <code>amigo</code> cambia para cada iteración del bucle y controla cuándo se termina el bucle <code>for</code>. La <em>variable de iteracion</em> se desplaza sucesivamente a través de las tres cadenas almacenadas en la variable <code>amigos</code>.</p>
<h2 id="diseños-de-bucles">Diseños de bucles</h2>
<p>A menudo se usa un bucle <code>for</code> o <code>while</code> para movernos a través de una lista de elementos o el contenido de un archivo y se busca algo, como el valor más grande o el más pequeño de los datos que estamos revisando.</p>
<p>Los bucles generalmente se construyen así:</p>
<ul>
<li><p>Se inicializan una o más variables antes de que el bucle comience</p></li>
<li><p>Se realiza alguna operación con cada elemento en el cuerpo del bucle, posiblemente cambiando las variables dentro de ese cuerpo.</p></li>
<li><p>Se revisan las variables resultantes cuando el bucle se completa</p></li>
</ul>
<p>Usaremos ahora una lista de números para demostrar los conceptos y construcción de estos diseños de bucles.</p>
<h3 id="bucles-de-recuento-y-suma">Bucles de recuento y suma</h3>
<p>Por ejemplo, para contar el número de elementos en una lista, podemos escribir el siguiente bucle <code>for</code>:</p>
<pre class="python"><code>contador = 0
for valor in [3, 41, 12, 9, 74, 15]:
    contador = contador + 1
print(&#39;Num. elementos: &#39;, contador)</code></pre>
<p>Ajustamos la variable <code>contador</code> a cero antes de que el bucle comience, después escribimos un bucle <code>for</code> para movernos a través de la lista de números. Nuestra variable de <em>iteración</em> se llama <code>valor</code>, y dado que no usamos <code>valor</code> dentro del bucle, lo único que hace es controlar el bucle y hacer que el cuerpo del mismo sea ejecutado una vez para cada uno de los valores de la lista.</p>
<p>En el cuerpo del bucle, añadimos 1 al valor actual de <code>contador</code> para cada uno de los valores de la lista. Mientras el bucle se está ejecutando, el valor de <code>contador</code> es la cantidad de valores que se hayan visto “hasta ese momento”.</p>
<p>Una vez el bucle se completa, el valor de <code>contador</code> es el número total de elementos. El número total “cae en nuestro poder” al final del bucle. Se construye el bucle de modo que obtengamos lo que queremos cuando éste termina.</p>
<p>Otro bucle similar, que calcula el total de un conjunto de números, se muestra a continuación:</p>
<pre class="python"><code>total = 0
for valor in [3, 41, 12, 9, 74, 15]:
    total = total + valor
print(&#39;Total: &#39;, total)</code></pre>
<p>En este bucle, <em>sí</em> utilizamos la <em>variable de iteración</em>. En vez de añadir simplemente uno a <code>contador</code> como en el bucle previo, ahora durante cada iteración del bucle añadimos el número actual (3, 41, 12, etc.) al total en ese momento. Si piensas en la variable <code>total</code>, ésta contiene la “suma parcial de valores hasta ese momento”. Así que antes de que el bucle comience, <code>total</code> es cero, porque aún no se ha examinado ningún valor. Durante el bucle, <code>total</code> es la suma parcial, y al final del bucle, <code>total</code> es la suma total definitiva de todos los valores de la lista.</p>
<p>Cuando el bucle se ejecuta, <code>total</code> acumula la suma de los elementos; una variable que se usa de este modo recibe a veces el nombre de <em>acumulador</em>.</p>
<p></p>
<p>Ni el bucle que cuenta los elementos ni el que los suma resultan particularmente útiles en la práctica, dado que existen las funciones internas <code>len()</code> y <code>sum()</code> que cuentan el número de elementos de una lista y el total de elementos en la misma respectivamente.</p>
<h3 id="bucles-de-máximos-y-mínimos">Bucles de máximos y mínimos</h3>
<p>   </p>
<p>Para encontrar el valor mayor de una lista o secuencia, construimos el bucle siguiente:</p>
<pre class="python"><code>mayor = None
print(&#39;Antes:&#39;, mayor)
for valor in [3, 41, 12, 9, 74, 15]:
    if mayor is None or valor &gt; mayor :
        mayor = valor
    print(&#39;Bucle:&#39;, valor, mayor)
print(&#39;Mayor:&#39;, mayor)</code></pre>
<p>Cuando se ejecuta el programa, se obtiene la siguiente salida:</p>
<pre><code>Antes: None
Bucle: 3 3
Bucle: 41 41
Bucle: 12 41
Bucle: 9 41
Bucle: 74 74
Bucle: 15 74
Mayor: 74</code></pre>
<p>Debemos pensar en la variable <code>mayor</code> como el “mayor valor visto hasta ese momento”. Antes del bucle, asignamos a <code>mayor</code> el valor <code>None</code>. <code>None</code> es un valor constante especial que se puede almacenar en una variable para indicar que la variable está “vacía”.</p>
<p>Antes de que el bucle comience, el mayor valor visto hasta entonces es <code>None</code>, dado que no se ha visto aún ningún valor. Durante la ejecución del bucle, si <code>mayor</code> es <code>None</code>, entonces tomamos el primer valor que tenemos como el mayor hasta entonces. Se puede ver en la primera iteración, cuando el valor de <code>valor</code> es 3, mientras que <code>mayor</code> es <code>None</code>, inmediatamente hacemos que <code>mayor</code> pase a ser 3.</p>
<p>Tras la primera iteración, <code>mayor</code> ya no es <code>None</code>, así que la segunda parte de la expresión lógica compuesta que comprueba si <code>valor &gt; mayor</code> se activará sólo cuando encontremos un valor que sea mayor que el “mayor hasta ese momento”. Cuando encontramos un nuevo valor “mayor aún”, tomamos ese nuevo valor para <code>mayor</code>. Se puede ver en la salida del programa que <code>mayor</code> pasa desde 3 a 41 y luego a 74.</p>
<p>Al final del bucle, se habrán revisado todos los valores y la variable <code>mayor</code> contendrá entonces el mayor valor de la lista.</p>
<p>Para calcular el número más pequeño, el código es muy similar con un pequeño cambio:</p>
<pre class="python"><code>print(&#39;Antes:&#39;, menor)
for valor in [3, 41, 12, 9, 74, 15]:
    if menor is None or valor &lt; menor:
        menor = valor
    print(&#39;Bucle:&#39;, valor, menor)
print(&#39;Menor:&#39;, menor)</code></pre>
<p>De nuevo, <code>menor</code> es el “menor hasta ese momento” antes, durante y después de que el bucle se ejecute. Cuando el bucle se ha completado, <code>menor</code> contendrá el valor mínimo de la lista</p>
<p>También como en el caso del número de elementos y de la suma, las funciones internas <code>max()</code> y <code>min()</code> convierten la escritura de este tipo de bucles en innecesaria.</p>
<p>Lo siguiente es una versión simple de la función interna de Python <code>min()</code>:</p>
<pre class="python"><code>def min(valores):
    menor = None
    for valor in valores:
        if menor is None or valor &lt; menor:
            menor = valor
    return menor</code></pre>
<p>En esta versión de la función para calcular el mínimo, hemos eliminado las sentencias <code>print</code>, de modo que sea equivalente a la función <code>min</code>, que ya está incorporada dentro de Python.</p>
<h2 id="depuración">Depuración</h2>
<p></p>
<p>A medida que vayas escribiendo programas más grandes, puede que notes que vas necesitando emplear cada vez más tiempo en depurarlos. Más código significa más oportunidades de cometer un error y más lugares donde los bugs pueden esconderse.</p>
<p> </p>
<p>Un método para acortar el tiempo de depuración es “depurar por bisección”. Por ejemplo, si hay 100 líneas en tu programa y las compruebas de una en una, te llevará 100 pasos.</p>
<p>En lugar de eso, intenta partir el problema por la mitad. Busca en medio del programa, o cerca de ahí, un valor intermedio que puedas comprobar. Añade una sentencia <code>print</code> (o alguna otra cosa que tenga un efecto verificable), y haz funcionar el programa.</p>
<p>Si en el punto medio la verificación es incorrecta, el problema debería estar en la primera mitad del programa. Si ésta es correcta, el problema estará en la segunda mitad.</p>
<p>Cada vez que realices una comprobación como esta, reduces a la mitad el número de líneas en las que buscar. Después de seis pasos (que son muchos menos de 100), lo habrás reducido a una o dos líneas de código, al menos en teoría.</p>
<p>En la práctica no siempre está claro qué es “en medio del programa”, y no siempre es posible colocar ahí una verificación. No tiene sentido contar las líneas y encontrar el punto medio exacto. En lugar de eso, piensa en lugares del programa en los cuales pueda haber errores y en lugares donde resulte fácil colocar una comprobación. Luego elige un sitio donde estimes que las oportunidades de que el bug esté por delante y las de que esté por detrás de esa comprobación son más o menos las mismas.</p>
<h2 id="glosario">Glosario</h2>
<dl>
<dt>acumulador</dt>
<dd><p>Una variable usada en un bucle para sumar o acumular un resultado.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>bucle infinito</dt>
<dd><p>Un bucle en el cual la condición de terminación no se satisface nunca o para el cual no existe dicha condición de terminación.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>contador</dt>
<dd><p>Una variable usada en un bucle para contar el número de veces que algo sucede. Inicializamos el contador a cero y luego lo vamos incrementando cada vez que queramos que “cuente” algo.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>decremento</dt>
<dd><p>Una actualización que disminuye el valor de una variable.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>inicializar</dt>
<dd><p>Una asignación que da un valor inicial a una variable que va a ser después actualizada.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>incremento</dt>
<dd>Una actualización que aumenta el valor de una variable (a menudo en una unidad).
</dd>
</dl>
<p></p>
<dl>
<dt>iteración</dt>
<dd>Ejecución repetida de una serie de sentencias usando bien una función que se llama a si misma o bien un bucle.
</dd>
</dl>
<p></p>
<h2 id="ejercicios">Ejercicios</h2>
<p><strong>Ejercicio 1: Escribe un programa que lea repetidamente números hasta que el usuario introduzca “fin”. Una vez se haya introducido “fin”, muestra por pantalla el total, la cantidad de números y la media de esos números. Si el usuario introduce cualquier otra cosa que no sea un número, detecta su fallo usando <code>try</code> y <code>except</code>, muestra un mensaje de error y pasa al número siguiente.</strong></p>
<pre><code>Introduzca un número: 4
Introduzca un número: 5
Introduzca un número: dato erróneo
Entrada inválida
Introduzca un número: 7
Introduzca un número: fin
16 3 5.33333333333</code></pre>
<p><strong>Ejercicio 2: Escribe otro programa que pida una lista de números como la anterior y al final muestre por pantalla el máximo y mínimo de los números, en vez de la media.</strong></p>
<section class="footnotes" role="doc-endnotes">
<hr />
<ol>
<li id="fn1" role="doc-endnote"><p>Examinaremos las listas con más detalle en un capítulo posterior.<a href="#fnref1" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
</ol>
</section>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
