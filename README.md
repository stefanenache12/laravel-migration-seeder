
1. Copio il file .env.example e lo rinomino in .env (senza cancellare il file .env.example)

     DAL TERMIANLE cp .env.example .env

2. Apro il terminale ed eseguo il comando composer install

3. Dopo l'esecuzione di composer install, eseguo nel terminale il comando php artisan key:generate

4. Dopo l'esecuzione di php artisan key:generate, eseguo nel terminale il comando npm i

5. Dopo l'esecuzione di npm i:
     a. Avvio il server di Laravel con php artisan serve e di fianco avvio npm run dev 
     b. Eseguo il comando npm run build e poi avvio il server di Laravel con php artisan serve


CONESSIONE DATABASE

In file .env DB_DATABASE aggiungi nome del tuo Database


CREAZIONE CONTROLLER

php artisan make:controller FolderName/FileName

CREAZIONE MODEL(CLASSE)

php artisan make:model NomeDellaClasse