# 📧 Wild Mail - Guía Completa de Configuración

**Fecha:** 19 de Noviembre de 2024
**Para:** Elemental Kids Club
**Propósito:** Configurar el formulario de bonus con confirmación por email

---

## 🎯 Objetivo

Cuando un cliente introduce su nombre y email en el formulario "BONUS EXCLUSIVO":
1. Recibe un email de confirmación
2. Hace clic para confirmar
3. Recibe el bonus descargable por email

---

## 📋 Archivos Necesarios

Ya tienes estos archivos listos:

### 1. Páginas Web (HTML):
```
✅ confirma-tu-inscripcion.html - Página de confirmación
✅ gracias.html - Página de agradecimiento
✅ index.html - Landing page con formulario
```

### 2. En WordPress:
```
✅ Formulario de bonus integrado en el tema
✅ Campo de Wild Mail URL en: Apariencia → Personalizar → Amazon & Links
```

---

## 🚀 Pasos de Configuración

### PASO 1: Sube las Páginas HTML a tu Hosting

**Archivos a subir:**
- `confirma-tu-inscripcion.html`
- `gracias.html`

**Cómo subirlos:**

**Opción A - Via cPanel:**
```
1. Accede a tu cPanel de hosting
2. Ve a "Administrador de archivos"
3. Navega a: public_html (o www)
4. Haz clic en "Subir"
5. Sube ambos archivos HTML
```

**Opción B - Via FTP:**
```
1. Conecta con FileZilla (o tu cliente FTP)
2. Navega a la carpeta public_html
3. Arrastra los archivos HTML
```

**Resultado:**
```
Tus páginas estarán disponibles en:
https://elementalkidsclub.com/confirma-tu-inscripcion.html
https://elementalkidsclub.com/gracias.html
```

**✅ Prueba que funcionen:**
- Visita ambas URLs en tu navegador
- Deberían cargar correctamente

---

### PASO 2: Configura tu Cuenta de Wild Mail

**2.1 Crea un Formulario:**
```
1. Inicia sesión en Wild Mail
2. Ve a "Formularios" o "Forms"
3. Crea un nuevo formulario llamado "Bonus Elemental Kids Club"
4. Añade campos:
   - Nombre (name)
   - Email (email)
```

**2.2 Activa Double Opt-in (Confirmación por Email):**
```
1. En la configuración del formulario
2. Activa "Double Opt-in" o "Confirmación por email"
3. En "Página de confirmación" introduce:
   https://elementalkidsclub.com/confirma-tu-inscripcion.html
4. En "Página de agradecimiento" introduce:
   https://elementalkidsclub.com/gracias.html
```

**2.3 Copia la URL del Formulario:**
```
Busca algo como:
"Form Action URL" o "Endpoint URL"

Se verá así:
https://app.wildmail.io/form/abc123def456...

¡Copia esta URL! La necesitarás en el siguiente paso.
```

---

### PASO 3: Configura WordPress

**3.1 Añade la URL de Wild Mail:**
```
1. Ve a: Apariencia → Personalizar
2. Haz clic en: "Amazon & Links"
3. Busca: "Wild Mail Form URL"
4. Pega la URL que copiaste de Wild Mail
5. Haz clic en: "Publicar"
```

**✅ ¡Listo! El formulario ya está conectado.**

---

### PASO 4: Prepara el Email Automatizado

**4.1 Crea el Email con el Bonus:**

En Wild Mail, crea un email automatizado:

```
Asunto: 🎁 Aquí está tu BONUS de Elemental Kids Club

Hola {nombre},

¡Gracias por confirmar tu suscripción!

Como prometido, aquí está tu contenido bonus exclusivo
para complementar el Cuaderno de Actividades Divertidas.

[BOTÓN: Descargar Bonus Ahora]

Este bonus incluye:
✅ Actividades adicionales
✅ Herramienta para organizar tareas
✅ [Describe qué más incluye]

¡Disfrútalo!

Equipo Elemental Kids Club
https://elementalkidsclub.com
```

**4.2 Adjunta el Archivo Bonus:**
```
1. Sube tu PDF/archivo bonus a Wild Mail
2. Adjúntalo al email automatizado
3. O añade un enlace de descarga
```

**4.3 Configura el Envío Automático:**
```
Trigger: Cuando el usuario confirma su email
Acción: Enviar email con bonus
Tiempo: Inmediatamente (o después de 2-5 minutos)
```

---

## 🔄 Flujo Completo del Usuario

Así es como funcionará para tus clientes:

### 1️⃣ Cliente en tu Web:
```
- Visita: https://elementalkidsclub.com
- Llega a sección "BONUS EXCLUSIVO"
- Completa nombre y email
- Hace clic en "DESCARGAR BONUS AHORA"
```

### 2️⃣ Wild Mail Actúa:
```
- Recibe los datos
- Envía email de confirmación automático
```

### 3️⃣ Cliente Recibe Email #1 (Confirmación):
```
Asunto: Confirma tu email para recibir el bonus

Contenido:
"Hola [nombre],
Haz clic aquí para confirmar tu email y recibir tu bonus:
[BOTÓN CONFIRMAR]"
```

### 4️⃣ Cliente Hace Clic en Confirmar:
```
- Va a: confirma-tu-inscripcion.html
- Ve mensaje: "Confirma tu inscripción"
- Hace clic en "Confirmar suscripción"
```

### 5️⃣ Cliente Confirmado:
```
- Wild Mail registra la confirmación
- Redirige a: gracias.html
- Ve mensaje: "¡Gracias! Revisa tu email"
```

### 6️⃣ Cliente Recibe Email #2 (Con Bonus):
```
Asunto: 🎁 Aquí está tu BONUS

Contenido:
"Aquí está tu bonus descargable..."
[Archivo adjunto o enlace de descarga]
```

### 7️⃣ ¡Cliente Descarga el Bonus! 🎉

---

## ✅ Lista de Verificación Final

Antes de hacer público el formulario, verifica:

### Hosting:
- [ ] `confirma-tu-inscripcion.html` subido y accesible
- [ ] `gracias.html` subido y accesible
- [ ] Ambas páginas cargan correctamente en navegador

### Wild Mail:
- [ ] Formulario creado con campos nombre y email
- [ ] Double opt-in activado
- [ ] Página de confirmación configurada
- [ ] Página de agradecimiento configurada
- [ ] URL del formulario copiada

### WordPress:
- [ ] Wild Mail URL añadida en Personalizar
- [ ] Formulario probado en la web

### Email:
- [ ] Email de confirmación configurado
- [ ] Email con bonus configurado
- [ ] Archivo bonus adjunto o enlace añadido
- [ ] Automatización activada

---

## 🧪 Cómo Probar Todo el Sistema

**Prueba Completa (¡IMPORTANTE!):**

```
1. Ve a tu web: https://elementalkidsclub.com
2. Scroll a "BONUS EXCLUSIVO"
3. Completa el formulario con TU email
4. Haz clic en "DESCARGAR BONUS AHORA"
5. Revisa tu bandeja de entrada
6. Deberías recibir email de confirmación
7. Haz clic en el botón de confirmar
8. Deberías ver: confirma-tu-inscripcion.html
9. Haz clic en "Confirmar suscripción"
10. Deberías ver: gracias.html
11. En 2-5 minutos, recibe email con bonus
12. Descarga el bonus
```

**Si todo funciona:** ¡Estás listo! 🎉

**Si algo falla:** Revisa los pasos anteriores

---

## 🆘 Solución de Problemas

### Problema: "No recibo el email de confirmación"

**Soluciones:**
```
✅ Revisa carpeta de SPAM/Correo no deseado
✅ Verifica que Wild Mail está enviando emails
✅ Comprueba la configuración de email en Wild Mail
✅ Prueba con otra dirección de email
```

### Problema: "El formulario no envía"

**Soluciones:**
```
✅ Verifica que la Wild Mail URL está correcta
✅ Revisa que copiaste la URL completa
✅ Mira la consola del navegador (F12) por errores
✅ Prueba en modo incógnito
```

### Problema: "La página de confirmación no carga"

**Soluciones:**
```
✅ Verifica que subiste confirma-tu-inscripcion.html
✅ Comprueba que la URL en Wild Mail es correcta
✅ Asegúrate de que el archivo está en la carpeta raíz
✅ Prueba acceder directamente a la URL
```

### Problema: "No recibo el email con el bonus"

**Soluciones:**
```
✅ Verifica que configuraste la automatización en Wild Mail
✅ Comprueba que el trigger es "usuario confirmado"
✅ Revisa que el archivo bonus está adjunto
✅ Mira en Wild Mail si el email se envió
```

---

## 📧 Emails de Ejemplo

### Email #1 - Confirmación

```
Asunto: Confirma tu email | Elemental Kids Club

Hola {nombre},

¡Estás a un paso de recibir tu bonus exclusivo!

Haz clic en el botón de abajo para confirmar tu email:

[CONFIRMAR MI EMAIL]

Después de confirmar, recibirás inmediatamente tu contenido
bonus con actividades adicionales para tu Cuaderno de
Actividades Divertidas.

¿No te registraste? Ignora este email.

Saludos,
Equipo Elemental Kids Club
https://elementalkidsclub.com
```

### Email #2 - Bonus

```
Asunto: 🎁 Tu BONUS de Elemental Kids Club está aquí

Hola {nombre},

¡Gracias por confirmar tu suscripción!

Como prometido, aquí está tu contenido bonus EXCLUSIVO
para complementar tu Cuaderno de Actividades Divertidas.

[DESCARGAR BONUS AHORA]

Este bonus incluye:
✅ 10 actividades adicionales de lógica
✅ Herramienta de organización de tareas
✅ Guía para padres con tips educativos

¡Esperamos que lo disfrutes!

Si tienes alguna pregunta, responde a este email o
contáctanos en: hola@elementalkidsclub.com

Saludos,
Equipo Elemental Kids Club
https://elementalkidsclub.com

P.D. ¿Ya compraste el cuaderno? Encuéntralo aquí:
https://www.amazon.es/-/en/dp/B0G1YYTF7V/
```

---

## 📊 Mejores Prácticas

### Para Emails:
- ✅ Usa asuntos claros y atractivos
- ✅ Personaliza con el nombre del cliente
- ✅ Incluye un CTA (Call To Action) claro
- ✅ Mantén el diseño simple y limpio
- ✅ Prueba en móvil y desktop

### Para el Bonus:
- ✅ Asegúrate de que el contenido es valioso
- ✅ Formato PDF para fácil descarga
- ✅ Tamaño razonable (menos de 5MB ideal)
- ✅ Nombre de archivo claro (ej: "bonus-elemental-kids-club.pdf")

### Para el Proceso:
- ✅ Haz el proceso lo más simple posible
- ✅ Confirma que todos los emails llegan
- ✅ Monitorea las tasas de apertura
- ✅ Revisa regularmente que todo funciona

---

## 📈 Métricas a Monitorear

En Wild Mail, revisa:

```
- Formularios completados
- Emails de confirmación enviados
- Tasa de confirmación (% que confirma)
- Emails con bonus enviados
- Tasa de apertura
- Tasa de descarga
```

**Objetivo:** >40% tasa de confirmación es bueno

---

## 🎯 Resumen Rápido

**3 Pasos Esenciales:**

1. **Sube HTML** → confirma-tu-inscripcion.html + gracias.html
2. **Configura Wild Mail** → Formulario + Double opt-in + Emails
3. **Conecta WordPress** → Añade Wild Mail URL en Personalizar

**¡Y pruébalo todo antes de lanzar!**

---

## 📞 Soporte

**Wild Mail:**
- Documentación: https://wildmail.io/docs
- Soporte: support@wildmail.io

**Hosting:**
- Contacta con tu proveedor de hosting
- Para ayuda subiendo archivos HTML

**Desarrollo:**
- Contacta con tu desarrollador
- Para problemas técnicos del sitio

---

**¡Éxito con tu campaña de bonus!** 🚀

---

*Guía creada para Elemental Kids Club*
*Última actualización: 19 de Noviembre de 2024*

🤖 *Generado con [Claude Code](https://claude.com/claude-code)*
