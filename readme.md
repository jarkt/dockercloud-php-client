# Usage
Please read ["documentation of docker-php-client"](https://github.com/jarkt/docker-php-client).

## Installation
Install via composer:
```json
{
	"require": {
		"jarkt/dockercloud-php-client": "0.9.*"
	}
}
```

# Developers
Tests are running inside a docker container. Install all the test dependencies by going to the "containers" folder
and type: `docker-compose -f install.yml up`

Update dependencies with:
`docker-compose -f update.yml up`

Run the tests with:
`docker-compose up`

This will make the API available through the container
["jarkt/docker-remote-api"](https://github.com/jarkt/docker-remote-api) and run the tests against this endpoint.
