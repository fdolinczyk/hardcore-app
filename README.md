# Projekt Hardcore

**Opis projektu**  
Projekt Hardcore to rozbudowana aplikacja internetowa wykorzystująca **Bootstrap** oraz niestandardowe style CSS. Projekt zawiera system zgłoszeń umożliwiający użytkownikom przesyłanie wiadomości do administratora strony, co czyni go funkcjonalnym i praktycznym rozwiązaniem.

## Funkcjonalności
- **Responsywny design**: Strona dostosowuje się do różnych urządzeń dzięki technologii Bootstrap.
- **System zgłoszeń użytkowników**: Formularz kontaktowy, którego dane są przetwarzane i zapisywane w dedykowanej bazie danych.
- **Panel administratora**: Umożliwia administratorowi przeglądanie zgłoszeń użytkowników.

## Panel administratora
Panel administratora jest dostępny pod adresem:  
`/admin`

**Dane logowania do panelu administratora (domyślne):**  
- Login: `root`  
- Hasło: `root`  

> Zaleca się zmianę danych logowania po wdrożeniu projektu na serwer produkcyjny, aby zapewnić bezpieczeństwo.

## Bazy danych
W projekcie wykorzystano dwie oddzielne bazy danych:
1. **Baza administratorów**: Przechowuje dane logowania administratorów, zapewniając ich autoryzację w systemie.
2. **Baza zgłoszeń użytkowników**: Zawiera wszystkie zgłoszenia przesłane przez użytkowników za pośrednictwem formularza na stronie.

## Technologie użyte w projekcie
- HTML5, CSS3, JavaScript
- Bootstrap
- PHP (backend)
- MySQL (zarządzanie bazami danych)
