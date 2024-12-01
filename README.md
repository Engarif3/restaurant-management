# Restaurant Management System (Backend)

A RESTful API built with Symfony to manage restaurant operations, including handling dishes, categories, carts, and payments. This backend is dockerized for seamless setup and integrates with a React frontend for a complete user experience.

## Features

- CRUD operations for recipes (dishes)
- Category management for menu items
  [comment]: <> - Cart functionality for adding dishes and managing quantities
  [comment]: <> - Payment processing
- RESTful API implementation for front-end
- Dockerized setup for development and production environments
- MariaDB database integration

## Tech Stack

- **Backend Framework**: Symfony 6.4
- **Database**: MariaDB 10.4
- **Containerization**: Docker
- **Frontend**: React (not included in this repository; refer to the frontend repo)
- **API Testing**: Postman or similar tools

## Prerequisites

Ensure you have the following installed:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (if using for frontend)

## Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/restaurant-management-backend.git
cd restaurant-management-backend
```

### 2. Build and Start Containers

```bash
docker-compose up --build

```

### 3. Access the Application

API Base URL: http://localhost:8000

```bash
docker-compose up --build

```

### 4. API Endpoints

## API Endpoints

API Base URL: http://localhost:8000

| HTTP Method | Endpoint                | Description                                                  |
| ----------- | ----------------------- | ------------------------------------------------------------ |
| GET         | `/dishes`               | Fetches a list of all dishes.                                |
| POST        | `/dish/create`          | Creates a new dish.                                          |
| GET         | `/dish/{id}`            | Fetches details of a specific dish by ID.                    |
| PUT         | `/dish/{id}/edit`       | Updates a specific dish by ID.                               |
| DELETE      | `/dish/{id}/delete`     | Deletes a specific dish by ID.                               |
| GET         | `/api/dishes`           | Returns a JSON list of all dishes for the frontend.          |
| GET         | `/category`             | Fetches a list of all categories.                            |
| POST        | `/category/create`      | Creates a new category.                                      |
| PUT         | `/category/edit/{id}`   | Updates a specific category by ID.                           |
| DELETE      | `/category/delete/{id}` | Deletes a specific category by ID and its associated dishes. |

                                                                                 |

## 📞 Contact

For any inquiries or issues, feel free to reach out:

- **Name:** Md. Arifur Rahman
- **Email:** [arif.aust.eng@gmail.com](mailto:arif.aust.eng@gmail.com)
- **LinkedIn:** [Md. Arifur Rahman](https://www.linkedin.com/in/engarif3/)
