# Organization


## List Organization
Display a listing of the Organization.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/organization" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/organization"
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
    "data": [
        {
            "id": 1,
            "owner_id": 3,
            "org_name": "Công ty Khổng-Trưng",
            "phones": "84-121-405-0404",
            "description": null,
            "tax_id": "35785",
            "address": "5 Phố Văn, Xã 08, Huyện Tào\nĐồng Tháp",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 2,
            "owner_id": 7,
            "org_name": "Công ty Chung Inc",
            "phones": "+84-54-451-1569",
            "description": null,
            "tax_id": "10911",
            "address": "1182, Thôn Nghiệp, Phường Sử, Huyện Bửu Cơ\nĐắk Lắk",
            "is_verify": 0,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 3,
            "owner_id": 5,
            "org_name": "Công ty Vi Inc",
            "phones": "+84-165-015-8016",
            "description": null,
            "tax_id": "41665",
            "address": "5509 Phố Lộc, Xã 40, Quận 6\nBắc Kạn",
            "is_verify": 0,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 4,
            "owner_id": 1,
            "org_name": "Công ty Phan-Mạc",
            "phones": "(073) 305 4679",
            "description": null,
            "tax_id": "34957",
            "address": "593, Ấp 4, Xã 12, Huyện Dân\nTây Ninh",
            "is_verify": 0,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 5,
            "owner_id": 1,
            "org_name": "Công ty Giang and Sons",
            "phones": "0651 272 8581",
            "description": null,
            "tax_id": "86296",
            "address": "964 Phố Thảo, Xã Quách, Quận Tuyền Võ\nĐà Nẵng",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 6,
            "owner_id": 2,
            "org_name": "Công ty Lại-Khu",
            "phones": "(0280)666-4449",
            "description": null,
            "tax_id": "93061",
            "address": "7164 Phố Lê, Ấp Thạch Thạc, Quận Hiếu Loan\nĐà Nẵng",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 7,
            "owner_id": 4,
            "org_name": "Công ty Phí Ltd",
            "phones": "(0500)428-4230",
            "description": null,
            "tax_id": "77995",
            "address": "715 Phố Diệu, Thôn Chử Vĩ, Quận Lam Bảo\nThái Bình",
            "is_verify": 0,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 8,
            "owner_id": 9,
            "org_name": "Công ty Ngô PLC",
            "phones": "(84)(77)464-6086",
            "description": null,
            "tax_id": "43945",
            "address": "2438 Phố Đái Nga Mẫn, Xã Hòa, Quận Mạch Mi Vượng\nBà Rịa - Vũng Tàu",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 9,
            "owner_id": 9,
            "org_name": "Công ty Hà, Hàng and An",
            "phones": "+84-199-594-3427",
            "description": null,
            "tax_id": "80832",
            "address": "48 Phố Triệu Đài Phương, Xã Nguyên Thủy, Huyện 87\nHồ Chí Minh",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        },
        {
            "id": 10,
            "owner_id": 1,
            "org_name": "Công ty Đậu, Hùng and Giáp",
            "phones": "070 838 3215",
            "description": null,
            "tax_id": "77824",
            "address": "903 Phố Đàm Quế Quyên, Xã Chu, Huyện Khoa Khâu\nĐà Nẵng",
            "is_verify": 1,
            "created_at": "2020-12-02 12:45:10",
            "updated_at": "2020-12-02 12:45:10"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v1\/organization?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/organization?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/organization",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 10
}
```
<div id="execution-results-GETapi-v1-organization" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organization"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organization"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organization"></code></pre>
</div>
<form id="form-GETapi-v1-organization" data-method="GET" data-path="api/v1/organization" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organization', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organization" onclick="tryItOut('GETapi-v1-organization');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organization" onclick="cancelTryOut('GETapi-v1-organization');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organization" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organization</code></b>
</p>
</form>


## Find an Organization
Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/organization/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"voluptatibus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/organization/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "voluptatibus"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Organization] nihil",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 222,
    "trace": [
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 198,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\app\\Exceptions\\Handler.php",
            "line": 53,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 132,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 683,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 658,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 613,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 170,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 130,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 171,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 105,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 145,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 590,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\symfony\\console\\Application.php",
            "line": 1009,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\symfony\\console\\Application.php",
            "line": 273,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\symfony\\console\\Application.php",
            "line": 149,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 131,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "H:\\My Drive\\VKU_2020-2021\\SEMETER_1\\Major_Project\\code\\api\\VNJobs\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-organization--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organization--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organization--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organization--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organization--id-"></code></pre>
</div>
<form id="form-GETapi-v1-organization--id-" data-method="GET" data-path="api/v1/organization/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organization--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organization--id-" onclick="tryItOut('GETapi-v1-organization--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organization--id-" onclick="cancelTryOut('GETapi-v1-organization--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organization--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organization/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-organization--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>$id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-organization--id-" data-component="body" required  hidden>
<br>
</p>

</form>



