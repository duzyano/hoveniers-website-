<section class="contact-form" id="contact">

  <h2 class="contact__title">Neem vrijblijvend contact</h2>
  <p class="contact-form__intro">
    Ik streef ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is. Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt u contact met ons opnemen wanneer het u uitkomt. Wij zijn u graag van dienst!
  </p>

  <form
    action="https://formspree.io/f/mzzgwqer"
    method="POST">
    <div class="formgroup">
      <label for="first-name" class="visually-hidden">Naam</label>
      <input class="contact" type="text" name="first-name" id="first-name" placeholder="Naam" required>
    </div>
    <div class="formgroup">
      <label for="email" class="visually-hidden">Email</label>
      <input class="contact" type="email" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="formgroup">
      <label for="number" class="visually-hidden">tel.nr</label>
      <input class="contact" type="tel" name="number" id="number" placeholder="Telefoonnummer" required>
    </div>
    <div class="formgroup">
      <label for="message" class="visually-hidden">Opmerking</label>
      <textarea name="message" id="message" rows="10" placeholder="Hebt u een opmerking?"></textarea>
    </div>
    <div class="formgroup">
      <button type="submit" class="btn">Verzend</button>
    </div>
  </form>
</section>