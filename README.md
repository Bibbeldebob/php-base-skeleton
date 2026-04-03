# php-base-skeleton

## Nutzung als Starterprojekt

Dieses Projekt kann als Grundlage für neue PHP-Projekte verwendet werden. Weil es nicht auf Packagist veröffentlicht ist, nutze bitte die GitHub-Repository-URL in `composer create-project`:

```bash
composer create-project --repository='{"type":"vcs","url":"https://github.com/Bibbeldebob/php-base-skeleton.git"}' bibbeldebob/php-skeleton <dein-neues-verzeichnis> dev-main
```

Beispiel:

```bash
composer create-project --repository='{"type":"vcs","url":"https://github.com/Bibbeldebob/php-base-skeleton.git"}' bibbeldebob/php-skeleton my-app dev-main
```

Danach kannst du das Verzeichnis `my-app` betreten und wie gewohnt weiterentwickeln:

```bash
cd my-app
composer install
vendor/bin/phpunit
```

Tipp: Öffne das Projekt im Zielverzeichnis im VS Code-Devcontainer (\`.devcontainer\`), damit die Entwicklungsumgebung und PHP-Version konsistent sind.

Hinweis: Bei privaten Repositories sind ggf. SSH-Zugang oder Token nötig (z. B. `git@github.com:Bibbeldebob/php-base-skeleton.git`).
