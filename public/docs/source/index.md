---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_9dacb83a000873f5644fac30130aa46f -->
## The action to show widget output via ajax.

> Example request:

```bash
curl -X GET -G "http://localhost/arrilot/load-widget" 
```

```javascript
const url = new URL("http://localhost/arrilot/load-widget");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET arrilot/load-widget`


<!-- END_9dacb83a000873f5644fac30130aa46f -->

<!-- START_9a2ce5003ff2eccb00ffbee6b668d54e -->
## maileclipse
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse" 
```

```javascript
const url = new URL("http://localhost/maileclipse");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET maileclipse`


<!-- END_9a2ce5003ff2eccb00ffbee6b668d54e -->

<!-- START_1dbe86d638df32260eac1dde1338a97f -->
## maileclipse/templates
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/templates" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET maileclipse/templates`


<!-- END_1dbe86d638df32260eac1dde1338a97f -->

<!-- START_d0e818a70d9b7bd1ac111481bd6e8e23 -->
## maileclipse/templates/new
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/templates/new" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/new");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET maileclipse/templates/new`


<!-- END_d0e818a70d9b7bd1ac111481bd6e8e23 -->

<!-- START_11e898fb0af37e7436af56135813c2ec -->
## maileclipse/templates/new/{type}/{name}/{skeleton}
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/templates/new/1/1/1" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/new/1/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET maileclipse/templates/new/{type}/{name}/{skeleton}`


<!-- END_11e898fb0af37e7436af56135813c2ec -->

<!-- START_57c2d6acbef513122d9fa4e7a924c2fc -->
## maileclipse/templates/edit/{templatename}
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/templates/edit/1" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/edit/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET maileclipse/templates/edit/{templatename}`


<!-- END_57c2d6acbef513122d9fa4e7a924c2fc -->

<!-- START_63d50d240d07520e0fe7cb50bb8194ff -->
## maileclipse/templates/new
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/templates/new" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/new");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/templates/new`


<!-- END_63d50d240d07520e0fe7cb50bb8194ff -->

<!-- START_e00dd154abbc405ef473a754ebd7a54e -->
## maileclipse/templates/delete
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/templates/delete" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/delete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/templates/delete`


<!-- END_e00dd154abbc405ef473a754ebd7a54e -->

<!-- START_45472a32eb082435e22242163a3db3ae -->
## maileclipse/templates/update
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/templates/update" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/templates/update`


<!-- END_45472a32eb082435e22242163a3db3ae -->

<!-- START_cd8c0e08626c33a570cfa12fb1d3c8bb -->
## maileclipse/templates/preview
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/templates/preview" 
```

```javascript
const url = new URL("http://localhost/maileclipse/templates/preview");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/templates/preview`


<!-- END_cd8c0e08626c33a570cfa12fb1d3c8bb -->

<!-- START_dee64fd721b73c4b86d247d9244d54ac -->
## maileclipse/mailables
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET maileclipse/mailables`


<!-- END_dee64fd721b73c4b86d247d9244d54ac -->

<!-- START_2204d734cc001126874f07b741065359 -->
## maileclipse/mailables/view/{name}
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables/view/1" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/view/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET maileclipse/mailables/view/{name}`


<!-- END_2204d734cc001126874f07b741065359 -->

<!-- START_7776f0eef669b202d8518bee01fda62a -->
## maileclipse/mailables/edit/template/{name}
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables/edit/template/1" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/edit/template/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET maileclipse/mailables/edit/template/{name}`


<!-- END_7776f0eef669b202d8518bee01fda62a -->

<!-- START_2bac818e3ddf365d490891984c0c626c -->
## maileclipse/mailables/parse/template
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/mailables/parse/template" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/parse/template");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/mailables/parse/template`


<!-- END_2bac818e3ddf365d490891984c0c626c -->

<!-- START_6f313a32e78af8eb2bc87da264e66739 -->
## maileclipse/mailables/preview/template
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/mailables/preview/template" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/preview/template");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/mailables/preview/template`


<!-- END_6f313a32e78af8eb2bc87da264e66739 -->

<!-- START_511e7811236db3efdb4ff7ddf6a62a80 -->
## maileclipse/mailables/preview/template/previewerror
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables/preview/template/previewerror" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/preview/template/previewerror");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET maileclipse/mailables/preview/template/previewerror`


<!-- END_511e7811236db3efdb4ff7ddf6a62a80 -->

<!-- START_8bafde02b975658717f6e6f3e739de90 -->
## maileclipse/mailables/preview/{name}
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables/preview/1" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/preview/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET maileclipse/mailables/preview/{name}`


<!-- END_8bafde02b975658717f6e6f3e739de90 -->

<!-- START_feaf3aa68a3f1c4d7c97d5b94355f184 -->
## maileclipse/mailables/new
> Example request:

```bash
curl -X GET -G "http://localhost/maileclipse/mailables/new" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/new");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET maileclipse/mailables/new`


<!-- END_feaf3aa68a3f1c4d7c97d5b94355f184 -->

<!-- START_cf8900156df26c54a307ffea404a6605 -->
## maileclipse/mailables/new
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/mailables/new" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/new");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/mailables/new`


<!-- END_cf8900156df26c54a307ffea404a6605 -->

<!-- START_044e3eb231975fec257136ef13cf6040 -->
## maileclipse/mailables/delete
> Example request:

```bash
curl -X POST "http://localhost/maileclipse/mailables/delete" 
```

```javascript
const url = new URL("http://localhost/maileclipse/mailables/delete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST maileclipse/mailables/delete`


<!-- END_044e3eb231975fec257136ef13cf6040 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token" 
```

```javascript
const url = new URL("http://localhost/oauth/token");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/tokens/1" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token/refresh" 
```

```javascript
const url = new URL("http://localhost/oauth/token/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/scopes" 
```

```javascript
const url = new URL("http://localhost/oauth/scopes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## login api

> Example request:

```bash
curl -X POST "http://localhost/api/login" 
```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST "http://localhost/api/register" 
```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_a69bb9a29be86907a2edb0c13ea1f993 -->
## details api

> Example request:

```bash
curl -X POST "http://localhost/api/details" 
```

```javascript
const url = new URL("http://localhost/api/details");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/details`


<!-- END_a69bb9a29be86907a2edb0c13ea1f993 -->

<!-- START_2f16fadc20b4e17c0dca323eac684fe7 -->
## category-tree-view
> Example request:

```bash
curl -X GET -G "http://localhost/category-tree-view" 
```

```javascript
const url = new URL("http://localhost/category-tree-view");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET category-tree-view`


<!-- END_2f16fadc20b4e17c0dca323eac684fe7 -->

<!-- START_c0f46b42a8507a0e585b47d9adaccff9 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST "http://localhost/add-category" 
```

```javascript
const url = new URL("http://localhost/add-category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST add-category`


<!-- END_c0f46b42a8507a0e585b47d9adaccff9 -->

<!-- START_787ae28ee322d0552bdb11baced1441c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/banners" 
```

```javascript
const url = new URL("http://localhost/admin/banners");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/banners`


<!-- END_787ae28ee322d0552bdb11baced1441c -->

<!-- START_9bece49adfe9bebf1a309ab8dcf442e2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/banners/create" 
```

```javascript
const url = new URL("http://localhost/admin/banners/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/banners/create`


<!-- END_9bece49adfe9bebf1a309ab8dcf442e2 -->

<!-- START_50d5ff3b52f5e52c62de6c51ed42f1f7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/banners" 
```

```javascript
const url = new URL("http://localhost/admin/banners");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/banners`


<!-- END_50d5ff3b52f5e52c62de6c51ed42f1f7 -->

<!-- START_d4528da0a1a4cd725213bcefe64fd51c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/banners/1" 
```

```javascript
const url = new URL("http://localhost/admin/banners/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/banners/{banner}`


<!-- END_d4528da0a1a4cd725213bcefe64fd51c -->

<!-- START_6cc48ba0d3e82d93424fc0a5b7be73b8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/banners/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/banners/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/banners/{banner}/edit`


<!-- END_6cc48ba0d3e82d93424fc0a5b7be73b8 -->

<!-- START_2a47593c21c5f93600bebf759c0d89ce -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/banners/1" 
```

```javascript
const url = new URL("http://localhost/admin/banners/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/banners/{banner}`

`PATCH admin/banners/{banner}`


<!-- END_2a47593c21c5f93600bebf759c0d89ce -->

<!-- START_65b2085721befeb9234cc81da303a1f2 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/banners/1" 
```

```javascript
const url = new URL("http://localhost/admin/banners/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/banners/{banner}`


<!-- END_65b2085721befeb9234cc81da303a1f2 -->

<!-- START_ae8567793cc11432f69aa009564f4123 -->
## index
> Example request:

```bash
curl -X GET -G "http://localhost/index" 
```

```javascript
const url = new URL("http://localhost/index");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET index`


<!-- END_ae8567793cc11432f69aa009564f4123 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" 
```

```javascript
const url = new URL("http://localhost/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" 
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" 
```

```javascript
const url = new URL("http://localhost/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset/1" 
```

```javascript
const url = new URL("http://localhost/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "http://localhost/home" 
```

```javascript
const url = new URL("http://localhost/home");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_1ad8dfe1849b9760d526b6f224deb3e0 -->
## lang/{locale}
> Example request:

```bash
curl -X GET -G "http://localhost/lang/1" 
```

```javascript
const url = new URL("http://localhost/lang/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET lang/{locale}`


<!-- END_1ad8dfe1849b9760d526b6f224deb3e0 -->

<!-- START_3b7cde9ad9073f7d091897264c1d2684 -->
## Where to redirect users after login.

> Example request:

```bash
curl -X GET -G "http://localhost/login/1" 
```

```javascript
const url = new URL("http://localhost/login/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET login/{social}`


<!-- END_3b7cde9ad9073f7d091897264c1d2684 -->

<!-- START_1dc25094f2d01b432c390e50d56a3ae6 -->
## Obtain the user information from Social Logged in.

> Example request:

```bash
curl -X GET -G "http://localhost/login/1/callback" 
```

```javascript
const url = new URL("http://localhost/login/1/callback");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET login/{social}/callback`


<!-- END_1dc25094f2d01b432c390e50d56a3ae6 -->

<!-- START_64d8bf89d0081825e9bcee5199ae50ba -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/addresses" 
```

```javascript
const url = new URL("http://localhost/admin/addresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/addresses`


<!-- END_64d8bf89d0081825e9bcee5199ae50ba -->

<!-- START_248f6be45ec63282546a89fb7ac7d182 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/addresses/create" 
```

```javascript
const url = new URL("http://localhost/admin/addresses/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/addresses/create`


<!-- END_248f6be45ec63282546a89fb7ac7d182 -->

<!-- START_c4b3f7d37704140f9d1e9125ef505989 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/addresses" 
```

```javascript
const url = new URL("http://localhost/admin/addresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/addresses`


<!-- END_c4b3f7d37704140f9d1e9125ef505989 -->

<!-- START_626763e97781ccce29af99ce93436b3c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/addresses/1" 
```

```javascript
const url = new URL("http://localhost/admin/addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Address] 1"
}
```

### HTTP Request
`GET admin/addresses/{address}`


<!-- END_626763e97781ccce29af99ce93436b3c -->

<!-- START_c19f18285752f1c31bb6cfc5a5c6e1dc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/addresses/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/addresses/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Address] 1"
}
```

### HTTP Request
`GET admin/addresses/{address}/edit`


<!-- END_c19f18285752f1c31bb6cfc5a5c6e1dc -->

<!-- START_a0af89f64c7c637fe1cadaa009945f82 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/addresses/1" 
```

```javascript
const url = new URL("http://localhost/admin/addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/addresses/{address}`

`PATCH admin/addresses/{address}`


<!-- END_a0af89f64c7c637fe1cadaa009945f82 -->

<!-- START_76c2e588447aa8f6ba566f65a7ff33d1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/addresses/1" 
```

```javascript
const url = new URL("http://localhost/admin/addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/addresses/{address}`


<!-- END_76c2e588447aa8f6ba566f65a7ff33d1 -->

<!-- START_3378351e526e4c0198829490e887c4c2 -->
## paypal/express-checkout
> Example request:

```bash
curl -X GET -G "http://localhost/paypal/express-checkout" 
```

```javascript
const url = new URL("http://localhost/paypal/express-checkout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET paypal/express-checkout`


<!-- END_3378351e526e4c0198829490e887c4c2 -->

<!-- START_6e455ca6e9983d9b37cd03466c911de0 -->
## paypal/express-checkout-success
> Example request:

```bash
curl -X GET -G "http://localhost/paypal/express-checkout-success" 
```

```javascript
const url = new URL("http://localhost/paypal/express-checkout-success");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET paypal/express-checkout-success`


<!-- END_6e455ca6e9983d9b37cd03466c911de0 -->

<!-- START_e27441716a926a77941886445b7a84ad -->
## profileupdate
> Example request:

```bash
curl -X POST "http://localhost/profileupdate" 
```

```javascript
const url = new URL("http://localhost/profileupdate");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST profileupdate`


<!-- END_e27441716a926a77941886445b7a84ad -->

<!-- START_285045c4e9e509b9b46e77808ad00f9d -->
## paypal
> Example request:

```bash
curl -X POST "http://localhost/paypal" 
```

```javascript
const url = new URL("http://localhost/paypal");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST paypal`


<!-- END_285045c4e9e509b9b46e77808ad00f9d -->

<!-- START_fa0b0e896e8da187f79ea741feec06cd -->
## status
> Example request:

```bash
curl -X GET -G "http://localhost/status" 
```

```javascript
const url = new URL("http://localhost/status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET status`


<!-- END_fa0b0e896e8da187f79ea741feec06cd -->

<!-- START_ccb2920b1cfa9450060f4c789c3e1890 -->
## image
> Example request:

```bash
curl -X GET -G "http://localhost/image" 
```

```javascript
const url = new URL("http://localhost/image");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET image`


<!-- END_ccb2920b1cfa9450060f4c789c3e1890 -->

<!-- START_375b6ed787a8d24b073d51fb7401b9dd -->
## upload
> Example request:

```bash
curl -X POST "http://localhost/upload" 
```

```javascript
const url = new URL("http://localhost/upload");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST upload`


<!-- END_375b6ed787a8d24b073d51fb7401b9dd -->

<!-- START_9ddfb178549d1ca4dfb4ae7a8dd48095 -->
## newsletter
> Example request:

```bash
curl -X GET -G "http://localhost/newsletter" 
```

```javascript
const url = new URL("http://localhost/newsletter");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET newsletter`


<!-- END_9ddfb178549d1ca4dfb4ae7a8dd48095 -->

<!-- START_34984002018e6f17db30aa3091ae1c8c -->
## newsletter
> Example request:

```bash
curl -X POST "http://localhost/newsletter" 
```

```javascript
const url = new URL("http://localhost/newsletter");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST newsletter`


<!-- END_34984002018e6f17db30aa3091ae1c8c -->

<!-- START_fd3dbae9fdc606bf94e46021f2c647e3 -->
## testemail
> Example request:

```bash
curl -X GET -G "http://localhost/testemail" 
```

```javascript
const url = new URL("http://localhost/testemail");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET testemail`


<!-- END_fd3dbae9fdc606bf94e46021f2c647e3 -->

<!-- START_e4670372593584c8b55410b2facb898d -->
## count
> Example request:

```bash
curl -X GET -G "http://localhost/count" 
```

```javascript
const url = new URL("http://localhost/count");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET count`


<!-- END_e4670372593584c8b55410b2facb898d -->

<!-- START_1f73f4655495dd1ad529b4096615caf9 -->
## stock/chart
> Example request:

```bash
curl -X GET -G "http://localhost/stock/chart" 
```

```javascript
const url = new URL("http://localhost/stock/chart");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET stock/chart`


<!-- END_1f73f4655495dd1ad529b4096615caf9 -->

<!-- START_87c94e96562aaa109be46e1f8b371335 -->
## projects/chart/data
> Example request:

```bash
curl -X GET -G "http://localhost/projects/chart/data" 
```

```javascript
const url = new URL("http://localhost/projects/chart/data");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET projects/chart/data`


<!-- END_87c94e96562aaa109be46e1f8b371335 -->

<!-- START_fdea0598688a7fe2b733e9f582cc369f -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET -G "http://localhost/here" 
```

```javascript
const url = new URL("http://localhost/here");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (301):

```json
null
```

### HTTP Request
`GET here`

`POST here`

`PUT here`

`PATCH here`

`DELETE here`

`OPTIONS here`


<!-- END_fdea0598688a7fe2b733e9f582cc369f -->

<!-- START_a8ef477b5c348c0f4b24b4f9b3bc90ad -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/posts" 
```

```javascript
const url = new URL("http://localhost/admin/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/posts`


<!-- END_a8ef477b5c348c0f4b24b4f9b3bc90ad -->

<!-- START_2e37c90d67a96143863923ff5859c905 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/posts/create" 
```

```javascript
const url = new URL("http://localhost/admin/posts/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/posts/create`


<!-- END_2e37c90d67a96143863923ff5859c905 -->

<!-- START_a67af5ec5245a6f896bb7a6169c39d6b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/posts" 
```

```javascript
const url = new URL("http://localhost/admin/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/posts`


<!-- END_a67af5ec5245a6f896bb7a6169c39d6b -->

<!-- START_9b8f72bc4e4938f73c30968e35a571c8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/posts/1" 
```

```javascript
const url = new URL("http://localhost/admin/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`GET admin/posts/{post}`


<!-- END_9b8f72bc4e4938f73c30968e35a571c8 -->

<!-- START_649522dca2addc54d4862e8db6413ddd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/posts/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/posts/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Post] 1"
}
```

### HTTP Request
`GET admin/posts/{post}/edit`


<!-- END_649522dca2addc54d4862e8db6413ddd -->

<!-- START_93e124efe376a044a56b19551240b7ba -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/posts/1" 
```

```javascript
const url = new URL("http://localhost/admin/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/posts/{post}`

`PATCH admin/posts/{post}`


<!-- END_93e124efe376a044a56b19551240b7ba -->

<!-- START_64495d195e98183da03753c6fe58a7f4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/posts/1" 
```

```javascript
const url = new URL("http://localhost/admin/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/posts/{post}`


<!-- END_64495d195e98183da03753c6fe58a7f4 -->

<!-- START_c84b9d9b41ceaad732d96ae77866968f -->
## productinfo
> Example request:

```bash
curl -X GET -G "http://localhost/productinfo" 
```

```javascript
const url = new URL("http://localhost/productinfo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 2,
    "name": "demo",
    "created_at": "2019-08-27 06:56:01",
    "updated_at": "2019-08-27 06:56:01",
    "category": [
        {
            "id": 33,
            "title": "sample",
            "parent_id": 28,
            "created_at": "2019-08-02 09:20:09",
            "updated_at": "2019-08-02 09:20:09",
            "pivot": {
                "product_id": 2,
                "category_id": 33
            }
        },
        {
            "id": 33,
            "title": "sample",
            "parent_id": 28,
            "created_at": "2019-08-02 09:20:09",
            "updated_at": "2019-08-02 09:20:09",
            "pivot": {
                "product_id": 2,
                "category_id": 33
            }
        }
    ]
}
```

### HTTP Request
`GET productinfo`


<!-- END_c84b9d9b41ceaad732d96ae77866968f -->

<!-- START_cedd9ff3c7c313f699daa1335f0f215f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/orderinfo" 
```

```javascript
const url = new URL("http://localhost/orderinfo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET orderinfo`


<!-- END_cedd9ff3c7c313f699daa1335f0f215f -->

<!-- START_12cbe6895106f9cf1a103dc35308faed -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/address" 
```

```javascript
const url = new URL("http://localhost/admin/address");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/address`


<!-- END_12cbe6895106f9cf1a103dc35308faed -->

<!-- START_016492cf8c2ba9071df5f6237ae18f05 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/address/create" 
```

```javascript
const url = new URL("http://localhost/admin/address/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/address/create`


<!-- END_016492cf8c2ba9071df5f6237ae18f05 -->

<!-- START_439611e5a6cb0d3ddfb1836ae34de38c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/address" 
```

```javascript
const url = new URL("http://localhost/admin/address");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/address`


<!-- END_439611e5a6cb0d3ddfb1836ae34de38c -->

<!-- START_c7deadd41994c154054a17b06dc6417c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/address/1" 
```

```javascript
const url = new URL("http://localhost/admin/address/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Address] 1"
}
```

### HTTP Request
`GET admin/address/{address}`


<!-- END_c7deadd41994c154054a17b06dc6417c -->

<!-- START_1c863cbe3a503c065a0cd9956c5083cd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/address/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/address/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Address] 1"
}
```

### HTTP Request
`GET admin/address/{address}/edit`


<!-- END_1c863cbe3a503c065a0cd9956c5083cd -->

<!-- START_8e94f1cc7c14d88bb7a194abed6eced1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/address/1" 
```

```javascript
const url = new URL("http://localhost/admin/address/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/address/{address}`

`PATCH admin/address/{address}`


<!-- END_8e94f1cc7c14d88bb7a194abed6eced1 -->

<!-- START_0c12db82358f6b0a16f63dec8813fd05 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/address/1" 
```

```javascript
const url = new URL("http://localhost/admin/address/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/address/{address}`


<!-- END_0c12db82358f6b0a16f63dec8813fd05 -->

<!-- START_68a81fc659381b356596968817928876 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/coupons" 
```

```javascript
const url = new URL("http://localhost/admin/coupons");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/coupons`


<!-- END_68a81fc659381b356596968817928876 -->

<!-- START_993ee6b7dfee89d8372181c6b2b86f0f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/coupons/create" 
```

```javascript
const url = new URL("http://localhost/admin/coupons/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/coupons/create`


<!-- END_993ee6b7dfee89d8372181c6b2b86f0f -->

<!-- START_8a74b61fbc7bf3d5338f08633864061f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/coupons" 
```

```javascript
const url = new URL("http://localhost/admin/coupons");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/coupons`


<!-- END_8a74b61fbc7bf3d5338f08633864061f -->

<!-- START_e88309af4e1ecf2fa9f02d6794e960d8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/coupons/1" 
```

```javascript
const url = new URL("http://localhost/admin/coupons/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\coupon] 1"
}
```

### HTTP Request
`GET admin/coupons/{coupon}`


<!-- END_e88309af4e1ecf2fa9f02d6794e960d8 -->

<!-- START_626f0c1b57bac5690be8fe0939933c7b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/coupons/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/coupons/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\coupon] 1"
}
```

### HTTP Request
`GET admin/coupons/{coupon}/edit`


<!-- END_626f0c1b57bac5690be8fe0939933c7b -->

<!-- START_a26195b788f15329c6306eb041350964 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/coupons/1" 
```

```javascript
const url = new URL("http://localhost/admin/coupons/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/coupons/{coupon}`

`PATCH admin/coupons/{coupon}`


<!-- END_a26195b788f15329c6306eb041350964 -->

<!-- START_7260bbce733ba9e0101061bbb7bba1b1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/coupons/1" 
```

```javascript
const url = new URL("http://localhost/admin/coupons/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/coupons/{coupon}`


<!-- END_7260bbce733ba9e0101061bbb7bba1b1 -->

<!-- START_907003c2fb0f0e55e19b9e5db99ebe79 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/configuration" 
```

```javascript
const url = new URL("http://localhost/admin/configuration");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/configuration`


<!-- END_907003c2fb0f0e55e19b9e5db99ebe79 -->

<!-- START_7846eac4ed4553c466286768b2f3a1b9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/configuration/create" 
```

```javascript
const url = new URL("http://localhost/admin/configuration/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/configuration/create`


<!-- END_7846eac4ed4553c466286768b2f3a1b9 -->

<!-- START_66e5c37634114c210017c0a51eb1432a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/configuration" 
```

```javascript
const url = new URL("http://localhost/admin/configuration");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/configuration`


<!-- END_66e5c37634114c210017c0a51eb1432a -->

<!-- START_d2d0e5af5136be76a0f7ad6a923e8249 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/configuration/1" 
```

```javascript
const url = new URL("http://localhost/admin/configuration/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\configuration] 1"
}
```

### HTTP Request
`GET admin/configuration/{configuration}`


<!-- END_d2d0e5af5136be76a0f7ad6a923e8249 -->

<!-- START_63384b0f751aaa3bc43072d4b45551bb -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/configuration/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/configuration/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\configuration] 1"
}
```

### HTTP Request
`GET admin/configuration/{configuration}/edit`


<!-- END_63384b0f751aaa3bc43072d4b45551bb -->

<!-- START_03aef9c5f12c82af0877b0947761b9e0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/configuration/1" 
```

```javascript
const url = new URL("http://localhost/admin/configuration/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/configuration/{configuration}`

`PATCH admin/configuration/{configuration}`


<!-- END_03aef9c5f12c82af0877b0947761b9e0 -->

<!-- START_b4c32f5b5dfaab51ed867febefaa3ef8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/configuration/1" 
```

```javascript
const url = new URL("http://localhost/admin/configuration/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/configuration/{configuration}`


<!-- END_b4c32f5b5dfaab51ed867febefaa3ef8 -->

<!-- START_3086246e4df6ce1b61fbfbce3e6e2147 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/demos" 
```

```javascript
const url = new URL("http://localhost/admin/demos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/demos`


<!-- END_3086246e4df6ce1b61fbfbce3e6e2147 -->

<!-- START_9646442c431e78b056ce03c8a0c4e9ea -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/demos/create" 
```

```javascript
const url = new URL("http://localhost/admin/demos/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/demos/create`


<!-- END_9646442c431e78b056ce03c8a0c4e9ea -->

<!-- START_9edf70c1303f1a0035ce88bcb43e4910 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/admin/demos" 
```

```javascript
const url = new URL("http://localhost/admin/demos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/demos`


<!-- END_9edf70c1303f1a0035ce88bcb43e4910 -->

<!-- START_9a07860d255204f40a6b4cbe8bc5ce34 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/demos/1" 
```

```javascript
const url = new URL("http://localhost/admin/demos/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/demos/{demo}`


<!-- END_9a07860d255204f40a6b4cbe8bc5ce34 -->

<!-- START_e99b75eb09c38e6ad7c59a5bdb6a5e04 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/demos/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/demos/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/demos/{demo}/edit`


<!-- END_e99b75eb09c38e6ad7c59a5bdb6a5e04 -->

<!-- START_106ff6898fc4f09572f6654ef85f4e9c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/admin/demos/1" 
```

```javascript
const url = new URL("http://localhost/admin/demos/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/demos/{demo}`

`PATCH admin/demos/{demo}`


<!-- END_106ff6898fc4f09572f6654ef85f4e9c -->

<!-- START_6a05dacd606595cb4bdf43da7402984a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/demos/1" 
```

```javascript
const url = new URL("http://localhost/admin/demos/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/demos/{demo}`


<!-- END_6a05dacd606595cb4bdf43da7402984a -->

<!-- START_47b7a49b3a861b20dd29e58c29c9cde8 -->
## images
> Example request:

```bash
curl -X GET -G "http://localhost/images" 
```

```javascript
const url = new URL("http://localhost/images");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET images`


<!-- END_47b7a49b3a861b20dd29e58c29c9cde8 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## admin/login
> Example request:

```bash
curl -X GET -G "http://localhost/admin/login" 
```

```javascript
const url = new URL("http://localhost/admin/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## admin/login
> Example request:

```bash
curl -X POST "http://localhost/admin/login" 
```

```javascript
const url = new URL("http://localhost/admin/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_badb1c937a8c3e56e1a7253ca0cdfacc -->
## admin/hooks
> Example request:

```bash
curl -X GET -G "http://localhost/admin/hooks" 
```

```javascript
const url = new URL("http://localhost/admin/hooks");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks`


<!-- END_badb1c937a8c3e56e1a7253ca0cdfacc -->

<!-- START_432230a7228875b5baa5ba6b677e7e59 -->
## admin/hooks/{name}/enable
> Example request:

```bash
curl -X GET -G "http://localhost/admin/hooks/1/enable" 
```

```javascript
const url = new URL("http://localhost/admin/hooks/1/enable");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/enable`


<!-- END_432230a7228875b5baa5ba6b677e7e59 -->

<!-- START_7e6424294561f7b0a67a2ae22585b58a -->
## admin/hooks/{name}/disable
> Example request:

```bash
curl -X GET -G "http://localhost/admin/hooks/1/disable" 
```

```javascript
const url = new URL("http://localhost/admin/hooks/1/disable");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/disable`


<!-- END_7e6424294561f7b0a67a2ae22585b58a -->

<!-- START_f8daf1de1f5abe6cbc077b58025c2a27 -->
## admin/hooks/{name}/update
> Example request:

```bash
curl -X GET -G "http://localhost/admin/hooks/1/update" 
```

```javascript
const url = new URL("http://localhost/admin/hooks/1/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/update`


<!-- END_f8daf1de1f5abe6cbc077b58025c2a27 -->

<!-- START_1cb7e187338d4692aa72da2bdd0f6e3c -->
## admin/hooks
> Example request:

```bash
curl -X POST "http://localhost/admin/hooks" 
```

```javascript
const url = new URL("http://localhost/admin/hooks");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/hooks`


<!-- END_1cb7e187338d4692aa72da2bdd0f6e3c -->

<!-- START_3a2cf4434db868f89c6889d47f06d543 -->
## admin/hooks/{name}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/hooks/1" 
```

```javascript
const url = new URL("http://localhost/admin/hooks/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/hooks/{name}`


<!-- END_3a2cf4434db868f89c6889d47f06d543 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET -G "http://localhost/admin" 
```

```javascript
const url = new URL("http://localhost/admin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## admin/logout
> Example request:

```bash
curl -X POST "http://localhost/admin/logout" 
```

```javascript
const url = new URL("http://localhost/admin/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_576736063b80c937d4f6d7cf23dc713c -->
## admin/upload
> Example request:

```bash
curl -X POST "http://localhost/admin/upload" 
```

```javascript
const url = new URL("http://localhost/admin/upload");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/upload`


<!-- END_576736063b80c937d4f6d7cf23dc713c -->

<!-- START_2b573e6e1d43c73d7cca65562a4e5b27 -->
## admin/profile
> Example request:

```bash
curl -X GET -G "http://localhost/admin/profile" 
```

```javascript
const url = new URL("http://localhost/admin/profile");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/profile`


<!-- END_2b573e6e1d43c73d7cca65562a4e5b27 -->

<!-- START_e63b2f0bdbfc13b04a6e95ae794396e1 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/order" 
```

```javascript
const url = new URL("http://localhost/admin/users/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/order`


<!-- END_e63b2f0bdbfc13b04a6e95ae794396e1 -->

<!-- START_3a1e6967e6fc6e75b206a116be6990c3 -->
## admin/users/action
> Example request:

```bash
curl -X POST "http://localhost/admin/users/action" 
```

```javascript
const url = new URL("http://localhost/admin/users/action");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/action`


<!-- END_3a1e6967e6fc6e75b206a116be6990c3 -->

<!-- START_565aba9d8c16a122c48e9e43bfd74d39 -->
## admin/users/order
> Example request:

```bash
curl -X POST "http://localhost/admin/users/order" 
```

```javascript
const url = new URL("http://localhost/admin/users/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/order`


<!-- END_565aba9d8c16a122c48e9e43bfd74d39 -->

<!-- START_75a91fccfa4b95106e7a8d363cebf5fa -->
## admin/users/{id}/restore
> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/1/restore" 
```

```javascript
const url = new URL("http://localhost/admin/users/1/restore");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}/restore`


<!-- END_75a91fccfa4b95106e7a8d363cebf5fa -->

<!-- START_581a493db08a1fee3478950d342176b3 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/relation" 
```

```javascript
const url = new URL("http://localhost/admin/users/relation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/relation`


<!-- END_581a493db08a1fee3478950d342176b3 -->

<!-- START_966aef287a2e493cadea71f52b022ceb -->
## admin/users/remove
> Example request:

```bash
curl -X POST "http://localhost/admin/users/remove" 
```

```javascript
const url = new URL("http://localhost/admin/users/remove");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/remove`


<!-- END_966aef287a2e493cadea71f52b022ceb -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## admin/users
> Example request:

```bash
curl -X GET -G "http://localhost/admin/users" 
```

```javascript
const url = new URL("http://localhost/admin/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_5480f74e868e50a30ac924242a423503 -->
## admin/users/create
> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/create" 
```

```javascript
const url = new URL("http://localhost/admin/users/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/create`


<!-- END_5480f74e868e50a30ac924242a423503 -->

<!-- START_84cdb3581c8df106c62233f1ebb35d8b -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST "http://localhost/admin/users" 
```

```javascript
const url = new URL("http://localhost/admin/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users`


<!-- END_84cdb3581c8df106c62233f1ebb35d8b -->

<!-- START_efce1b78e6391078c4024f200af60be8 -->
## admin/users/{user}
> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/1" 
```

```javascript
const url = new URL("http://localhost/admin/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{user}`


<!-- END_efce1b78e6391078c4024f200af60be8 -->

<!-- START_f8b3cec767336a1c2280a2a3173678d9 -->
## admin/users/{user}/edit
> Example request:

```bash
curl -X GET -G "http://localhost/admin/users/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/users/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{user}/edit`


<!-- END_f8b3cec767336a1c2280a2a3173678d9 -->

<!-- START_d7f417f614d8614811f624203f4e63cd -->
## admin/users/{user}
> Example request:

```bash
curl -X PUT "http://localhost/admin/users/1" 
```

```javascript
const url = new URL("http://localhost/admin/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/users/{user}`

`PATCH admin/users/{user}`


<!-- END_d7f417f614d8614811f624203f4e63cd -->

<!-- START_d5165e9382f90b24649e6ea2a27ea85d -->
## admin/users/{user}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/users/1" 
```

```javascript
const url = new URL("http://localhost/admin/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{user}`


<!-- END_d5165e9382f90b24649e6ea2a27ea85d -->

<!-- START_d33d20eb4b2146eabfbfc25696c0f1bc -->
## Order BREAD items.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/order" 
```

```javascript
const url = new URL("http://localhost/admin/menus/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/order`


<!-- END_d33d20eb4b2146eabfbfc25696c0f1bc -->

<!-- START_5d01b72ada2ff1d9d4b29d15a504d55f -->
## admin/menus/action
> Example request:

```bash
curl -X POST "http://localhost/admin/menus/action" 
```

```javascript
const url = new URL("http://localhost/admin/menus/action");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/action`


<!-- END_5d01b72ada2ff1d9d4b29d15a504d55f -->

<!-- START_67cd26259e818cdf5671de42660cf592 -->
## admin/menus/order
> Example request:

```bash
curl -X POST "http://localhost/admin/menus/order" 
```

```javascript
const url = new URL("http://localhost/admin/menus/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/order`


<!-- END_67cd26259e818cdf5671de42660cf592 -->

<!-- START_69d1eed77c0cfb78139c587c1b8ee8d1 -->
## admin/menus/{id}/restore
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/1/restore" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/restore");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{id}/restore`


<!-- END_69d1eed77c0cfb78139c587c1b8ee8d1 -->

<!-- START_d041193c8cda3598ee88c01cb4eb7d6f -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/relation" 
```

```javascript
const url = new URL("http://localhost/admin/menus/relation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/relation`


<!-- END_d041193c8cda3598ee88c01cb4eb7d6f -->

<!-- START_ab85cc3a7ac21476439a36e859a12321 -->
## admin/menus/remove
> Example request:

```bash
curl -X POST "http://localhost/admin/menus/remove" 
```

```javascript
const url = new URL("http://localhost/admin/menus/remove");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/remove`


<!-- END_ab85cc3a7ac21476439a36e859a12321 -->

<!-- START_7a00d6c45032c03f4ae7d3beec00bb0e -->
## admin/menus
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus" 
```

```javascript
const url = new URL("http://localhost/admin/menus");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus`


<!-- END_7a00d6c45032c03f4ae7d3beec00bb0e -->

<!-- START_e1fe606f36d5e0b828b7aa722d401ef1 -->
## admin/menus/create
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/create" 
```

```javascript
const url = new URL("http://localhost/admin/menus/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/create`


<!-- END_e1fe606f36d5e0b828b7aa722d401ef1 -->

<!-- START_3ed1f4443877ce5c80a9f8ffdaa4e19c -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST "http://localhost/admin/menus" 
```

```javascript
const url = new URL("http://localhost/admin/menus");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus`


<!-- END_3ed1f4443877ce5c80a9f8ffdaa4e19c -->

<!-- START_00170fd0636c9c905a3a765cd98a787e -->
## admin/menus/{menu}
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/1" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{menu}`


<!-- END_00170fd0636c9c905a3a765cd98a787e -->

<!-- START_6d83290f45dc6c023c2b03628b6cb2e8 -->
## admin/menus/{menu}/edit
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{menu}/edit`


<!-- END_6d83290f45dc6c023c2b03628b6cb2e8 -->

<!-- START_3cf779916ca1bbca41a784a2688af997 -->
## admin/menus/{menu}
> Example request:

```bash
curl -X PUT "http://localhost/admin/menus/1" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/menus/{menu}`

`PATCH admin/menus/{menu}`


<!-- END_3cf779916ca1bbca41a784a2688af997 -->

<!-- START_72656acab42ef479668c40a1237c454c -->
## admin/menus/{menu}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/menus/1" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/menus/{menu}`


<!-- END_72656acab42ef479668c40a1237c454c -->

<!-- START_7028d468d28c67da726de2b6abbf0251 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/order" 
```

```javascript
const url = new URL("http://localhost/admin/roles/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/order`


<!-- END_7028d468d28c67da726de2b6abbf0251 -->

<!-- START_a842e0d52349702c38488c7bd5eef6de -->
## admin/roles/action
> Example request:

```bash
curl -X POST "http://localhost/admin/roles/action" 
```

```javascript
const url = new URL("http://localhost/admin/roles/action");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/action`


<!-- END_a842e0d52349702c38488c7bd5eef6de -->

<!-- START_11400608993f2d581f446024f1456f47 -->
## admin/roles/order
> Example request:

```bash
curl -X POST "http://localhost/admin/roles/order" 
```

```javascript
const url = new URL("http://localhost/admin/roles/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/order`


<!-- END_11400608993f2d581f446024f1456f47 -->

<!-- START_4fda3e50934366eb4620d3d26faa6686 -->
## admin/roles/{id}/restore
> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/1/restore" 
```

```javascript
const url = new URL("http://localhost/admin/roles/1/restore");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{id}/restore`


<!-- END_4fda3e50934366eb4620d3d26faa6686 -->

<!-- START_fd6ce61c53bbc29b087e7e6bbb5cffa5 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/relation" 
```

```javascript
const url = new URL("http://localhost/admin/roles/relation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/relation`


<!-- END_fd6ce61c53bbc29b087e7e6bbb5cffa5 -->

<!-- START_1b4990c9ddbcbb4462d6ad2ec61e6042 -->
## admin/roles/remove
> Example request:

```bash
curl -X POST "http://localhost/admin/roles/remove" 
```

```javascript
const url = new URL("http://localhost/admin/roles/remove");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/remove`


<!-- END_1b4990c9ddbcbb4462d6ad2ec61e6042 -->

<!-- START_879622c0ac94a4a0f4d364d46a42bc7e -->
## admin/roles
> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles" 
```

```javascript
const url = new URL("http://localhost/admin/roles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->

<!-- START_d29246d3a43660bb5210bf9aff91c85a -->
## admin/roles/create
> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/create" 
```

```javascript
const url = new URL("http://localhost/admin/roles/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/create`


<!-- END_d29246d3a43660bb5210bf9aff91c85a -->

<!-- START_9117e54780cf55c5071dfb91b33aaef6 -->
## admin/roles
> Example request:

```bash
curl -X POST "http://localhost/admin/roles" 
```

```javascript
const url = new URL("http://localhost/admin/roles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles`


<!-- END_9117e54780cf55c5071dfb91b33aaef6 -->

<!-- START_13b678fa4fec2b2a37ef8510c152dc44 -->
## admin/roles/{role}
> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/1" 
```

```javascript
const url = new URL("http://localhost/admin/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{role}`


<!-- END_13b678fa4fec2b2a37ef8510c152dc44 -->

<!-- START_beee0bc2c2bf5945907dc7735ae5abfc -->
## admin/roles/{role}/edit
> Example request:

```bash
curl -X GET -G "http://localhost/admin/roles/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/roles/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{role}/edit`


<!-- END_beee0bc2c2bf5945907dc7735ae5abfc -->

<!-- START_c7dcda79da31b26bc24750dc109d9724 -->
## admin/roles/{role}
> Example request:

```bash
curl -X PUT "http://localhost/admin/roles/1" 
```

```javascript
const url = new URL("http://localhost/admin/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/roles/{role}`

`PATCH admin/roles/{role}`


<!-- END_c7dcda79da31b26bc24750dc109d9724 -->

<!-- START_bf3def166f3885500f81b51b4c2bd978 -->
## admin/roles/{role}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/roles/1" 
```

```javascript
const url = new URL("http://localhost/admin/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/roles/{role}`


<!-- END_bf3def166f3885500f81b51b4c2bd978 -->

<!-- START_ac435d45ee5407d2fdccbca88267dcbd -->
## admin/menus/{menu}/builder
> Example request:

```bash
curl -X GET -G "http://localhost/admin/menus/1/builder" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/builder");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{menu}/builder`


<!-- END_ac435d45ee5407d2fdccbca88267dcbd -->

<!-- START_5856165be043e948232bc2f197b0793e -->
## admin/menus/{menu}/order
> Example request:

```bash
curl -X POST "http://localhost/admin/menus/1/order" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/order");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/{menu}/order`


<!-- END_5856165be043e948232bc2f197b0793e -->

<!-- START_4bfd90bde1365e61894a8540ac98a254 -->
## admin/menus/{menu}/item/{id}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/menus/1/item/1" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/item/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/menus/{menu}/item/{id}`


<!-- END_4bfd90bde1365e61894a8540ac98a254 -->

<!-- START_2be02546bd540da5155ba0e0dbf8c113 -->
## admin/menus/{menu}/item
> Example request:

```bash
curl -X POST "http://localhost/admin/menus/1/item" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/item");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/{menu}/item`


<!-- END_2be02546bd540da5155ba0e0dbf8c113 -->

<!-- START_d21b9fa978200b00c673801429975965 -->
## admin/menus/{menu}/item
> Example request:

```bash
curl -X PUT "http://localhost/admin/menus/1/item" 
```

```javascript
const url = new URL("http://localhost/admin/menus/1/item");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/menus/{menu}/item`


<!-- END_d21b9fa978200b00c673801429975965 -->

<!-- START_56195363f828f4391ab90cab97490d06 -->
## admin/settings
> Example request:

```bash
curl -X GET -G "http://localhost/admin/settings" 
```

```javascript
const url = new URL("http://localhost/admin/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings`


<!-- END_56195363f828f4391ab90cab97490d06 -->

<!-- START_dbe0c0df09e7e235b9b689cb9fcae29d -->
## admin/settings
> Example request:

```bash
curl -X POST "http://localhost/admin/settings" 
```

```javascript
const url = new URL("http://localhost/admin/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/settings`


<!-- END_dbe0c0df09e7e235b9b689cb9fcae29d -->

<!-- START_1982c6133076517feb5c960d3a668ad3 -->
## admin/settings
> Example request:

```bash
curl -X PUT "http://localhost/admin/settings" 
```

```javascript
const url = new URL("http://localhost/admin/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/settings`


<!-- END_1982c6133076517feb5c960d3a668ad3 -->

<!-- START_3e89dd8d1c7ef761119e2e4d1ffbf58d -->
## admin/settings/{id}
> Example request:

```bash
curl -X DELETE "http://localhost/admin/settings/1" 
```

```javascript
const url = new URL("http://localhost/admin/settings/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/settings/{id}`


<!-- END_3e89dd8d1c7ef761119e2e4d1ffbf58d -->

<!-- START_a92e1c75e6f1f7e5bfc7e8f9af7bfa8a -->
## admin/settings/{id}/move_up
> Example request:

```bash
curl -X GET -G "http://localhost/admin/settings/1/move_up" 
```

```javascript
const url = new URL("http://localhost/admin/settings/1/move_up");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings/{id}/move_up`


<!-- END_a92e1c75e6f1f7e5bfc7e8f9af7bfa8a -->

<!-- START_966203d204987e656790f588ae269fab -->
## admin/settings/{id}/move_down
> Example request:

```bash
curl -X GET -G "http://localhost/admin/settings/1/move_down" 
```

```javascript
const url = new URL("http://localhost/admin/settings/1/move_down");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings/{id}/move_down`


<!-- END_966203d204987e656790f588ae269fab -->

<!-- START_f2808f0fe68c171b71bbc620c53c9814 -->
## admin/settings/{id}/delete_value
> Example request:

```bash
curl -X PUT "http://localhost/admin/settings/1/delete_value" 
```

```javascript
const url = new URL("http://localhost/admin/settings/1/delete_value");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/settings/{id}/delete_value`


<!-- END_f2808f0fe68c171b71bbc620c53c9814 -->

<!-- START_8535e162b521fec6ac2854e0b45b0865 -->
## admin/media
> Example request:

```bash
curl -X GET -G "http://localhost/admin/media" 
```

```javascript
const url = new URL("http://localhost/admin/media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/media`


<!-- END_8535e162b521fec6ac2854e0b45b0865 -->

<!-- START_b9bfa3e54948328fe9e640713ffbb8ac -->
## admin/media/files
> Example request:

```bash
curl -X POST "http://localhost/admin/media/files" 
```

```javascript
const url = new URL("http://localhost/admin/media/files");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/files`


<!-- END_b9bfa3e54948328fe9e640713ffbb8ac -->

<!-- START_732712e0f9183c0a58b257957c42a646 -->
## admin/media/new_folder
> Example request:

```bash
curl -X POST "http://localhost/admin/media/new_folder" 
```

```javascript
const url = new URL("http://localhost/admin/media/new_folder");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/new_folder`


<!-- END_732712e0f9183c0a58b257957c42a646 -->

<!-- START_f0238327580fef0d49dc4d3f252e2296 -->
## admin/media/delete_file_folder
> Example request:

```bash
curl -X POST "http://localhost/admin/media/delete_file_folder" 
```

```javascript
const url = new URL("http://localhost/admin/media/delete_file_folder");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/delete_file_folder`


<!-- END_f0238327580fef0d49dc4d3f252e2296 -->

<!-- START_0a9c8a4cfde0499377a310965635a256 -->
## admin/media/move_file
> Example request:

```bash
curl -X POST "http://localhost/admin/media/move_file" 
```

```javascript
const url = new URL("http://localhost/admin/media/move_file");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/move_file`


<!-- END_0a9c8a4cfde0499377a310965635a256 -->

<!-- START_549f6358b83f1994b056587ba821e84c -->
## admin/media/rename_file
> Example request:

```bash
curl -X POST "http://localhost/admin/media/rename_file" 
```

```javascript
const url = new URL("http://localhost/admin/media/rename_file");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/rename_file`


<!-- END_549f6358b83f1994b056587ba821e84c -->

<!-- START_db32070506fe9f0d1e93032c76683518 -->
## admin/media/upload
> Example request:

```bash
curl -X POST "http://localhost/admin/media/upload" 
```

```javascript
const url = new URL("http://localhost/admin/media/upload");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/upload`


<!-- END_db32070506fe9f0d1e93032c76683518 -->

<!-- START_65f31e29983c7311498c341756abadbc -->
## admin/media/crop
> Example request:

```bash
curl -X POST "http://localhost/admin/media/crop" 
```

```javascript
const url = new URL("http://localhost/admin/media/crop");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/crop`


<!-- END_65f31e29983c7311498c341756abadbc -->

<!-- START_6d01b2e192e7acf2bd66a19221e71e8b -->
## admin/bread
> Example request:

```bash
curl -X GET -G "http://localhost/admin/bread" 
```

```javascript
const url = new URL("http://localhost/admin/bread");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread`


<!-- END_6d01b2e192e7acf2bd66a19221e71e8b -->

<!-- START_fe750dce50adc03bce6ca5c32c18c555 -->
## Create BREAD.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/bread/1/create" 
```

```javascript
const url = new URL("http://localhost/admin/bread/1/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/{table}/create`


<!-- END_fe750dce50adc03bce6ca5c32c18c555 -->

<!-- START_80678edaf586a13044e3fc4f2efcf842 -->
## Store BREAD.

> Example request:

```bash
curl -X POST "http://localhost/admin/bread" 
```

```javascript
const url = new URL("http://localhost/admin/bread");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/bread`


<!-- END_80678edaf586a13044e3fc4f2efcf842 -->

<!-- START_ee4aae2eec925b7340c9ccd28a961cdb -->
## Edit BREAD.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/bread/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/bread/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/{table}/edit`


<!-- END_ee4aae2eec925b7340c9ccd28a961cdb -->

<!-- START_95876b46e11e16b75bfd3ee0d5c1985d -->
## Update BREAD.

> Example request:

```bash
curl -X PUT "http://localhost/admin/bread/1" 
```

```javascript
const url = new URL("http://localhost/admin/bread/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/bread/{id}`


<!-- END_95876b46e11e16b75bfd3ee0d5c1985d -->

<!-- START_c2414cf3144da6f70492b6a4d7dd9a6d -->
## Delete BREAD.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/bread/1" 
```

```javascript
const url = new URL("http://localhost/admin/bread/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/bread/{id}`


<!-- END_c2414cf3144da6f70492b6a4d7dd9a6d -->

<!-- START_9a48d0467832bca5077b94b831a3824d -->
## Add Relationship.

> Example request:

```bash
curl -X POST "http://localhost/admin/bread/relationship" 
```

```javascript
const url = new URL("http://localhost/admin/bread/relationship");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/bread/relationship`


<!-- END_9a48d0467832bca5077b94b831a3824d -->

<!-- START_4120860e469ee34d870163fb232e4ef5 -->
## Delete Relationship.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/bread/delete_relationship/1" 
```

```javascript
const url = new URL("http://localhost/admin/bread/delete_relationship/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/delete_relationship/{id}`


<!-- END_4120860e469ee34d870163fb232e4ef5 -->

<!-- START_1ed560c8752fd0a83f683505d15c8174 -->
## admin/database
> Example request:

```bash
curl -X GET -G "http://localhost/admin/database" 
```

```javascript
const url = new URL("http://localhost/admin/database");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database`


<!-- END_1ed560c8752fd0a83f683505d15c8174 -->

<!-- START_1864a4a7a1cb48a8bd933ae196e239d4 -->
## Create database table.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/database/create" 
```

```javascript
const url = new URL("http://localhost/admin/database/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/create`


<!-- END_1864a4a7a1cb48a8bd933ae196e239d4 -->

<!-- START_b260cb184bed3d655fdff4d3e7fad87b -->
## Store new database table.

> Example request:

```bash
curl -X POST "http://localhost/admin/database" 
```

```javascript
const url = new URL("http://localhost/admin/database");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/database`


<!-- END_b260cb184bed3d655fdff4d3e7fad87b -->

<!-- START_9c8aa3a06542eda4f36959ec8136a6a4 -->
## Show table.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/database/1" 
```

```javascript
const url = new URL("http://localhost/admin/database/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/{database}`


<!-- END_9c8aa3a06542eda4f36959ec8136a6a4 -->

<!-- START_758e5f292cb134d0fc806839e3802bd8 -->
## Edit database table.

> Example request:

```bash
curl -X GET -G "http://localhost/admin/database/1/edit" 
```

```javascript
const url = new URL("http://localhost/admin/database/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/{database}/edit`


<!-- END_758e5f292cb134d0fc806839e3802bd8 -->

<!-- START_72b9abf607fd326a9041578c4d3a2eaa -->
## Update database table.

> Example request:

```bash
curl -X PUT "http://localhost/admin/database/1" 
```

```javascript
const url = new URL("http://localhost/admin/database/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/database/{database}`

`PATCH admin/database/{database}`


<!-- END_72b9abf607fd326a9041578c4d3a2eaa -->

<!-- START_32e253d3d95d0cd173cbe86372c32d7d -->
## Destroy table.

> Example request:

```bash
curl -X DELETE "http://localhost/admin/database/1" 
```

```javascript
const url = new URL("http://localhost/admin/database/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/database/{database}`


<!-- END_32e253d3d95d0cd173cbe86372c32d7d -->

<!-- START_5eb3e5d8b71d7f55cdba8200e55279ff -->
## admin/compass
> Example request:

```bash
curl -X GET -G "http://localhost/admin/compass" 
```

```javascript
const url = new URL("http://localhost/admin/compass");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/compass`


<!-- END_5eb3e5d8b71d7f55cdba8200e55279ff -->

<!-- START_7c23f251af6f7d8aaa6a897cd2e34067 -->
## admin/compass
> Example request:

```bash
curl -X POST "http://localhost/admin/compass" 
```

```javascript
const url = new URL("http://localhost/admin/compass");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/compass`


<!-- END_7c23f251af6f7d8aaa6a897cd2e34067 -->

<!-- START_5f55435a12cc0885d93f73a26bae6d37 -->
## admin/voyager-assets
> Example request:

```bash
curl -X GET -G "http://localhost/admin/voyager-assets" 
```

```javascript
const url = new URL("http://localhost/admin/voyager-assets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/voyager-assets`


<!-- END_5f55435a12cc0885d93f73a26bae6d37 -->

<!-- START_1382b94c7e1c2342435b3c868ac2d33e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/menus" 
```

```javascript
const url = new URL("http://localhost/menus");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET menus`


<!-- END_1382b94c7e1c2342435b3c868ac2d33e -->

<!-- START_09f6cf251f1e22b0adb0cc85e2871a45 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/menu/add" 
```

```javascript
const url = new URL("http://localhost/menu/add");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST menu/add`


<!-- END_09f6cf251f1e22b0adb0cc85e2871a45 -->

<!-- START_9b04e199cc96e5200d0a9afd058a392c -->
## menu/submenu
> Example request:

```bash
curl -X GET -G "http://localhost/menu/submenu" 
```

```javascript
const url = new URL("http://localhost/menu/submenu");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET menu/submenu`


<!-- END_9b04e199cc96e5200d0a9afd058a392c -->

<!-- START_2a45a3759ebe20fbdb2c06d29ac932b2 -->
## menu/additem
> Example request:

```bash
curl -X POST "http://localhost/menu/additem" 
```

```javascript
const url = new URL("http://localhost/menu/additem");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST menu/additem`


<!-- END_2a45a3759ebe20fbdb2c06d29ac932b2 -->

<!-- START_33855bfe0598790739f3c2c42e510524 -->
## listmenu
> Example request:

```bash
curl -X GET -G "http://localhost/listmenu" 
```

```javascript
const url = new URL("http://localhost/listmenu");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET listmenu`


<!-- END_33855bfe0598790739f3c2c42e510524 -->

<!-- START_50eb92c9f4489a65e832db56dfbd77b3 -->
## create/menu
> Example request:

```bash
curl -X GET -G "http://localhost/create/menu" 
```

```javascript
const url = new URL("http://localhost/create/menu");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET create/menu`


<!-- END_50eb92c9f4489a65e832db56dfbd77b3 -->

<!-- START_618f150a30c502525d19d6e62a6245e2 -->
## add/menu
> Example request:

```bash
curl -X POST "http://localhost/add/menu" 
```

```javascript
const url = new URL("http://localhost/add/menu");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST add/menu`


<!-- END_618f150a30c502525d19d6e62a6245e2 -->

<!-- START_27461c3b1d5253a8e92be60ba7fa5b9e -->
## de
> Example request:

```bash
curl -X GET -G "http://localhost/de" 
```

```javascript
const url = new URL("http://localhost/de");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET de`


<!-- END_27461c3b1d5253a8e92be60ba7fa5b9e -->

<!-- START_146b144bd8674b2162af10d95be00c05 -->
## frontend
> Example request:

```bash
curl -X GET -G "http://localhost/frontend" 
```

```javascript
const url = new URL("http://localhost/frontend");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET frontend`


<!-- END_146b144bd8674b2162af10d95be00c05 -->

<!-- START_a7cc4ae3431aef24bb0b678054482266 -->
## action
> Example request:

```bash
curl -X POST "http://localhost/action" 
```

```javascript
const url = new URL("http://localhost/action");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST action`


<!-- END_a7cc4ae3431aef24bb0b678054482266 -->


