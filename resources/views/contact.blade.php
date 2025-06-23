@extends('layouts.app')

@section('content')

<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div id="contact-particles" class="absolute inset-0"></div>

    <!-- Background Elements -->
    <div class="absolute top-20 left-10 w-64 h-64 bg-indigo-600/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-80 h-80 bg-purple-600/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Get In <span class="text-gradient">Touch</span></h2>
            <p class="text-gray-300 max-w-2xl mx-auto">Call me over phone or email me anytime for any kind of
                assistance or collaboration. I am also available in Whatsapp in this number.</p>
        </div>

        <div class="grid md:grid-cols-5 gap-8 max-w-5xl mx-auto">
            <!-- Contact Info Sidebar -->
            <div class="md:col-span-2 bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-indigo-500/20">
                <h3 class="text-xl font-semibold mb-6 flex items-center gap-2">
                    <i class="ri-contacts-book-line text-indigo-400"></i> Contact Information
                </h3>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-600/20 p-3 rounded-lg">
                            <i class="ri-mail-line text-xl text-indigo-400"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-white">Email</h4>
                            <a href="mailto:{{ $contact->email }}"
                                class="text-gray-300 hover:text-indigo-400 transition-colors">{{ $contact->email }}</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-600/20 p-3 rounded-lg">
                            <i class="ri-phone-line text-xl text-indigo-400"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-white">Phone</h4>
                            <p class="text-gray-300">{{ $contact->phone }}</p>
                        </div>
                    </div>

                </div>

                <!-- Social Media Links -->
                <div class="mt-8">
                    <h4 class="text-lg font-medium mb-4">Connect With Me</h4>
                    <div class="flex gap-4">
                        <a href="{{ $contact->facebook }}" target="_blank" class="..."><i class="ri-facebook-fill text-xl"></i></a>
                        <a href="{{ $contact->linkedin }}" target="_blank" class="..."><i class="ri-linkedin-fill text-xl"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="md:col-span-3 bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-indigo-500/20">
                <h3 class="text-xl font-semibold mb-6 flex items-center gap-2">
                    <i class="ri-send-plane-line text-indigo-400"></i> Send Me a Message
                </h3>

                <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="form-group">
                            <label for="name" class="block text-gray-300 mb-2">Name</label>
                            <div class="relative">
                                <i class="ri-user-line absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-slate-900/70 border border-slate-700 rounded-lg py-3 px-10 text-white focus:outline-none focus:border-indigo-500 transition-colors"
                                    placeholder="Your name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="block text-gray-300 mb-2">Email</label>
                            <div class="relative">
                                <i class="ri-mail-line absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-slate-900/70 border border-slate-700 rounded-lg py-3 px-10 text-white focus:outline-none focus:border-indigo-500 transition-colors"
                                    placeholder="Your email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="block text-gray-300 mb-2">Subject</label>
                        <div class="relative">
                            <i class="ri-bookmark-line absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            <input type="text" id="subject" name="subject"
                                class="w-full bg-slate-900/70 border border-slate-700 rounded-lg py-3 px-10 text-white focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="Subject">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="block text-gray-300 mb-2">Message</label>
                        <div class="relative">
                            <i class="ri-chat-1-line absolute left-3 top-3 text-gray-400"></i>
                            <textarea id="message" name="message" rows="5"
                                class="w-full bg-slate-900/70 border border-slate-700 rounded-lg py-3 px-10 text-white focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="Your message"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 text-gray-300">
                        <input type="checkbox" id="consent" name="consent" class="accent-indigo-600 w-4 h-4">
                        <label for="consent">I agree to the privacy policy and terms of service</label>
                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-6 rounded-lg transition-all duration-300 flex items-center justify-center gap-2 font-medium">
                        <i class="ri-send-plane-fill"></i>
                        Send Message
                    </button>

                </form>

                <!-- Form Success Message (hidden by default) -->
                @if(session('success'))
                <div id="form-success" class="bg-green-600/20 border border-green-500/30 text-green-400 p-4 rounded-lg mt-6 flex items-center gap-3">
                    <i class="ri-checkbox-circle-line text-xl"></i>
                    <p>{{ session('success') }}</p>
                </div>
                @endif

                @if(session('error'))
                <div class="bg-red-600/20 border border-red-500/30 text-red-400 p-4 rounded-lg mt-6 flex items-center gap-3">
                    <i class="ri-close-circle-line text-xl"></i>
                    <p>{{ session('error') }}</p>
                </div>
                @endif


            </div>
        </div>
    </div>

    <script>
        // Contact Form Submission
        const contactForm = document.getElementById('contact-form');
        const formSuccess = document.getElementById('form-success');

        contactForm.addEventListener('submit', function(e) {

            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;

            // Start loading state
            submitButton.innerHTML = '<i class="ri-loader-4-line animate-spin"></i> Sending...';
            submitButton.disabled = true;

            // Simulate delay (e.g., sending via AJAX or backend)
            setTimeout(() => {
                contactForm.reset(); // Reset form fields
                formSuccess.classList.remove('hidden'); // Show success message

                // Restore button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;

                // Auto-hide success message after 5 seconds
                setTimeout(() => {
                    formSuccess.classList.add('hidden');
                }, 5000);
            }, 1500); // Simulate delay
        });
        // Input Focus Animation
        const formInputs = document.querySelectorAll('input, textarea');

        formInputs.forEach(input => {
            // Add focus effect
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('ring-2', 'ring-indigo-500/50');
            });

            // Remove focus effect
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('ring-2', 'ring-indigo-500/50');
            });
        });

        // Contact Section Particles
        function createContactParticles() {
            const container = document.getElementById('contact-particles');
            const particleCount = window.innerWidth > 768 ? 10 : 5;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                const size = Math.random() * 8 + 3;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const opacity = Math.random() * 0.3 + 0.05;
                const duration = Math.random() * 15 + 10;
                const delay = Math.random() * 5;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.opacity = opacity;
                particle.style.animation = `floatContact ${duration}s ease-in-out ${delay}s infinite alternate`;

                container.appendChild(particle);
            }
        }

        // Add CSS animation for contact particles
        const contactStyleElement = document.createElement('style');
        contactStyleElement.textContent = `
            @keyframes floatContact {
                0% {
                    transform: translate(0, 0) rotate(0deg);
                }
                100% {
                    transform: translate(30px, 30px) rotate(180deg);
                }
            }
        `;
        document.head.appendChild(contactStyleElement);

        // Create particles on load
        if (document.readyState === 'complete') {
            createContactParticles();
        } else {
            window.addEventListener('load', createContactParticles);
        }


        // Observe contact section elements
        const contactElements = document.querySelectorAll('#contact .form-group, #contact h3, #contact .flex');
        contactElements.forEach(element => {
            observer.observe(element);
        });
    </script>
</section>

@endsection