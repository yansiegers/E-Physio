<p align="center">
    <a href="https://e-physio.org/" target="_blank">
        <img src="https://raw.githubusercontent.com/yansiegers/E-Physio/main/public/img/logo.png" 
        alt="Logo e-physio" height="75">
    </a>
</p>
<p align="center">
    <a href="https://nhlstenden.com/">
        <img src="https://raw.githubusercontent.com/yansiegers/E-Physio/main/public/img/NHL-Stenden-PNG.png" alt="Logo NHL Stenden" height="50">
    </a>
    &nbsp;
    <a href="https://www.nhlstenden.com/en/minors/next-web">
        <img src="https://raw.githubusercontent.com/yansiegers/E-Physio/main/public/img/The-Next-Web.gif" alt="Logo The Next Web" height="50">
    </a> 
</p>

<p align="center">
    <a href="https://github.com/yansiegers/E-Physio/branches">
        <img src="https://img.shields.io/github/last-commit/yansiegers/E-Physio" alt="Last commit">
    </a>
    <a href="https://laravel.com/docs/8.x">
        <img src="https://img.shields.io/badge/Laravel-v8.x-important" alt="Laravel v8.x">
    </a>
    <a href="https://tailwindcss.com/docs">
        <img src="https://img.shields.io/badge/Tailwind-v2.x-important" alt="Tailwind v2.x">
    </a>
    <a href="https://nhlstenden.com/">
        <img src="https://img.shields.io/badge/university-NHL%20Stenden-blue" alt="University: NHL Stenden">
    </a>
    <a href="https://cmd-leeuwarden.nl/">
        <img src="https://img.shields.io/badge/study-CMD-yellow" alt="Study: CMD">
    </a>
    <a href="https://www.nhlstenden.com/en/minors/next-web">
        <img src="https://img.shields.io/badge/minor-The%20Next%20Web-red" alt="Minor: The Next Web">
    </a>
</p>

**Table of contents**
- [The e-physio project](#the-e-physio-project)
  - [About e-physio and the assignment](#about-e-physio-and-the-assignment)
    - [The study and this project](#the-study-and-this-project)
  - [Objectives](#objectives)
  - [This repository](#this-repository)
    - [Features](#features)
- [Technical details](#technical-details)
  - [Cloning and forking](#cloning-and-forking)
  - [Packages and depenencies](#packages-and-depenencies)
    - [PHP packages](#php-packages)
    - [NPM packages](#npm-packages)
  - [How to install this project](#how-to-install-this-project)
    - [Prerequisites](#prerequisites)
    - [Installing Docker](#installing-docker)
    - [Installing Laravel Sail](#installing-laravel-sail)
  - [How to use this project](#how-to-use-this-project)
- [Credits and copyright](#credits-and-copyright)
  - [Contact details](#contact-details)
  - [Terms and conditions](#terms-and-conditions)
  - [Laravel license](#laravel-license)

## The e-physio project
### About e-physio and the assignment
Two physiotherapists have started their own website to offer online physiotherapy for people that need therapy and mainly work at home. The [current website](https://e-physio.org/) is built in Wordpress and suits the needs for them right now, but the website isn't ready for their future plans. That is why they came to the minor The Next Web with a assignment: build a platform for health seekers who would like to have online therapy. This assignment raised questions as "how can we attract people to the services of e-physio?" and "what is the best way to guide people through the process of making an appointment?"

#### The study and this project
This project is being done by four students of the study Communication & Multimedia Design (CMD) within the minor The Next Web from NHL Stenden, university of applied sciences.

CMD is an study that uses [Design Based Education](https://www.nhlstenden.com/en/why-nhl-stenden/education-concept). It also offers the method [Design Thinking](https://en.wikipedia.org/wiki/Design_thinking) to structure the projects. Within the minor The Next Web, we use [Scrum](https://en.wikipedia.org/wiki/Scrum_(software_development)) for the development of the product. When combined, the Scrum sprints feature the five phases of Design Thinking.

### Objectives
The main objective from the two clients is as follows: develop a proof-of-concept in the form such as a roadmap, app, or website that support eachother.

### This repository
This repository contains all the code that was developed during the project. The used workflow for this Git repository is [Git Flow](https://www.gitkraken.com/learn/git/git-flow). All branches can be found [here](https://github.com/yansiegers/E-Physio/branches).

#### Features
Per part of the application is noted what feature is included in this repository and what feature is not. The emojis tell you what feature is included and what each feature is.

There are three parts of the application:
1. General pages
2. The client portal
3. The physician portal

**Legend**

🏗️ Lay-out:
* Framework for each page
* Metadata of each page
* Navigation bar
* Footer

📄 Page:
* Contents of the page
* Markup and styling
* Illustrations and animations

⚙️ Controller:
* Sends and receives data fom database
* Takes care of the pages

1: General pages | Included?
--- | ---
🏗️ Lay-out general | ✅
📄 Home page | ✅
📄 Contact page | ✅
📄 About page | ✅
📄 FAQ page | ❌
📄 Blog page | ❌
⚙️ Blog posts controller | ❌
📄 Log-in page | ✅
⚙️ Log-in controller | ✅

2: Client portal | Included?
--- | ---
🏗️ Lay-out onboarding (clients) | ✅
📄 Symptoms page | ✅
📄 Planner page | ✅
📄 Choices page | ✅
📄 Confirmation page | ✅
⚙️ Onboarding controller | ✅
🏗️ Lay-out portal (clients) | ❌
📄 Calendar page (clients) | ❌
⚙️ Calendar controller (clients) | ❌
📄 Account page (clients) | ❌
⚙️ Account controller (clients) | ❌

3: Physician portal | Included?
--- | ---
🏗️ Lay-out onboarding (physicians) | ❌
📄 Registration page | ❌
⚙️ Registration controller | ❌
📄 Physician profile page | ❌
⚙️ Physician profile controller | ❌
🏗️ Lay-out portal (physicians) | ❌
📄 Profile page | ❌
⚙️ Profile controller | ❌
📄 Work week page | ❌
⚙️ Work week controller | ❌
📄 Calendar page (physicians) | ❌
⚙️ Calendar controller (physicians) | ❌
📄 Account page (clients) | ❌
⚙️ Account controller (clients) | ❌

## Technical details

### Cloning and forking
When this project is completed, is is possible to clone or fork this project to get a copy of the project. You can find more about [cloning](https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/cloning-a-repository-from-github/cloning-a-repository) and [forking](https://docs.github.com/en/github/getting-started-with-github/quickstart/fork-a-repo) on the GitHub Docs.

### Packages and depenencies
There are PHP packages and NPM packages in this project. The details of all these packages are down below.

#### PHP packages
All PHP packages and their versions can be found in [`composer.json`](composer.json). These packages are managed by [Composer](https://getcomposer.org/).

Package | Description | Used?
--- | --- | ---
[PHP](https://www.php.net/) | PHP is a popular general-purpose scripting language that is especially suited to web development. | ✔️
[Laravel Framework](https://github.com/laravel/framework) | A web application framework. | ✔️
[Laravel Sail](https://github.com/laravel/sail) | Docker files for running a basic Laravel application. | ✔️
[Laravel Tinker](https://github.com/laravel/tinker) |  Powerful REPL for the Laravel framework. | ✔️
[Laravel Cors](https://github.com/fruitcake/laravel-cors) | Adds CORS (Cross-Origin Resource Sharing) headers support in the Laravel application.  | ✔️
[Laravel Breeze](https://github.com/laravel/breeze) | Minimal Laravel authentication scaffolding with Blade and Tailwind. | ✔️
[Faker](https://github.com/fzaninotto/Faker) | Faker is a PHP library that generates fake data. | ✔️
fideloper/proxy |  | ❌
guzzlehttp/guzzle |  | ❌
facade/ignition |  | ❌
mockery/mockery |  | ❌
nunomaduro/collision |  | ❌
phpunit/phpunit |  | ❌

#### NPM packages
All NPM packages and their versions can be found in [`package.json`](package.json). These packages are managed by [Node Package Manager](https://www.npmjs.com/).

Package | Description | Used?
--- | --- | ---
[Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) | A utility-first CSS framework for rapid UI development.  | ✔️
[Tailwind CSS / forms](https://github.com/tailwindlabs/tailwindcss-forms) | A plugin that provides a basic reset for form styles. | ✔️
[Tailwind CSS / typography](https://github.com/tailwindlabs/tailwindcss-typography) | Adds typographic defaults to any vanilla HTML. | ✔️
[PostCSS](https://github.com/postcss/postcss) | A tool for transforming styles with JavaScript plugins. | ✔️
[Autoprefixer](https://github.com/postcss/autoprefixer) | A plugin to parse CSS. | ✔️
[Laravel Mix](https://github.com/JeffreyWay/laravel-mix) | Compiling CSS and JavaScript assets. | ✔️
[Alpine.js](https://github.com/alpinejs/alpine) |  | ❌
[Axios](https://github.com/axios/axios) |  | ❌
[Lodash](https://github.com/lodash/lodash) |  | ❌
[Stimulus](https://github.com/hotwired/stimulus) | A JavaScript framework. | ❌

### How to install this project
This project uses [Docker](https://www.docker.com/) and [Laravel Sail](https://laravel.com/docs/8.x/sail) to run. [Laravel](https://laravel.com/) itself and it's (references to) packages such as [Tailwind](https://tailwindcss.com/) are already included within the project.

#### Prerequisites
Installed in general:
* [Composer](https://getcomposer.org/doc/00-intro.md)
* [PHP](https://www.php.net/downloads.php)

Recommended installations for Windows
* [Windows Terminal](https://www.microsoft.com/en-us/p/windows-terminal/9n0dx20hk701)
* [Ubuntu on WSL](https://ubuntu.com/wsl)

#### Installing Docker
1. [Download Docker](https://www.docker.com/products/docker-desktop)
2. Follow the installation guide
   1. [Windows](https://docs.docker.com/docker-for-windows/install/)
   2. [Mac](https://docs.docker.com/docker-for-mac/install/)

Docker requires for Windows:
* [*Hyper-V* or *WSL 2* to be enabled](https://docs.docker.com/docker-for-windows/install/#system-requirements)
* [Virtualization to be enabled](https://docs.docker.com/docker-for-windows/troubleshoot/#virtualization-must-be-enabled)

#### Installing Laravel Sail
1. Follow the installation guide on Laraval Sail: [Installing Sail Into Existing Applications](https://laravel.com/docs/8.x/sail#installation)
2. Optionally, you can [configure a Bash alias](https://laravel.com/docs/8.x/sail#configuring-a-bash-alias)

You can find more on installing Laravel [here](https://laravel.com/docs/8.x/installation).

### How to use this project
There are a few commands to get going with this project. Normally the `php` command is used, but this gets replaced by the `sail` command. Compling the assets such as the CSS from Tailwind happens with [Laravel Mix](https://laravel.com/docs/8.x/mix/).

Command | Description
--- | ---
`sail up` | Start the application's containers
`sail artisan tinker` | Start the command line for the Laravel application
`npm run dev` | Run all Mix tasks
`npm run watch` | Run all Mix tasks on file change
`npm run prod` | Run all Mix tasks and minify output

## Credits and copyright
This project is done by four students of NHL Stenden, within the minor The Next Web. School year 2020/2021, second semester.

### Contact details
For any questions about the project you can send the [owner of this repository](https://github.com/yansiegers) an email. The full contact details of all team members can be found in the documentation of the project.

### Terms and conditions 
The terms and conditions as mentioned in "Algemene voorwaarden kennisdiensten" ("General terms and conditions knowledge services") apply to this project. In short, NHL Stenden keeps the intellectual property rights about this project. More on this and other clauses can be found in said document.

### Laravel license
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
