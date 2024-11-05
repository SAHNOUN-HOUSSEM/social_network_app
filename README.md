# Tuniconnect

🚀 **Tuniconnect** is an innovative web application designed to enhance online connectivity within the Tunisian community. Developed as a team project, Tuniconnect offers a comprehensive set of features for real-time communication, community engagement, and carpooling.

## Demonstration

We’ve prepared a demonstration video showcasing key features, available at [this link on LinkedIn](https://www.linkedin.com/posts/mahdi-chaabane_react-reactjs-symfony-activity-7072158461911871488-Rdk5?utm_source=share&utm_medium=member_desktop).


## Table of Contents
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
- [Contributors](#contributors)

## Features

- **Real-Time Communication**: Send and receive messages instantly with WebSocket and Ratchet technologies.
- **Community Engagement**: Create posts, comment, like, and share content to connect with other users.
- **User Authentication & Authorization**: Secure access with roles to protect user data.
- **Carpooling Section**: Find and offer rides easily, with posts specifying start point, destination, seats, and pricing for sustainable transportation.

## Technology Stack

- **Frontend**: ReactJS
  - Uses React Router for seamless navigation and an intuitive user interface.
- **Backend**: Symfony
- **Real-Time Communication**: Ratchet (PHP library) with WebSocket
- **Languages & Libraries**: PHP, JavaScript, HTML, CSS




## Installation

### Backend

- Clone the [backend](https://github.com/SAHNOUN-HOUSSEM/social_network_app/tree/serveur-back) and navigate to the backend directory:
  
  ```bash
  # Install dependencies
  composer install
  npm install
  
  # Start the Ratchet server for WebSocket communication
  php ratchet
  php bin/console server:run

### Frontend

- Clone the [frontend](https://github.com/SAHNOUN-HOUSSEM/social_network_app/tree/serveur-frontend) and navigate to the frontend directory:

  ```bash
  # Install dependencies
  npm install

  # Start the frontend server
  npm start


## Contributors

This project was developed by a dedicated team:

- [Chaima Gharbi](https://github.com/ChaimaGharbi)  
- [Mohamed Amine Gdoura](https://github.com/Medaminegdoura)
- [Aziz Masmoudi](https://github.com/azizmass)
- [Mahdi Chaabane](https://github.com/MahdiChaabane)
- [Houssem Sahnoun](#)

We are thrilled to have worked together to bring **Tuniconnect** to life!
