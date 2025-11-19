<?php
/**
 * Template Name: Confirmation Page
 * Description: Page template for email confirmation (Wild Mail)
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

get_header();
?>

<!-- Main Content -->
<main class="py-16 md:py-20 lg:py-24 notebook-background min-h-screen">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Card -->
        <div class="bg-white/95 rounded-2xl shadow-2xl p-8 md:p-12 border-4 border-brand-yellow">

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-4 font-headline tracking-wider uppercase text-center">
                Confirma tu inscripción
            </h1>

            <!-- Subtitle -->
            <p class="text-2xl md:text-3xl font-bold text-brand-pink mb-8 font-headline tracking-wider uppercase text-center">
                Solo te queda un paso más
            </p>

            <!-- Steps -->
            <div class="space-y-8 mt-10">

                <!-- Step 1 -->
                <div class="flex items-start space-x-4 bg-brand-blue/10 p-6 rounded-xl border-l-4 border-brand-blue">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 bg-brand-blue rounded-full text-white font-bold text-xl font-headline">
                            1
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-extrabold text-brand-dark mb-2 font-headline tracking-wider">
                            Revisa tu correo
                        </h3>
                        <p class="text-lg text-gray-700 font-sans">
                            Te hemos enviado un email de confirmación. <strong>Revisa tu carpeta de SPAM</strong> si no lo recibes en los próximos 5 minutos.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex items-start space-x-4 bg-brand-pink/10 p-6 rounded-xl border-l-4 border-brand-pink">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 bg-brand-pink rounded-full text-white font-bold text-xl font-headline">
                            2
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-extrabold text-brand-dark mb-2 font-headline tracking-wider">
                            Haz clic en el botón de confirmación
                        </h3>
                        <p class="text-lg text-gray-700 font-sans">
                            Dentro del email, encontrarás un botón para <strong>confirmar tu suscripción</strong>. Es necesario hacer clic para validar tu interés.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex items-start space-x-4 bg-brand-yellow/20 p-6 rounded-xl border-l-4 border-brand-yellow">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 bg-brand-yellow rounded-full text-brand-dark font-bold text-xl font-headline">
                            3
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-extrabold text-brand-dark mb-2 font-headline tracking-wider">
                            Recibe tu bonus
                        </h3>
                        <p class="text-lg text-gray-700 font-sans">
                            Una vez confirmado, recibirás <strong>automáticamente otro email con tu regalo BONUS</strong>. ¡Ya casi lo tienes!
                        </p>
                    </div>
                </div>

            </div>

            <!-- Info Box -->
            <div class="mt-10 bg-brand-blue/5 p-6 rounded-xl border-2 border-brand-blue/20">
                <div class="flex items-start space-x-3">
                    <i data-lucide="info" class="w-6 h-6 text-brand-blue flex-shrink-0 mt-1"></i>
                    <div>
                        <p class="text-lg text-gray-700 font-sans">
                            <strong>¿Problemas para encontrar el email?</strong> Asegúrate de revisar la carpeta de spam, promociones o correo no deseado. Si después de 10 minutos no lo encuentras, contáctanos en
                            <a href="mailto:hola@elementalkidsclub.com" class="text-brand-pink font-bold hover:underline">hola@elementalkidsclub.com</a>
                        </p>
                    </div>
                </div>
            </div>

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
