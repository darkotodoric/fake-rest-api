## Fake JSON API for testing

This project provides a simple, fake JSON API using Symfony for testing purposes. It's designed to simulate basic user-related operations such as fetching user details, creating a new user, and deleting a user. The data is stored in a JSON file, making it lightweight and easy to manipulate.

## Installation
To set up this project, follow these steps:

1. Clone the repository:
```bash
git clone https://github.com/darkotodoric/fake-json-api
```

2. Start the Docker
```bash
docker-compose up -d
```

3. Install dependencies:
```bash
docker exec -it fakejsonapi-php-container php composer.phar install
```

4. Start using API
```bash
curl -X GET "http://localhost:1337/users"
```

## Usage

The API provides the following endpoints:

- `GET /users`: List all users.
- `POST /users`: Create a new user.
- `GET /users/{id}`: Get details of a user by their ID.
- `DELETE /users/{id}`: Delete a user by their ID.
- `GET /headers`: List of headers

## Data Structure

The user data is stored in `data/users.json`. Each user object typically contains the following fields:

- `id`: Unique identifier for the user.
- `first_name`: First name of the user.
- `last_name`: Last name of the user.
- `username`: Username of the user.
- `email`: Email address of the user.
- (Other fields as required).