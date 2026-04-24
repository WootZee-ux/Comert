# Comert Electronic

Site demo realizat pentru materia **Comerț electronic** (UTM), cu scop didactic.

## Variantă statică (HTML)
### Cerințe acoperite
- layout **mobile-first** (responsive);
- minim 6 pagini (sunt 7 pagini HTML);
- minim 5 imagini + variantă `before/after` în `galerie.html`;
- monetizare demo: **one-time purchase**, **subscription**, **rent equipment**;
- contact personalizat: Daniel Uta.

### Rulare locală
```bash
python3 -m http.server 8000
```
Deschide apoi `http://localhost:8000`.

## Variantă WordPress
Am adăugat tema WordPress în:

```text
wordpress-theme/comert-electronic
```

### Instalare rapidă
1. Copiază folderul `comert-electronic` în `wp-content/themes/`.
2. În WordPress Admin → **Appearance → Themes**, activează tema **Comert Electronic**.
3. Creează paginile cu slug-urile:
   - `produse`
   - `abonament`
   - `inchiriere`
   - `galerie`
   - `contact`
   - `blog`
4. Setează o pagină statică pentru Home (Settings → Reading), sau lasă tema să folosească `front-page.php`.
5. Opțional: configurează meniul principal și atribuie-l la locația **Meniu principal**.
