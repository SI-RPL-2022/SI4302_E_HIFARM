<p align="center"><a href="#" target="_blank"><img src="https://drive.google.com/uc?export=view&id=1wvnGZ-yHSAwKBAg6RHSNyUwSSzpB5ZNd" width="300"></a></p>

## About HiFarm

**HiFarm** is a repository for Web Application Project of Capstone Project Course. HiFarm provides facilities to the community, especially farmers in Indonesia. On this website, farmers can purchase animal feed ingredients, sell livestock, auction animals and record income and expenses from farmers. This website can also cooperate with other parties for the distribution of livestock, for example qurban animals.

## Requirements
- PHP >= 7.3.0
- Laravel 8
- Node JS

## Usage
1. Clone this repository.
2. Duplicate `.env.example` and rename it to `.env` then make  changes according to your development server configuration.
3. Run the command `composer install` in the project folder of this repository.
4. Run the command `php artisan key:generate`
5. Create a database called `hifarm` (match with your .env) on your development server
6. Run the command `php artisan migrate:fresh --seed`
7. Run the app `php artisan serve`

## Contribute (Member SI4302-E Only)
It is assumed that you have been successfully run the application on your development server.

1. Before making any changes, create a new git branch with `git checkout -b <your_branch_name>`
2. Make a changes and don't forget to commit with descriptive message.
3. Push to the remote repository `git push origin <your_branch_name>`

## Contributor
1. Nuh Mahardika Matien Siam (1202194046) a.k.a [ennmatien](https://github.com/ennmatien)
2. Fakhri Hassan Maulana (1202194336) a.k.a [dzzlr](https://github.com/dzzlr)
3. Febrian Fahmi Alim (1202190177) a.k.a [brianajaaa](https://github.com/brianajaaa)
4. M Fajri Bryan Pratama (1202190116) a.k.a [fajribryan](https://github.com/fajribryan)
5. Zul Fauzi Yahyah (1202190128) a.k.a [icarryu](https://github.com/icarryu)
