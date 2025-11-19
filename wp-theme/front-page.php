<?php
/**
 * Front Page Template - Landing Page
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

get_header();

// Get customizer values
$hero_title = ekc_get_option('hero_title', '¿BUSCAS HORAS DE DIVERSIÓN INTELIGENTE LEJOS DE LAS PANTALLAS?');
$hero_description = ekc_get_option('hero_description', 'Nuestro cuaderno combina Juegos de Lógica, Pasatiempos Entretenidos y Retos Educativos para niños de 8 a 12 años, garantizando que el tiempo libre sea de calidad.');
$hero_image = ekc_get_option('hero_image', get_template_directory_uri() . '/images/image1.jpg');
$benefits_image = ekc_get_option('benefits_image', get_template_directory_uri() . '/images/image2.jpg');
$interior_image = ekc_get_option('interior_image', get_template_directory_uri() . '/images/image3.jpg');
$amazon_url = ekc_get_option('amazon_url', 'https://www.amazon.es/-/en/dp/B0G1YYTF7V/');
?>

<!-- 1. SECCIÓN HERO -->
<section id="hero" class="pt-12 md:pt-16 pb-16 md:pb-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center relative z-10 scroll-animate">

        <!-- Columna Izquierda: Mensaje Principal -->
        <div class="order-2 lg:order-1">
            <div class="bubble-title inline-block mb-6 max-w-lg">
                <p class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold font-headline tracking-wide uppercase">
                    <?php echo esc_html($hero_title); ?>
                </p>
            </div>

            <p class="text-lg sm:text-xl md:text-2xl text-gray-700 mb-8 md:mb-10 font-medium font-sans">
                <?php echo esc_html($hero_description); ?>
            </p>

            <!-- CTA Principal -->
            <a href="<?php echo esc_url($amazon_url); ?>" target="_blank" class="cta-button-3d pulse-cta inline-block px-8 md:px-12 py-4 md:py-5 bg-brand-pink text-white text-2xl md:text-3xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark">
                <i data-lucide="brain" class="w-6 h-6 md:w-7 md:h-7 inline mr-3"></i> ¡EMPEZAR LA DIVERSIÓN!
            </a>
        </div>

        <!-- Columna Derecha: Imagen Hero -->
        <div class="flex justify-center lg:justify-end order-1 lg:order-2">
            <img src="<?php echo esc_url($hero_image); ?>"
                 alt="Cuaderno de Actividades Divertidas - Elemental Kids Club"
                 class="w-full max-w-md lg:max-w-lg rounded-lg shadow-2xl transition duration-500 hover:scale-105 hover:rotate-3"
                 style="border: 5px solid #FAD02E;"
                 loading="eager">
        </div>
    </div>
</section>

<!-- 2. SECCIÓN BENEFICIOS -->
<section id="benefits" class="py-16 md:py-20 lg:py-28 bg-white/90">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center scroll-animate">

        <!-- Columna Izquierda: Imagen de Beneficios -->
        <div class="flex justify-center lg:justify-start">
            <img src="<?php echo esc_url($benefits_image); ?>"
                 alt="Diversión, conexión y aprendizaje todo en un mismo libro"
                 class="w-full max-w-md rounded-xl shadow-xl border-4 border-brand-blue transition duration-500 hover:scale-105 hover:-rotate-3"
                 loading="lazy">
        </div>

        <!-- Columna Derecha: Por Qué Es Especial -->
        <div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-brand-blue mb-6 font-headline tracking-wider uppercase">
                ¿POR QUÉ ESTE CUADERNO ES DIFERENTE?
            </h2>
            <ul class="space-y-4 text-lg md:text-xl font-sans text-gray-700">
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 mr-3 mt-1 text-brand-pink flex-shrink-0"></i>
                    <span><strong>Más de 80 páginas de contenido:</strong> No es un simple librito de pasatiempos. Es un cuaderno completo con actividades cuidadosamente diseñadas y graduadas en dificultad.</span>
                </li>
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 mr-3 mt-1 text-brand-pink flex-shrink-0"></i>
                    <span><strong>Soluciones incluidas:</strong> Tu hijo puede verificar sus respuestas de forma independiente, fomentando el aprendizaje autónomo sin necesidad de supervisión constante.</span>
                </li>
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 mr-3 mt-1 text-brand-pink flex-shrink-0"></i>
                    <span><strong>Bonus descargable gratis:</strong> Incluye acceso a contenido extra digital que complementa el libro físico, ¡doble diversión garantizada!</span>
                </li>
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 mr-3 mt-1 text-brand-pink flex-shrink-0"></i>
                    <span><strong>Perfecto para llevar:</strong> Formato ideal para viajes, restaurantes, salas de espera o cualquier momento en que necesites mantener a tu hijo entretenido de forma productiva.</span>
                </li>
            </ul>

            <p class="text-2xl md:text-3xl font-extrabold text-brand-pink mt-8 font-headline tracking-wider uppercase border-t-2 border-brand-yellow pt-4">
                La mejor inversión en el desarrollo de tu hijo
            </p>
        </div>
    </div>
</section>

<!-- 2.5 SECCIÓN ACTIVIDADES DETALLADAS -->
<section id="activities-breakdown" class="py-16 md:py-20 lg:py-28 notebook-background">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase">
                ¿QUÉ ENCONTRARÁS DENTRO?
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto font-sans">
                Más de <strong class="text-brand-pink">80 páginas</strong> repletas de actividades diseñadas para mantener a tu hijo entretenido durante horas.
            </p>
        </div>

        <!-- Grid de Actividades -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Actividad 1 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-yellow rounded-full mb-4 mx-auto">
                    <i data-lucide="puzzle" class="w-8 h-8 text-brand-dark"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">JUEGOS DE LÓGICA</h3>
                <p class="text-gray-700 font-sans text-center">
                    Sudokus, secuencias numéricas, y desafíos de razonamiento que desarrollan el pensamiento lógico y la concentración.
                </p>
            </div>

            <!-- Actividad 2 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-pink rounded-full mb-4 mx-auto">
                    <i data-lucide="search" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">BUSCA Y ENCUENTRA</h3>
                <p class="text-gray-700 font-sans text-center">
                    Sopas de letras, diferencias ocultas y retos visuales que agudizan la atención al detalle y la percepción visual.
                </p>
            </div>

            <!-- Actividad 3 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-blue rounded-full mb-4 mx-auto">
                    <i data-lucide="calculator" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">RETOS MATEMÁTICOS</h3>
                <p class="text-gray-700 font-sans text-center">
                    Operaciones incógnita, acertijos numéricos y problemas divertidos que refuerzan las habilidades matemáticas.
                </p>
            </div>

            <!-- Actividad 4 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-yellow rounded-full mb-4 mx-auto">
                    <i data-lucide="pen-tool" class="w-8 h-8 text-brand-dark"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">ACTIVIDADES CREATIVAS</h3>
                <p class="text-gray-700 font-sans text-center">
                    Dibujos para completar, laberintos artísticos y ejercicios que estimulan la imaginación y la expresión creativa.
                </p>
            </div>

            <!-- Actividad 5 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-pink rounded-full mb-4 mx-auto">
                    <i data-lucide="book-open" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">JUEGOS DE PALABRAS</h3>
                <p class="text-gray-700 font-sans text-center">
                    Crucigramas, adivinanzas y pasatiempos lingüísticos que enriquecen el vocabulario y las habilidades verbales.
                </p>
            </div>

            <!-- Actividad 6 -->
            <div class="feature-block bg-white rounded-xl p-6 shadow-lg stagger-item">
                <div class="flex items-center justify-center w-16 h-16 bg-brand-blue rounded-full mb-4 mx-auto">
                    <i data-lucide="map" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider text-center">LABERINTOS Y MÁS</h3>
                <p class="text-gray-700 font-sans text-center">
                    Caminos intrincados, conexiones y recorridos que mejoran la planificación espacial y la resolución de problemas.
                </p>
            </div>
        </div>

        <!-- CTA de Actividades -->
        <div class="text-center mt-12">
            <p class="text-2xl md:text-3xl font-extrabold text-brand-blue mb-6 font-headline tracking-wider uppercase">
                Y mucho, mucho más...
            </p>
            <a href="<?php echo esc_url($amazon_url); ?>" target="_blank" class="cta-button-3d inline-block px-10 py-4 bg-brand-pink text-white text-2xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark">
                <i data-lucide="shopping-cart" class="w-6 h-6 inline mr-3"></i> VER EN AMAZON
            </a>
        </div>
    </div>
</section>

<!-- 3. SECCIÓN MUESTRA/INTERIOR -->
<section id="sample-interior" class="py-16 md:py-20 lg:py-28 notebook-background">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center scroll-animate">

        <!-- Columna Izquierda: Vista Interior del Libro -->
        <div class="flex justify-center lg:justify-start">
            <img src="<?php echo esc_url($interior_image); ?>"
                 alt="Interior del cuaderno: Busca y encuentra, Operación Incógnita, Siete Diferencias"
                 class="w-full max-w-lg rounded-xl shadow-2xl transition duration-500 hover:scale-105 hover:rotate-3 transform"
                 style="border: 5px solid #FAD02E;"
                 loading="lazy">
        </div>

        <!-- Columna Derecha: Mensaje de "Imaginación" y CTA -->
        <div class="order-first lg:order-last">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-6 font-headline tracking-wider uppercase">
                Porque la mejor pantalla... es su <span class="text-brand-blue">imaginación</span>.
            </h2>
            <p class="text-xl md:text-2xl font-medium text-gray-700 mb-8 md:mb-10 font-sans">
                El cuaderno incluye retos como <strong>"Siete Diferencias"</strong>, <strong>"Operación Incógnita"</strong> y <strong>"Busca y Encuentra"</strong> que garantizan que el cerebro de tu hijo trabaje a máxima potencia.
            </p>

            <!-- Bonus Descargable Form -->
            <div class="bg-white/90 p-6 md:p-8 rounded-xl shadow-lg border-4 border-brand-yellow">
                <h3 class="text-2xl md:text-3xl font-extrabold text-brand-pink mb-4 font-headline tracking-wider uppercase">
                    <i data-lucide="gift" class="w-6 h-6 md:w-7 md:h-7 inline mr-2"></i> ¡BONUS EXCLUSIVO!
                </h3>
                <p class="text-lg md:text-xl text-gray-700 mb-6 font-sans">
                    ¿Ya compraste el libro? <strong>Descarga tu contenido extra GRATIS.</strong> Introduce tu nombre y email para recibir actividades adicionales directamente en tu bandeja de entrada.
                </p>

                <!-- Wild Mail Form - REPLACE action URL with your Wild Mail endpoint -->
                <form id="bonus-form" action="YOUR_WILDMAIL_FORM_ACTION_URL_HERE" method="POST" class="space-y-4">
                    <div>
                        <input
                            type="text"
                            name="name"
                            id="bonus-name"
                            required
                            placeholder="Tu nombre"
                            class="w-full px-4 py-3 text-lg border-2 border-brand-dark rounded-lg focus:outline-none focus:ring-4 focus:ring-brand-yellow/50 font-sans">
                    </div>
                    <div>
                        <input
                            type="email"
                            name="email"
                            id="bonus-email"
                            required
                            placeholder="tu@email.com"
                            class="w-full px-4 py-3 text-lg border-2 border-brand-dark rounded-lg focus:outline-none focus:ring-4 focus:ring-brand-yellow/50 font-sans">
                    </div>
                    <button
                        type="submit"
                        class="cta-button-3d w-full px-8 py-4 bg-brand-pink text-white text-xl md:text-2xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark hover:bg-red-500">
                        <i data-lucide="download" class="w-6 h-6 inline mr-3"></i> DESCARGAR BONUS AHORA
                    </button>
                </form>

                <!-- Success Message -->
                <div id="bonus-success" class="mt-4 text-green-700 bg-green-100 p-4 rounded-xl hidden">
                    <p class="font-semibold flex items-center font-sans">
                        <i data-lucide="check-circle" class="w-5 h-5 mr-2"></i>
                        ¡Perfecto! Revisa tu email para descargar el bonus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3.5 SECCIÓN TESTIMONIOS -->
<section id="testimonials" class="py-16 md:py-20 lg:py-28 bg-white/90">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase">
                LO QUE DICEN LOS PADRES
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto font-sans">
                Miles de familias ya están disfrutando del cuaderno
            </p>
        </div>

        <!-- Grid de Testimonios -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Testimonio 1 -->
            <div class="bg-brand-yellow/20 rounded-xl p-6 border-4 border-brand-yellow shadow-lg stagger-item">
                <div class="flex items-center mb-4">
                    <div class="flex text-brand-pink">
                        <?php
                        $rating_1 = ekc_get_option('testimonial_1_rating', 5);
                        for ($i = 0; $i < $rating_1; $i++) : ?>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <?php endfor; ?>
                    </div>
                </div>
                <p class="text-gray-800 mb-4 font-sans italic">
                    "<?php echo esc_html(ekc_get_option('testimonial_1_text', 'A mi hijo de 9 años le encanta. Lo compré por recomendación y ha sido un acierto. Ya lo ha completado casi entero y sigue pidiendo más.')); ?>"
                </p>
                <p class="font-bold text-brand-dark font-sans">— <?php echo esc_html(ekc_get_option('testimonial_1_name', 'María G.')); ?></p>
                <p class="text-xs text-gray-600 font-sans mt-1">Compra verificada en Amazon</p>
            </div>

            <!-- Testimonio 2 -->
            <div class="bg-brand-blue/20 rounded-xl p-6 border-4 border-brand-blue shadow-lg stagger-item">
                <div class="flex items-center mb-4">
                    <div class="flex text-brand-pink">
                        <?php
                        $rating_2 = ekc_get_option('testimonial_2_rating', 5);
                        for ($i = 0; $i < $rating_2; $i++) : ?>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <?php endfor; ?>
                    </div>
                </div>
                <p class="text-gray-800 mb-4 font-sans italic">
                    "<?php echo esc_html(ekc_get_option('testimonial_2_text', 'Perfecto para mantenerlos ocupados en esos días de lluvia. Mi hija está súper entretenida y no pide la tablet. ¡Misión cumplida!')); ?>"
                </p>
                <p class="font-bold text-brand-dark font-sans">— <?php echo esc_html(ekc_get_option('testimonial_2_name', 'Laura M.')); ?></p>
                <p class="text-xs text-gray-600 font-sans mt-1">Compra verificada en Amazon</p>
            </div>

            <!-- Testimonio 3 -->
            <div class="bg-brand-pink/20 rounded-xl p-6 border-4 border-brand-pink shadow-lg stagger-item">
                <div class="flex items-center mb-4">
                    <div class="flex text-brand-pink">
                        <?php
                        $rating_3 = ekc_get_option('testimonial_3_rating', 5);
                        for ($i = 0; $i < $rating_3; $i++) : ?>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <?php endfor; ?>
                    </div>
                </div>
                <p class="text-gray-800 mb-4 font-sans italic">
                    "<?php echo esc_html(ekc_get_option('testimonial_3_text', 'Tiene actividades muy variadas. Desde sudokus hasta laberintos. Mi hijo no se aburre y es ideal para el desarrollo cognitivo.')); ?>"
                </p>
                <p class="font-bold text-brand-dark font-sans">— <?php echo esc_html(ekc_get_option('testimonial_3_name', 'Carlos R.')); ?></p>
                <p class="text-xs text-gray-600 font-sans mt-1">Compra verificada en Amazon</p>
            </div>
        </div>
    </div>
</section>

<!-- 3.7 SECCIÓN FAQ -->
<section id="faq" class="py-16 md:py-20 lg:py-28 notebook-background">
    <div class="max-w-5xl mx-auto px-6 scroll-animate">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase">
                PREGUNTAS FRECUENTES
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 font-sans">
                Resolvemos tus dudas
            </p>
        </div>

        <!-- Preguntas y Respuestas -->
        <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-yellow">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_1_question', '¿Para qué edades está recomendado?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_1_answer', 'El cuaderno está diseñado específicamente para niños de 8 a 12 años, con actividades que se adaptan a su nivel cognitivo.')); ?>
                </p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-blue">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_2_question', '¿Necesita supervisión de un adulto?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_2_answer', 'No, las actividades están pensadas para que los niños las resuelvan de forma autónoma, aunque siempre se puede hacer en familia.')); ?>
                </p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-pink">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_3_question', '¿Cuántas páginas tiene?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_3_answer', 'El cuaderno contiene más de 100 páginas de actividades variadas y entretenidas.')); ?>
                </p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-yellow">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_4_question', '¿Es adecuado para uso escolar?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_4_answer', 'Sí, muchos profesores lo utilizan como material complementario o para actividades extraescolares.')); ?>
                </p>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-blue">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_5_question', '¿Viene con soluciones?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_5_answer', 'Sí, todas las actividades incluyen sus soluciones al final del cuaderno.')); ?>
                </p>
            </div>

            <!-- FAQ 6 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-pink">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_6_question', '¿Está disponible en formato digital?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_6_answer', 'Actualmente solo está disponible en formato físico a través de Amazon.')); ?>
                </p>
            </div>

            <!-- FAQ 7 -->
            <div class="bg-white rounded-xl p-6 shadow-lg border-l-8 border-brand-yellow">
                <h3 class="text-2xl font-extrabold text-brand-dark mb-3 font-headline tracking-wider">
                    <?php echo esc_html(ekc_get_option('faq_7_question', '¿Ofrece envío internacional?')); ?>
                </h3>
                <p class="text-gray-700 font-sans text-lg">
                    <?php echo esc_html(ekc_get_option('faq_7_answer', 'Sí, Amazon envía a múltiples países. Consulta la disponibilidad en tu región al momento de comprar.')); ?>
                </p>
            </div>
        </div>

        <!-- CTA después del FAQ -->
        <div class="text-center mt-12">
            <p class="text-2xl md:text-3xl font-extrabold text-brand-blue mb-6 font-headline tracking-wider uppercase">
                ¿Tienes más preguntas? ¡Pruébalo sin riesgo!
            </p>
            <a href="<?php echo esc_url($amazon_url); ?>" target="_blank" class="cta-button-3d inline-block px-10 py-4 bg-brand-pink text-white text-2xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark">
                <i data-lucide="shopping-bag" class="w-6 h-6 inline mr-3"></i> COMPRAR AHORA
            </a>
        </div>
    </div>
</section>

<!-- 4. SECCIÓN FINAL CTA -->
<section id="cta-final" class="py-16 md:py-20 lg:py-24 bg-brand-pink relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-20 h-20 bg-brand-yellow rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-brand-blue rounded-full"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 text-white font-headline tracking-wider uppercase">
            ¡HAZTE CON EL CUADERNO ANTES DE QUE SE AGOTEN!
        </h2>
        <p class="text-2xl md:text-3xl font-medium mb-8 md:mb-10 max-w-4xl mx-auto text-white/90 font-sans">
            La herramienta perfecta para despertar la curiosidad y la inteligencia en casa, ¡sin complicaciones!
        </p>

        <!-- CTA Principal: Botón Amarillo Fuerte -->
        <a href="<?php echo esc_url($amazon_url); ?>" target="_blank" class="cta-button-3d pulse-cta inline-block px-10 md:px-12 py-5 md:py-6 bg-brand-yellow text-brand-dark text-3xl md:text-4xl font-bold rounded-xl font-headline tracking-wider border-2 border-brand-dark">
            <i data-lucide="shopping-bag" class="w-7 h-7 md:w-8 md:h-8 inline mr-3"></i> COMPRAR EN AMAZON
        </a>

        <div class="mt-8 flex justify-center items-center space-x-4 text-base md:text-lg font-bold text-white">
            <i data-lucide="lock" class="w-5 h-5 md:w-6 md:h-6"></i>
            <span class="font-sans">Compra segura y envío rápido garantizados por Amazon.</span>
        </div>
    </div>
</section>

<?php
get_footer();
