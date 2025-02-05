# SmartFitness 🏋️‍♂️📊

SmartFitness es un sistema de gestión y administración de clientes para centros de acondicionamiento físico, desarrollado en 2012 como parte de un proyecto de grado.
🚧 Más de una década después, he decidido convertir este proyecto en un caso de estudio, modernizándolo y refactorizándolo mediante principios de arquitectura de software. El objetivo es mejorar su escalabilidad, seguridad y mantenibilidad. Esta actualización incluirá: reestructuración del código, modularización, implementación de patrones de arquitectura, despliegue con contenedores y migración a tecnologías actuales, transformando el sistema heredado en una solución moderna, escalable y eficiente. 🚧

## 🚀 Tecnologías

- **Backend:** PHP 5.4 (obsoleto)
- **Frontend:** jQuery 1.3.2, Lightbox 2.03.3, SWFObject 2.0
- **Servidor Web:** Apache 2.4.6
- **Base de Datos:** MySQL 5.5
- **Contenedores:** Docker

## 📦 Instalación

Antes de instalar, asegúrate de tener instalado:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

1. Clonar repositorio:

   ```sh
   git clone https://github.com/cjroperoa/smartfitness.git
   cd smartfitness
   ```

2. Levantar los contenedores:

   ```sh
   docker-compose up -d --build
   ```

3. Acceder a la aplicación:

   ```
   http://localhost:8080/
   ```

4. Acceder a PhpMyAdmin:

   ```
   http://localhost:8081/
   ```

## 🛠️ Comandos útiles

- **Ver logs:**

  ```sh
  docker-compose logs -f
  ```

## 📄 Licencia

Este proyecto está licenciado bajo la Licencia Apache 2.0. Consulta el archivo [LICENSE](./LICENSE) para más detalles.

<!-- 
## 🤝 Contribuir

Si quieres contribuir al proyecto:

1. Haz un fork del repositorio
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`)
3. Realiza tus cambios y haz commit (`git commit -m 'Agrega nueva funcionalidad'`)
4. Sube los cambios (`git push origin feature/nueva-funcionalidad`)
5. Crea un Pull Request
 -->
