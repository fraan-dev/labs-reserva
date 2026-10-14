<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# LabsReserva

Sistema web desenvolvido com Laravel para gerenciamento e reserva de laboratórios de informática.

O projeto foi criado como atividade acadêmica da disciplina de Sistemas Distribuídos, com o objetivo de aplicar conceitos de desenvolvimento web, organização em Laravel, operações CRUD e comunicação entre sistemas por meio de API.

---

## Sobre o projeto

O **LabsReserva** permite organizar reservas de laboratórios de forma simples.

O usuário pode:

- visualizar os laboratórios disponíveis;
- consultar as reservas cadastradas;
- realizar uma nova reserva;
- editar uma reserva existente;
- excluir uma reserva;
- evitar conflitos de horário para o mesmo laboratório.

Os laboratórios já são previamente cadastrados no sistema.

---

## Tecnologias utilizadas

- PHP
- Laravel
- Blade
- HTML
- CSS
- SQLite
- Composer

Também foi adicionada uma API para permitir a comunicação do LabsReserva com outros sistemas.

---

## Funcionalidades

### Laboratórios

O sistema possui laboratórios previamente cadastrados, contendo informações como:

- nome;
- localização;
- descrição;
- capacidade, quando informada.

Atualmente são utilizados:

- Laboratório I — Prédio Principal - Sala 69
- Laboratório II — Prédio Principal - Sala 73
- Laboratório III — Prédio Principal - Sala 84

### Reservas

É possível cadastrar uma reserva informando:

- laboratório;
- responsável;
- data;
- hora de início;
- hora de término;
- finalidade.

Também é possível editar e excluir reservas já cadastradas.

### Validação de horários

Antes de registrar ou atualizar uma reserva, o sistema verifica se já existe outra reserva para:

- o mesmo laboratório;
- a mesma data;
- um horário que se sobreponha ao horário informado.

Caso exista conflito, a nova reserva não é permitida.

---

## CRUD

O projeto utiliza as principais operações de CRUD:

- **Create:** criar uma nova reserva;
- **Read:** visualizar laboratórios e reservas;
- **Update:** editar uma reserva existente;
- **Delete:** excluir uma reserva.

---

## Estrutura principal do projeto

```text
labs-reserva
│
├── app
│   └── Models
│       ├── Laboratorio.php
│       └── Reserva.php
│
├── database
│   ├── migrations
│   └── seeders
│
├── public
│
├── resources
│   └── views
│       ├── home.blade.php
│       ├── laboratorios.blade.php
│       ├── reservas.blade.php
│       ├── nova-reserva.blade.php
│       └── editar-reserva.blade.php
│
├── routes
│   ├── web.php
│   └── api.php
│
└── README.md
