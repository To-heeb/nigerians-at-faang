<x-app-layout>

    <x-slot:title>
        Terms & Condition
    </x-slot>

    <!-- Page Title -->
    <x-header-banner page="Terms of use" />
    <!-- End Page Title -->

    <!-- Privacy Section -->
    <section id="privacy-policy" class="contact section">
        <div class="container">

            <div class="content my-5">
                <h1>📄 Terms of Use</h1>
                <p><strong>Effective Date:</strong> October 1, 2025</p>

                <p>Welcome to <strong>Nigerians @ FAANG</strong>! These Terms of Use govern your access to and use of
                    our platform, which highlights the stories and achievements of Nigerians working in global tech
                    companies.</p>

                <hr>

                <h2>1. Use of Public Information</h2>
                <p>
                    Our platform curates information that is publicly available on the internet, including LinkedIn,
                    personal blogs, and professional profiles. We strive to ensure that this information is accurate,
                    respectful, and presented to inspire and inform.
                </p>

                <p>
                    If your profile appears on this platform and you would like to request a correction, update, or
                    removal, you may contact us at <a
                        href="mailto:contact@nigeriansatfaang.com">contact@nigeriansatfaang.com</a>.
                </p>

                <hr>

                <h2>2. User-Submitted Content</h2>
                <p>
                    Users may contribute stories, comments, or other content. By submitting content, you grant us a
                    non-exclusive, royalty-free, worldwide license to publish and display that content on our platform.
                </p>

                <hr>

                <h2>3. Ownership & Attribution</h2>
                <p>
                    All trademarks, logos, and content related to FAANG companies remain the property of their
                    respective owners. Nigerians @ FAANG is an independent project and is not affiliated with any of the
                    FAANG companies or Nigeria(Nigerian government) as a country.
                </p>

                <hr>

                <h2>4. Prohibited Activities</h2>
                <p>While using our site, you agree not to:</p>
                <ul>
                    <li>Submit false or misleading information.</li>
                    <li>Violate the privacy of individuals who are not already public figures or whose information is
                        not publicly available.</li>
                    <li>Use the platform for any unlawful, harmful, or malicious purpose.</li>
                </ul>

                <hr>

                <h2>5. Content Accuracy & Liability</h2>
                <p>
                    While we take care to verify the information we curate or publish, Nigerians @ FAANG makes no
                    guarantees regarding the accuracy, completeness, or reliability of any content.
                </p>

                <p>
                    We are not liable for any loss or damage resulting from the use of this platform or reliance on any
                    information it provides.
                </p>

                <hr>

                <h2>6. Changes to the Terms</h2>
                <p>
                    We may update these Terms at any time. Continued use of the site after such changes constitutes your
                    agreement to the updated terms.
                </p>

                <hr>

                <h2>7. Contact Us</h2>
                <p>
                    If you have any questions or concerns about these Terms, please reach out to us at:
                    <br>
                    📧 Email: <a href="mailto:{{ config('app.contact_mail') }}">{{ config('app.contact_mail') }}</a>
                    <br>
                    🌐 Website: <a href="https://nigeriansatfaang.com.ng">https://nigeriansatfaang.com.ng</a>
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
