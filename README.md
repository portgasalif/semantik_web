<h1 align="left"><a href="https://github.com/portgasalif/semantik_web" target="_blank">Chipmark</a></h1>

## About Projects

Aplikasi ini dibuat berbasis website yang diberi nama Chipmark. Chipmark merupakan sebuah website yang berisi informasi tentang chipset atau processor berbagai jenis, perusahaan pembuat, dan masih banyak lagi. Di situs ini juga terdapat aplikasi web semantik sebagai mesin pencari yang menggunakan SPARQL sehingga setiap input yang diberikan akan menampilkan hasil yang sesuai dengan yang dimasukkan.

### Built With

- [Bootstrap](https://getbootstrap.com/)
- [XAMPP](https://www.apachefriends.org/download.html)
- [NGROK](https://ngrok.com/)
- [Apache Jena Fuseki](https://jena.apache.org/documentation/fuseki2/index.html)

## Requirements

<ul>
    <li>Git</li>
    <li>Composer</li>
    <li>XAMPP</li>
    <li>PHP 8.0</li>
    <li>Browser</li>
    <li>Apache Jena Fuseki</li>
    <li>NGROK</li>
</ul>

## Installation

1. Siapkan dan instal semua Persyaratan
2. Clone proyek di folder XAMPP (../xampp/htdocs)
   ```sh
       git clone https://github.com/portgasalif/semantik_web
   ```
3. Jalankan Apache Jena Fuseki di root folder
   ```sh
       fuseki-server
   ```
4. Jalankan NGROK di port 3030
   ```
       ngrok http 3030
   ```
5. Tambahkan file turtle di `/src/sparql/data.ttl` ke Apache Jena Fuseki di http://localhost:3030/
6. Jalankan aplikasi
   ```sh
       http://localhost:8080//
   ```

## Author

| NPM          | Name                 |
| ------------ | -------------------- |
| 140810190060 | Alif Fachrel Anargya |
