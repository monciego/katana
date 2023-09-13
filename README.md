# Katana - Laravel Starter Kit

Katana is a Laravel starter kit designed to streamline your web development projects using Laravel Breeze and Blade templates. This README provides an overview of how to get started with Katana and outlines its features and conventions.

## Features

-   Laravel Breeze authentication scaffolding
-   Blade templates for flexible and efficient views
-   Customized project structure for organized development
-   Pre-configured environment settings for local development

## Getting Started

To create a new project using Katana, follow these steps:

1. Clone the Katana repository to your local machine:

    ```bash
    git clone https://github.com/monciego/katana.git my-project
    ```

2. Install project dependencies:

    ```bash
    composer install
    ```

    ```bash
    npm install && npm run dev
    ```

3. Create a .env file by copying the example:

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Configure your database settings in the .env file.

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

    Open a new terminal window.

    ```bash
    npm run dev

    ```

You can access your Katana-based Laravel application in your web browser by navigating to http://localhost:8000.

If you need to stop the local development server at any point, you can do so by pressing Ctrl+C in the terminal where it's running.

Happy coding!

## Customization

You can customize Katana to suit your project's specific needs:

-   **Adding Packages and Libraries:** You can extend Katana's functionality by adding additional packages and libraries via Composer. Simply include them in the `composer.json` file and run `composer install` to add them to your project.

-   **Modifying Blade Templates:** The Blade templates and views are located in the `resources/views` directory. You can customize these views to match the design and layout requirements of your project.

-   **Creating New Routes and Controllers:** As your project grows, you may need to define new routes and controllers. You can do this in the `routes` directory by adding new route definitions and creating new controllers.

-   **Adjusting Configuration:** If you need to make configuration changes, explore the `config` directory. Here, you can modify settings related to various aspects of your Laravel application.

## Contributing

If you'd like to contribute to Katana or report issues, please feel free to do so! Contributions from the community are always welcome. Here's how you can get involved:

1. Fork the Katana repository.

2. Make your changes or additions.

3. Submit a pull request to the main repository, and your contribution will be reviewed.

We appreciate your support in making Katana better for everyone.

## License

Katana is open-source software released under the [MIT License](LICENSE). Feel free to use, modify, and distribute it as you see fit.

## Credits

Katana is proudly maintained by [Jericho Bantiquete](https://github.com/monciego).

---

Thank you for choosing Katana for your Laravel projects. We hope it helps you kickstart your development and build amazing web applications!
