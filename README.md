<div align="center">
  <img src="https://laraflare.atiqullah.dev/static/images/icon.png" alt="Laraflare icon" width="96">

  # Laraflare

  **A lightweight local development environment manager for Windows.**

  [![Platform](https://img.shields.io/badge/Platform-Windows%2010%20%7C%2011-0078D4?logo=windows)](https://laraflare.atiqullah.dev)
  [![Release](https://img.shields.io/badge/Release-v0.1.0--alpha-blue)](https://github.com/atiqullah-ahmadzai/laraflare/releases/tag/alpha)
  [![License](https://img.shields.io/badge/License-MIT%20%2F%20Apache%202.0-orange)](#license)

  [Website](https://laraflare.atiqullah.dev) · [Download](https://github.com/atiqullah-ahmadzai/laraflare/releases/tag/alpha)
</div>

## About

Laraflare simplifies local PHP, Laravel, Node.js, Python, and Nginx development on Windows. It provides project-specific runtime versions, local HTTPS domains, service management, an integrated terminal, SSH connection management, and public tunnels.

## Features

- Manage Nginx, PHP-FPM, MySQL, and Redis services.
- Assign PHP, Node.js, and Python versions per project.
- Create trusted local `.test` HTTPS domains.
- Run commands through the desktop terminal or `laraflare` CLI.
- Store and manage SSH connections and keys.
- Create public HTTPS tunnels with ngrok.
- Monitor service status, ports, and resource usage.

## Screenshots

### Environment Control Center

Manage local services and monitor their status, ports, and resource usage.

![Laraflare environment dashboard](https://laraflare.atiqullah.dev/static/images/ss_1.png)

### Project Runtime Management

Choose separate PHP, Node.js, and Python versions for each project.

![Laraflare project runtime manager](https://laraflare.atiqullah.dev/static/images/ss_2.png)

### Terminal and SSH Manager

Run local commands and organize remote SSH connections from one interface.

![Laraflare terminal and SSH manager](https://laraflare.atiqullah.dev/static/images/ss_3.png)

## Download

Download the latest alpha release from the [GitHub Releases page](https://github.com/atiqullah-ahmadzai/laraflare/releases/tag/alpha).

Available packages:

- Windows installer: `Laraflare-v0.1.0-x64-setup.exe`
- Portable archive: `Laraflare-v0.1.0-x64-setup.zip`

> Laraflare is currently in alpha. Features and commands may change between releases.

## CLI Usage

```powershell
# Initialize the local development stack
laraflare init

# Check services and ports
laraflare status

# Select a PHP version for the current project
laraflare env use php@8.5

# Configure a local HTTPS domain
laraflare domain set store.test

# Diagnose common environment issues
laraflare doctor

# Export the environment configuration
laraflare export
```

## License

Laraflare is available under the MIT or Apache 2.0 license.
