![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

# Dashboard Usuarios, Roles & Permisos

### Objetivos

-   Crear una base de datos con usuarios que tengan un rol asignado vinculado a permisos.
-   Generar migraciones, factories y seeders para inicializar el proyecto.
-   Los seeders deben generar al menos 1 admin y 3 editores junto con los permisos correspondientes
-   Generar las tablas pivot correspondientes de rol_user y permiso_rol

```
php artisan migrate:refresh --seed
```

Resetea y genera _n_ usuarios donde _n_ se especifica en UserFactory (20 por ahora).

![script](https://github.com/ratofante/laravel-factory-seeders-roles-y-permisos/blob/main/dashboard.png?raw=true)
