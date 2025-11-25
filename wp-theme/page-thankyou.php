<?php
/**
 * Template Name: Thank You Page
 * Description: Page template for thank you after confirmation (Wild Mail)
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

get_header();

$amazon_url = ekc_get_option('amazon_url', 'https://www.amazon.es/-/en/dp/B0G1YYTF7V/');
?>

<!-- Main Content -->
<main class="py-16 md:py-24 notebook-background">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Success Icon -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-24 h-24 md:w-32 md:h-32 bg-brand-pink rounded-full border-4 border-brand-dark shadow-xl">
                <i data-lucide="party-popper" class="w-12 h-12 md:w-16 md:h-16 text-white"></i>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white/95 rounded-2xl shadow-2xl p-8 md:p-12 border-4 border-brand-pink">

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase text-center">
                ¡Gracias por confirmar!
            </h1>

            <!-- Subtitle -->
            <p class="text-2xl md:text-3xl font-bold text-brand-pink mb-8 font-headline tracking-wider uppercase text-center">
                Tu bonus ya está en camino
            </p>

            <!-- Success Message -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-xl mb-8">
                <div class="flex items-start space-x-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1"></i>
                    <p class="text-lg text-gray-800 font-sans">
                        <strong>¡Confirmación exitosa!</strong> Hemos enviado tu bonus a tu correo electrónico.
                    </p>
                </div>
            </div>

            <!-- Information Box -->
            <div class="bg-brand-yellow/20 p-8 rounded-xl border-4 border-brand-yellow mb-8">
                <div class="text-center mb-6">
                    <i data-lucide="gift" class="w-16 h-16 text-brand-dark mx-auto mb-4"></i>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase">
                        ¿Qué sigue ahora?
                    </h2>
                </div>

                <div class="space-y-4 text-left">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <i data-lucide="mail" class="w-6 h-6 text-brand-pink mt-1"></i>
                        </div>
                        <p class="text-lg text-gray-700 font-sans">
                            Recibirás un <strong>email adicional con tu regalo bonus</strong> en los próximos <strong>5-10 minutos</strong>.
                        </p>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <i data-lucide="calendar-check" class="w-6 h-6 text-brand-pink mt-1"></i>
                        </div>
                        <p class="text-lg text-gray-700 font-sans">
                            Tu bonus incluye una <strong>herramienta potente para animar a los niños a organizar sus tareas</strong>.
                        </p>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <i data-lucide="download" class="w-6 h-6 text-brand-pink mt-1"></i>
                        </div>
                        <p class="text-lg text-gray-700 font-sans">
                            Podrás <strong>descargar el contenido directamente</strong> desde el email que te enviaremos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Support Info -->
            <div class="bg-brand-blue/10 p-4 md:p-6 rounded-xl border-2 border-brand-blue/20">
                <div class="flex items-start space-x-3">
                    <i data-lucide="help-circle" class="w-5 h-5 md:w-6 md:h-6 text-brand-blue flex-shrink-0 mt-1"></i>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg md:text-xl font-extrabold text-brand-dark mb-2 font-headline tracking-wider">
                            ¿Necesitas ayuda?
                        </h3>
                        <p class="text-sm md:text-base text-gray-700 font-sans break-words">
                            Si no recibes el email en 10 minutos o tienes algún problema, no dudes en contactarnos en:
                        </p>
                        <a href="mailto:hola@elementalkidsclub.com" class="text-brand-pink font-bold text-base md:text-lg hover:underline inline-block mt-2 break-all">
                            hola@elementalkidsclub.com
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA to Amazon -->
        <div class="mt-12 text-center bg-white/90 rounded-2xl p-8 shadow-xl border-4 border-brand-blue">
            <h3 class="text-2xl md:text-3xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase">
                ¿Aún no tienes el libro?
            </h3>
            <p class="text-lg text-gray-700 font-sans mb-6">
                Mientras esperas tu bonus, puedes adquirir el <strong>Cuaderno de Actividades Divertidas</strong> completo.
            </p>
            <a href="<?php echo esc_url($amazon_url); ?>" target="_blank" class="inline-block px-10 py-4 bg-brand-pink text-white text-xl md:text-2xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark hover:bg-red-500 shadow-lg">
                <i data-lucide="shopping-cart" class="w-6 h-6 inline mr-3"></i> COMPRAR EN AMAZON
            </a>
        </div>

        <!-- Back to site -->
        <div class="text-center mt-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center text-brand-blue hover:text-brand-dark font-semibold text-lg transition">
                <i data-lucide="arrow-left" class="w-5 h-5 mr-2"></i>
                Volver al sitio web
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
