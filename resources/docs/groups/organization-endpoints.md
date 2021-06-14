# Organization endpoints


## List Organization
Display a listing of the Organization.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
"current_page": 1,
data: [{
  "id": 1,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/organizations",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 2
}
```
<div id="execution-results-GETapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations"></code></pre>
</div>
<form id="form-GETapi-v1-organizations" data-method="GET" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations" onclick="tryItOut('GETapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations" onclick="cancelTryOut('GETapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations</code></b>
</p>
</form>


## Find an Organization
Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/organizations/find-by-id/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"repellat"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations/find-by-id/quas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "repellat"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-GETapi-v1-organizations-find-by-id--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations-find-by-id--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations-find-by-id--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations-find-by-id--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations-find-by-id--id-"></code></pre>
</div>
<form id="form-GETapi-v1-organizations-find-by-id--id-" data-method="GET" data-path="api/v1/organizations/find-by-id/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations-find-by-id--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations-find-by-id--id-" onclick="tryItOut('GETapi-v1-organizations-find-by-id--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations-find-by-id--id-" onclick="cancelTryOut('GETapi-v1-organizations-find-by-id--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations-find-by-id--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/find-by-id/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-organizations-find-by-id--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-organizations-find-by-id--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form>


## Create Organization
Store a newly created resource in Database.




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":16,"org_name":"tempore","phones":"quaerat","description":"blanditiis","tax_id":15,"address":"quia","logo_path":"vel","cover_path":"repellendus"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 16,
    "org_name": "tempore",
    "phones": "quaerat",
    "description": "blanditiis",
    "tax_id": 15,
    "address": "quia",
    "logo_path": "vel",
    "cover_path": "repellendus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-POSTapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-organizations"></code></pre>
</div>
<form id="form-POSTapi-v1-organizations" data-method="POST" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-organizations" onclick="tryItOut('POSTapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-organizations" onclick="cancelTryOut('POSTapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/organizations</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>

</form>


## Update an Organization
Update the specified resource in Database.




> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/organizations/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":20,"org_name":"excepturi","phones":"possimus","description":"voluptas","tax_id":4,"address":"perspiciatis","logo_path":"quis","cover_path":"sit"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations/perferendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 20,
    "org_name": "excepturi",
    "phones": "possimus",
    "description": "voluptas",
    "tax_id": 4,
    "address": "perspiciatis",
    "logo_path": "quis",
    "cover_path": "sit"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-organizations--id-" data-method="PUT" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-organizations--id-" onclick="tryItOut('PUTapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-organizations--id-" onclick="cancelTryOut('PUTapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove an Organization
Remove the Organization from Database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/organizations/magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"impedit"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations/magnam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "impedit"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-organizations--id-" data-method="DELETE" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-organizations--id-" onclick="tryItOut('DELETEapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-organizations--id-" onclick="cancelTryOut('DELETEapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form>


## Show all members of Organization
Show all membership of Organization with each role.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/organizations/membership?org_id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations/membership"
);

let params = {
    "org_id": "16",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 3,
    "owner_id": 1,
    "org_name": "Công ty Khoa PLC",
    "phones": "053-385-3690",
    "description": null,
    "tax_id": "63021",
    "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
    "logo_path": "public\/docs\/logo.png",
    "cover_path": "public\/docs\/logo.png",
    "is_verify": 0,
    "created_at": "2021-06-12 05:55:18",
    "updated_at": "2021-06-12 05:55:18",
    "users": [
        {
            "id": 3,
            "first_name": "Cô. Phạm Thái Oanh",
            "last_name": "Phạm Toàn",
            "dob": "1970-01-01",
            "phone": "+84-74-764-7269",
            "email": "doan.lam@example.com",
            "email_verified_at": "2021-06-12 05:55:18",
            "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
            "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
            "avatar_path": "public\/docs\/user.png",
            "social_linkedin": null,
            "social_facebook": null,
            "created_at": "2021-06-12 05:55:18",
            "updated_at": "2021-06-12 05:55:18",
            "pivot": {
                "org_id": 3,
                "user_id": 3
            },
            "roles": [
                {
                    "id": 3,
                    "role_name": "ContentWriter",
                    "created_at": null,
                    "updated_at": null,
                    "pivot": {
                        "user_id": 3,
                        "role_id": 3,
                        "org_id": 3
                    }
                }
            ]
        }
    ]
}
```
<div id="execution-results-GETapi-v1-organizations-membership" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations-membership"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations-membership"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations-membership" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations-membership"></code></pre>
</div>
<form id="form-GETapi-v1-organizations-membership" data-method="GET" data-path="api/v1/organizations/membership" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations-membership', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations-membership" onclick="tryItOut('GETapi-v1-organizations-membership');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations-membership" onclick="cancelTryOut('GETapi-v1-organizations-membership');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations-membership" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/membership</code></b>
</p>
<p>
<label id="auth-GETapi-v1-organizations-membership" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-organizations-membership" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="GETapi-v1-organizations-membership" data-component="query" required  hidden>
<br>
id of Organization.</p>
</form>


## Add member to Organization
Add member to Organization with each role.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/organizations/membership" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":6,"user_id":8,"role_id":19}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/organizations/membership"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 6,
    "user_id": 8,
    "role_id": 19
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
  "message": "Add member to your organization successfully",
  "org": {
     "id": 3,
     "owner_id": 1,
     "org_name": "Công ty Khoa PLC",
     "phones": "053-385-3690",
     "description": null,
     "tax_id": "63021",
     "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
     "logo_path": "public/docs/logo.png",
     "cover_path": "public/docs/logo.png",
     "is_verify": 0,
     "created_at": "2021-06-12 05:55:18",
     "updated_at": "2021-06-12 05:55:18",
     "users": [
     {
         "id": 3,
         "first_name": "Cô. Phạm Thái Oanh",
         "last_name": "Phạm Toàn",
         "dob": "1970-01-01",
         "phone": "+84-74-764-7269",
         "email": "doan.lam@example.com",
         "email_verified_at": "2021-06-12 05:55:18",
         "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
         "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
         "avatar_path": "public/docs/user.png",
         "social_linkedin": null,
         "social_facebook": null,
         "created_at": "2021-06-12 05:55:18",
         "updated_at": "2021-06-12 05:55:18",
         "pivot": {
             "org_id": 3,
             "user_id": 3,
             "role_id": 3
         },
         "roles": [
             {
                 "id": 3,
                 "role_name": "ContentWriter",
                 "created_at": null,
                 "updated_at": null,
                 "pivot": {
                     "user_id": 3,
                     "role_id": 3,
                     "org_id": 3
                 }
             }
         ]
     },
}
```
<div id="execution-results-POSTapi-v1-organizations-membership" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-organizations-membership"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-organizations-membership"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-organizations-membership" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-organizations-membership"></code></pre>
</div>
<form id="form-POSTapi-v1-organizations-membership" data-method="POST" data-path="api/v1/organizations/membership" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-organizations-membership', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-organizations-membership" onclick="tryItOut('POSTapi-v1-organizations-membership');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-organizations-membership" onclick="cancelTryOut('POSTapi-v1-organizations-membership');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-organizations-membership" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/organizations/membership</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-organizations-membership" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-organizations-membership" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>

</form>



