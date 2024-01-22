## Fake JSON API for testing

This project provides a simple, fake JSON API using Symfony for testing purposes. It's designed to simulate basic user-related operations such as fetching user details, creating a new user, and deleting a user. The data is stored in a JSON file, making it lightweight and easy to manipulate.

## Installation
To set up this project, follow these steps:

1. Clone the repository:
```
git clone https://github.com/darkotodoric/fake-json-api
```

2. Install dependencies:
```
composer install
```

3. Start the Docker
```
docker-compose up -d
```

## Usage

The API provides the following endpoints:

- `GET /users`: List all users.
- `POST /user`: Create a new user.
- `GET /user/{id}`: Get details of a user by their ID.
- `DELETE /user/{id}`: Delete a user by their ID.

## Data Structure

The user data is stored in `data/users.json`. Each user object typically contains the following fields:

- `id`: Unique identifier for the user.
- `first_name`: First name of the user.
- `last_name`: Last name of the user.
- `username`: Username of the user.
- `email`: Email address of the user.
- (Other fields as required).