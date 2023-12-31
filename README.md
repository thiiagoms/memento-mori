<div align="center">
    <a href="https://github.com/thiiagoms/memento-mori">
        <img src="assets/img/flower.png" alt="Logo" width="80" height="80">
    </a>
    <h3 align="center">Memento mori :skull_and_crossbones: </h3>
   <p float="left">
        <img
            src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"
            alt="PHP"
        />
        <img
            src="https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white"
            alt="Docker"
        />
    </p>
</div>

- [Dependencies :heavy_plus_sign:](#dependencies)
- [Install :package:](#install)
- [Run :runner:](#run)

## Dependencies
- Docker :whale:

## Install

01 -) Clone:
```shell
$ git clone https://github.com/thiiagoms/memento-mori
```

02 -) Go to `memento-mori` directory:
```shell
$ cd memento-mori
memento-mori $
```

03 -) Give `memento` permissions:
```shell
memento-mori $ chmod +x memento
```

04 -) Run `docker-compose.yml` to stand up containers
```shell
memento-mori $ docker-compose up -d
```

## Run

01 -) Execute `memento conntainer` and input your birthdate :birthday: in `Y-m-d` format:
```shell
memento-mori $ docker-compose run app php memento

███╗   ███╗███████╗███╗   ███╗███████╗███╗   ██╗████████╗ ██████╗     ███╗   ███╗ ██████╗ ██████╗ ██╗
████╗ ████║██╔════╝████╗ ████║██╔════╝████╗  ██║╚══██╔══╝██╔═══██╗    ████╗ ████║██╔═══██╗██╔══██╗██║
██╔████╔██║█████╗  ██╔████╔██║█████╗  ██╔██╗ ██║   ██║   ██║   ██║    ██╔████╔██║██║   ██║██████╔╝██║
██║╚██╔╝██║██╔══╝  ██║╚██╔╝██║██╔══╝  ██║╚██╗██║   ██║   ██║   ██║    ██║╚██╔╝██║██║   ██║██╔══██╗██║
██║ ╚═╝ ██║███████╗██║ ╚═╝ ██║███████╗██║ ╚████║   ██║   ╚██████╔╝    ██║ ╚═╝ ██║╚██████╔╝██║  ██║██║
╚═╝     ╚═╝╚══════╝╚═╝     ╚═╝╚══════╝╚═╝  ╚═══╝   ╚═╝    ╚═════╝     ╚═╝     ╚═╝ ╚═════╝ ╚═╝  ╚═╝╚═╝
            
    => Remember you must die
                
    [*] Author: Thiago AKA thiiagoms
    [*] Version: 1.0
        
>> Your Birthdate: 
```