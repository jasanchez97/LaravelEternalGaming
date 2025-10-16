# Videogames App

This page is simply a sample of an effort to achieve the dream of developing a website, with astronomy as a topic that I liked so much as a child.

## Getting Started

These instructions will give you a copy of the project up and running on
your local machine for development and testing purposes. See deployment
for notes on deploying the project on a live system.

### Prerequisites

You need to have Laragon and the lastest PHP version installed before, here are the links provided
    https://laragon.org/download/
    https://windows.php.net/download/

Head to install the 8.4 version and change it in the Window Toolbar where you change settings for Laragon, go to PHP and select the version.

Once all these programs have been downloaded, download the repository in the git terminal within Visual Studio with this command and directory:

    git clone https://github.com/jasanchez97/LaravelEternalGaming.git

    Directory:
      "C:\laragon\www\theproject"

## Deployment

One you follow these steps, open the Laragon terminal, then insert the following command:

  composer install

The next step is copying the .envexample from the project root folder and rename to .env.

Then do again in terminal laragon:

  php artisan migrate (insert yes to create the table)

  php artisan key:generate

Now you can initiate all laragon services and the last commmand to do in terminal for opening the project is:

    php artisan serve

## Built With

  - [Knowledge] - Of my self and by a huge back of the enough internet, obviously all thanks to my teacher, Tiburcio
  - [Creative Commons](https://creativecommons.org/) - Used to choose the license

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code
of conduct

## Versioning

Used github for versioning the project.

## Authors

  - **jasanchez97**
    [Juan Antonio Sánchez Martel](https://github.com/jasanchez97)

## License

This project is licensed under the **Creative Commons Attribution-NonCommercial 4.0 International License (CC BY-NC 4.0)**, along with additional ethical statutes.
See the **[LICENSE.md](LICENSE.md)** file for full details and usage requirements.

## Acknowledgments

  - For the wonderful teaching staff I have.
  - Inspiration for making my own game that I want to develop in the future, not far away.