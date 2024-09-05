
# CEB Project

A Laravel project containerized with Docker, utilizing Breeze for authentication and Livewire for interactive UI components.

## Prerequisites

Ensure you have the following installed on your machine:

-   [Docker](https://www.docker.com/get-started)
-   [Docker Compose](https://docs.docker.com/compose/install/)
-   [Git](https://git-scm.com/)

## Getting Started

### 1. Clone the Repository

Clone the repository to your local machine:


`git clone https://gitlab.com/test8852918/ceb.git
cd ceb` 

### 2. Install A2Way Drop-in-Docker PHP

Add the Docker environment as a submodule or copy it to a directory:

`git submodule add https://github.com/a2way-com/drop-in-docker-php.git
git submodule init
git submodule update` 

Or download and manually copy it into a subdirectory of your project.

### 3. Configure Environment Variables

1.  Copy `.env.example` to `.env`:
    
    `cp .env.example .env` 
    
2.  Set up environment variables in the `.env` file and `drop-in-docker-php/env` files.
    

### 4. Build and Run Containers

Navigate to the `drop-in-docker-php` directory and start the Docker containers:

`make up` 

### 5. Install Dependencies

Install the necessary dependencies inside the app container:

`docker-compose exec app composer install
docker-compose exec app npm install` 

### 6. Set Up the Application

Generate the application key:


`docker-compose exec app php artisan key:generate` 

Run the database migrations:


`docker-compose exec app php artisan migrate` 

### 7. Configure Database Permissions

Update your MySQL username and password in the `drop-in-docker-php/env/app.env` file:

-   `DB_USERNAME=root
-   `DB_PASSWORD=root

Access [Adminer](http://localhost:8001/) to verify the connection.

### 8. Run the Project

To start the Laravel server, run:

`php artisan serve` 

Open the project in your web browser at [http://localhost:8000/](http://localhost:8000/).

### 9. Access the Application

Visit [http://localhost](http://localhost) to access the application.

### 10. Stopping Containers

Stop and remove all containers:

`make down` 

## Additional Commands

-   **Artisan Commands**:
    
    `docker-compose exec app php artisan <command>` 
    
-   **Rebuild Containers**:

    
    `make up-f` 
    
-   **Run Tests**:
 
    
    `docker-compose exec app php artisan test` 
    

## Contributing

If you'd like to contribute, fork the repository and submit a pull request.

## License

This project is open-sourced under the [MIT license](LICENSE).