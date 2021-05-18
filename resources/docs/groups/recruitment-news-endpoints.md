# Recruitment News endpoints

APIs for Recruitment News.

## List Recruitment News
Display a listing of the recruitment news.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news"
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
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'address': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  }
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/recruitment-news",
  "per_page": 10,
  "prev_page_url": null,
  "to": 2,
  "total": 2
}
```
<div id="execution-results-GETapi-v1-recruitment-news" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news" data-method="GET" data-path="api/v1/recruitment-news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news" onclick="tryItOut('GETapi-v1-recruitment-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news" onclick="cancelTryOut('GETapi-v1-recruitment-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news</code></b>
</p>
</form>


## api/v1/recruitment-news-by-major




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news-by-major" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news-by-major"
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
[
    {
        "id": 1,
        "major_name": "IT",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 3,
                "org_id": 4,
                "author_id": 4,
                "major_id": 1,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Id cupiditate sit incidunt quia. In dicta unde sequi et et. Aut dolor atque deleniti ut quia labore nulla illo.",
                "address": "1011 Phố Cam Thiện Phương, Xã 68, Quận Tiếp Ty Trí\nBình Thuận",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 4,
                    "owner_id": 2,
                    "org_name": "Công ty Bá and Sons",
                    "phones": "(099)892-6369",
                    "description": null,
                    "tax_id": "58011",
                    "address": "95, Ấp Thịnh An Khương, Xã 52, Quận Ngọc Kim\nBà Rịa - Vũng Tàu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 4,
                "org_id": 8,
                "author_id": 1,
                "major_id": 1,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Molestiae architecto reiciendis omnis recusandae vero ipsam aliquam beatae. Debitis ut et hic ratione animi et ex incidunt. Recusandae et tempore nemo aut laboriosam ut debitis.",
                "address": "59 Phố Xuân, Phường Cơ, Huyện Trương\nHà Nội",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 5,
                "org_id": 4,
                "author_id": 5,
                "major_id": 1,
                "title": "Remote Java",
                "content": "Cần tuyển Neque qui quae magni quidem culpa voluptate. Consequatur corrupti eligendi minus. Quae harum tenetur blanditiis quo.",
                "address": "2776 Phố Ân Bửu Đào, Xã Thư Tân, Quận Sâm\nBình Phước",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 4,
                    "owner_id": 2,
                    "org_name": "Công ty Bá and Sons",
                    "phones": "(099)892-6369",
                    "description": null,
                    "tax_id": "58011",
                    "address": "95, Ấp Thịnh An Khương, Xã 52, Quận Ngọc Kim\nBà Rịa - Vũng Tàu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 6,
                "org_id": 2,
                "author_id": 4,
                "major_id": 1,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Minus in dolorum enim sapiente incidunt voluptatem eius molestiae. Neque ut provident molestias enim dolorem quae. Assumenda et est tempora rem non autem ut. Accusantium qui ea dolorem eligendi.",
                "address": "6729 Phố Bùi Quân Diệp, Ấp Bùi Thuận, Quận Thy Điệp\nHồ Chí Minh",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 7,
                "org_id": 5,
                "author_id": 8,
                "major_id": 1,
                "title": "Part-time .Net",
                "content": "Cần tuyển Blanditiis quam non suscipit consequatur cumque. Odio rerum sed amet magnam dolor libero animi. Itaque voluptate ut voluptatem numquam. Fuga dolorem perspiciatis optio et quo vitae et.",
                "address": "350 Phố Duyên, Phường Quyền, Quận Cát Chi\nHồ Chí Minh",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Cát-Cù",
                    "phones": "059-475-0363",
                    "description": null,
                    "tax_id": "8125",
                    "address": "2475 Phố Đoàn, Phường 4, Quận Vừ Thi Khai\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 17,
                "org_id": 6,
                "author_id": 9,
                "major_id": 1,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Voluptates molestiae adipisci aliquid. Pariatur perspiciatis sit sint aut beatae omnis. Molestiae reprehenderit omnis pariatur rem.",
                "address": "9, Thôn Du Hiền, Thôn Giả Thủy, Quận Bùi Nga Lý\nQuảng Ngãi",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 6,
                    "owner_id": 3,
                    "org_name": "Công ty La PLC",
                    "phones": "84-75-563-7508",
                    "description": null,
                    "tax_id": "54749",
                    "address": "1329 Phố Vừ, Thôn Khuất Tiển, Huyện Khê Sĩ\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 18,
                "org_id": 6,
                "author_id": 5,
                "major_id": 1,
                "title": "Part-time Java",
                "content": "Cần tuyển Ut magni quam eum quae expedita praesentium voluptatem. Atque sapiente laboriosam iste error est eum eius. Explicabo earum facilis adipisci.",
                "address": "6489, Thôn Bửu Thơ, Xã 3, Huyện Thơ Ngôn\nHà Giang",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 6,
                    "owner_id": 3,
                    "org_name": "Công ty La PLC",
                    "phones": "84-75-563-7508",
                    "description": null,
                    "tax_id": "54749",
                    "address": "1329 Phố Vừ, Thôn Khuất Tiển, Huyện Khê Sĩ\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 22,
                "org_id": 3,
                "author_id": 8,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển A reiciendis ut ut facilis mollitia quo dolores et. Vel amet omnis magnam rerum.",
                "address": "6700 Phố Lỳ, Phường Bạc, Quận Phùng Trác Dao\nHà Nội",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 3,
                    "owner_id": 9,
                    "org_name": "Công ty Phó-Cái",
                    "phones": "(0510) 703 9459",
                    "description": null,
                    "tax_id": "743410",
                    "address": "793, Thôn Hy Bình, Thôn Lã Nhiên, Quận Huỳnh Trân Kiên\nLào Cai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 23,
                "org_id": 9,
                "author_id": 1,
                "major_id": 1,
                "title": "Remote Ruby",
                "content": "Cần tuyển Ipsum et doloremque quaerat et animi aut. Quis ab vel eos.",
                "address": "7340 Phố Cấn Đoàn Trinh, Xã Tăng Ngôn Nguyệt, Huyện Chiêm Đăng\nĐắk Lắk",
                "city": "Hồ Chí Minh",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 9,
                    "owner_id": 3,
                    "org_name": "Công ty Lều-Hàng",
                    "phones": "84-127-072-3782",
                    "description": null,
                    "tax_id": "42926",
                    "address": "7, Ấp Đường Hậu, Xã Chung, Huyện Thạch\nCao Bằng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 26,
                "org_id": 2,
                "author_id": 6,
                "major_id": 1,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Asperiores harum reiciendis esse excepturi nam sapiente. Dolores fuga qui sint recusandae quo. Veniam quis facilis maxime ipsa consequatur. Perferendis omnis aut sapiente non.",
                "address": "31 Phố Thái Linh Hội, Phường Phong Đan, Huyện Hy Hòa\nHồ Chí Minh",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            }
        ]
    },
    {
        "id": 2,
        "major_name": "BA",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 1,
                "org_id": 1,
                "author_id": 8,
                "major_id": 2,
                "title": "Part-time Java",
                "content": "Cần tuyển Aut ea nihil amet est. Impedit totam qui ipsam veniam. Excepturi ab deserunt et earum nisi magnam laboriosam. Similique excepturi et voluptas magni. Nulla sint quidem eum id earum.",
                "address": "571 Phố Bồ Ánh Tú, Phường 6, Huyện Phượng Trung\nTây Ninh",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 1,
                    "owner_id": 10,
                    "org_name": "Công ty Cái, Phạm and Tăng",
                    "phones": "(84)(164)829-1230",
                    "description": null,
                    "tax_id": "77536",
                    "address": "8227 Phố Đặng Khanh Hiệp, Phường Lâm Giả, Huyện Bửu\nQuảng Ninh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 10,
                "org_id": 4,
                "author_id": 4,
                "major_id": 2,
                "title": "Remote Ruby",
                "content": "Cần tuyển Corporis esse fuga et neque. Voluptatibus omnis quaerat qui cumque sint enim quasi. Dolore dolorem est numquam animi. Fuga sed ipsam suscipit et est quisquam ut.",
                "address": "246, Thôn Luận Tôn, Xã Thanh, Quận Vân\nBến Tre",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 4,
                    "owner_id": 2,
                    "org_name": "Công ty Bá and Sons",
                    "phones": "(099)892-6369",
                    "description": null,
                    "tax_id": "58011",
                    "address": "95, Ấp Thịnh An Khương, Xã 52, Quận Ngọc Kim\nBà Rịa - Vũng Tàu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 11,
                "org_id": 1,
                "author_id": 1,
                "major_id": 2,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Rerum accusantium aut quas sint eos. Rem aut rem vero dolores nostrum. Praesentium quis recusandae in.",
                "address": "961 Phố Hồng Ty Ngọc, Phường Đàn Giao, Quận 30\nHồ Chí Minh",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 1,
                    "owner_id": 10,
                    "org_name": "Công ty Cái, Phạm and Tăng",
                    "phones": "(84)(164)829-1230",
                    "description": null,
                    "tax_id": "77536",
                    "address": "8227 Phố Đặng Khanh Hiệp, Phường Lâm Giả, Huyện Bửu\nQuảng Ninh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 12,
                "org_id": 2,
                "author_id": 5,
                "major_id": 2,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Dolor commodi eos laborum alias sit. Nobis non cupiditate sed quos illo. Deserunt veniam fugit fugit provident excepturi. Numquam sit deserunt est qui eligendi. Accusantium molestiae et ex iste.",
                "address": "51 Phố Bàng Ngọc Ngôn, Phường 59, Quận Khưu\nHà Nội",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 13,
                "org_id": 9,
                "author_id": 10,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Quisquam sunt aut cum nulla quia provident error. Tempore sed consequatur facere occaecati. Nam est perspiciatis ad earum eum.",
                "address": "90 Phố Chiêu, Xã 31, Huyện 6\nHải Phòng",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 9,
                    "owner_id": 3,
                    "org_name": "Công ty Lều-Hàng",
                    "phones": "84-127-072-3782",
                    "description": null,
                    "tax_id": "42926",
                    "address": "7, Ấp Đường Hậu, Xã Chung, Huyện Thạch\nCao Bằng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 16,
                "org_id": 2,
                "author_id": 6,
                "major_id": 2,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Ea cum aut unde possimus. Et maxime quis ea adipisci dolores veniam et. Sed dicta magnam totam voluptas nobis et sit. Nobis perspiciatis quibusdam iure sequi quis qui.",
                "address": "16 Phố Lý Chiến Bổng, Xã 94, Quận Tăng Thương\nGia Lai",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 20,
                "org_id": 6,
                "author_id": 1,
                "major_id": 2,
                "title": "Part-time Java",
                "content": "Cần tuyển Consequatur sit numquam dignissimos animi vel non nam magni. Non ex neque hic vero eaque autem. Eaque explicabo quis recusandae eius repellendus quo nostrum.",
                "address": "606 Phố Kim Tùng Kiều, Phường Trâm Quyên, Huyện 8\nPhú Yên",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 6,
                    "owner_id": 3,
                    "org_name": "Công ty La PLC",
                    "phones": "84-75-563-7508",
                    "description": null,
                    "tax_id": "54749",
                    "address": "1329 Phố Vừ, Thôn Khuất Tiển, Huyện Khê Sĩ\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 21,
                "org_id": 4,
                "author_id": 6,
                "major_id": 2,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Adipisci repellendus at magni. Maxime in et voluptatem quas expedita. Rerum corporis consequatur aliquam voluptatum quod. Debitis accusamus omnis ipsum earum magnam nobis vel.",
                "address": "7, Thôn 4, Xã 7, Huyện Cao Dương\nThừa Thiên Huế",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 4,
                    "owner_id": 2,
                    "org_name": "Công ty Bá and Sons",
                    "phones": "(099)892-6369",
                    "description": null,
                    "tax_id": "58011",
                    "address": "95, Ấp Thịnh An Khương, Xã 52, Quận Ngọc Kim\nBà Rịa - Vũng Tàu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 24,
                "org_id": 2,
                "author_id": 4,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Nostrum sequi maiores cupiditate autem laudantium et quo provident. Vero aut aut quo enim. Magni necessitatibus cumque illum labore est quis suscipit est. Tenetur optio quia consequatur amet.",
                "address": "8868, Thôn Khưu Phụng Nhân, Phường Hà, Huyện Mẫn Thiên\nBình Thuận",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 27,
                "org_id": 1,
                "author_id": 1,
                "major_id": 2,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Ipsa harum hic maxime quibusdam quisquam architecto. Facere aut tenetur unde velit praesentium qui officia.",
                "address": "276 Phố Khoa Viên Phi, Ấp Mai Hỷ, Quận 75\nHà Tĩnh",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 1,
                    "owner_id": 10,
                    "org_name": "Công ty Cái, Phạm and Tăng",
                    "phones": "(84)(164)829-1230",
                    "description": null,
                    "tax_id": "77536",
                    "address": "8227 Phố Đặng Khanh Hiệp, Phường Lâm Giả, Huyện Bửu\nQuảng Ninh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            }
        ]
    },
    {
        "id": 3,
        "major_name": "BrSE",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 8,
                "org_id": 2,
                "author_id": 7,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Nisi quis omnis nulla explicabo. Cupiditate sit velit qui consequatur omnis. Debitis repellat eos sunt dolor fugiat ut.",
                "address": "49, Thôn 3, Phường Đan Nhượng Cương, Quận Nghị Chưởng Dân\nThanh Hóa",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Đinh, Khâu and Quản",
                    "phones": "039-237-2533",
                    "description": null,
                    "tax_id": "56592",
                    "address": "4, Ấp Tạ Thuận, Phường Hiền Hán, Huyện 7\nSơn La",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 9,
                "org_id": 1,
                "author_id": 10,
                "major_id": 3,
                "title": "Part-time .Net",
                "content": "Cần tuyển Tempore id ea et commodi ut in. Delectus et libero quibusdam. Cum odit voluptas sunt fuga aliquam impedit velit.",
                "address": "9, Thôn Hy Hà, Xã Tống, Quận Vĩnh\nLào Cai",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 1,
                    "owner_id": 10,
                    "org_name": "Công ty Cái, Phạm and Tăng",
                    "phones": "(84)(164)829-1230",
                    "description": null,
                    "tax_id": "77536",
                    "address": "8227 Phố Đặng Khanh Hiệp, Phường Lâm Giả, Huyện Bửu\nQuảng Ninh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 19,
                "org_id": 10,
                "author_id": 6,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Dolorem illo ut praesentium sunt enim sit sed atque. Occaecati occaecati quisquam quidem sint maiores amet ut ipsam. Cupiditate inventore autem rerum iste officia.",
                "address": "6, Thôn Kiều, Xã Lực Sinh, Quận Hậu Hàn\nGia Lai",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 10,
                    "owner_id": 2,
                    "org_name": "Công ty Thái-Đái",
                    "phones": "(0166)513-8558",
                    "description": null,
                    "tax_id": "67765",
                    "address": "894, Thôn Khánh Văn, Phường 0, Huyện Giác Lô\nBạc Liêu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 28,
                "org_id": 5,
                "author_id": 2,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Et consequatur aut dolorum neque. Ut odio praesentium ad autem et qui.",
                "address": "6 Phố Lạc Anh Ân, Ấp Diêm Hành, Quận 23\nĐồng Nai",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Cát-Cù",
                    "phones": "059-475-0363",
                    "description": null,
                    "tax_id": "8125",
                    "address": "2475 Phố Đoàn, Phường 4, Quận Vừ Thi Khai\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 30,
                "org_id": 6,
                "author_id": 4,
                "major_id": 3,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Aut rem illum repudiandae vitae aspernatur laborum. Nemo iure quo rerum consequatur tempore earum. Officiis aliquam aspernatur et rerum omnis aliquid. Deserunt aperiam voluptates et magni id unde.",
                "address": "277, Thôn Phi, Phường Phượng Ngôn, Quận Châu Liên Thư\nKon Tum",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 6,
                    "owner_id": 3,
                    "org_name": "Công ty La PLC",
                    "phones": "84-75-563-7508",
                    "description": null,
                    "tax_id": "54749",
                    "address": "1329 Phố Vừ, Thôn Khuất Tiển, Huyện Khê Sĩ\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 31,
                "org_id": 8,
                "author_id": 10,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Beatae id et itaque rerum tenetur veniam ut. Enim ut quis aut nemo aut.",
                "address": "534 Phố Đoàn Quỳnh Quyết, Ấp Hào Tài, Huyện Khải Nam\nLong An",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 36,
                "org_id": 3,
                "author_id": 5,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Dicta voluptatum enim et quos odit quasi. Repudiandae reiciendis rerum ducimus dolores explicabo corporis. Facilis voluptate illum quasi modi magnam qui.",
                "address": "1801, Ấp Trình Ngọc, Xã Mai, Huyện Bảo Ý\nBình Thuận",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 3,
                    "owner_id": 9,
                    "org_name": "Công ty Phó-Cái",
                    "phones": "(0510) 703 9459",
                    "description": null,
                    "tax_id": "743410",
                    "address": "793, Thôn Hy Bình, Thôn Lã Nhiên, Quận Huỳnh Trân Kiên\nLào Cai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 39,
                "org_id": 8,
                "author_id": 9,
                "major_id": 3,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Tempore et ut voluptatum quasi atque sed. Mollitia dolorem voluptates et. Voluptatem tenetur dolorem quia voluptas earum. Et enim et doloribus itaque quidem deleniti et culpa.",
                "address": "7023, Thôn Lợi Ty, Phường Yên Quế, Huyện 68\nLào Cai",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            }
        ]
    },
    {
        "id": 4,
        "major_name": "Sales",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 2,
                "org_id": 1,
                "author_id": 3,
                "major_id": 4,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Saepe voluptatem quo omnis in animi illum. Iusto provident placeat error. Cumque et commodi omnis eum. Nulla possimus veniam provident nisi voluptatem est voluptatem.",
                "address": "74 Phố Thuần, Phường 3, Huyện Phúc Nhàn\nHà Nam",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 1,
                    "owner_id": 10,
                    "org_name": "Công ty Cái, Phạm and Tăng",
                    "phones": "(84)(164)829-1230",
                    "description": null,
                    "tax_id": "77536",
                    "address": "8227 Phố Đặng Khanh Hiệp, Phường Lâm Giả, Huyện Bửu\nQuảng Ninh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 14,
                "org_id": 10,
                "author_id": 6,
                "major_id": 4,
                "title": "Part-time Java",
                "content": "Cần tuyển Est fuga rerum quo facere itaque assumenda nihil. Laboriosam omnis dolore omnis laboriosam. Sed architecto sint nobis est eveniet et dignissimos.",
                "address": "803 Phố Lân, Phường 51, Quận 60\nHải Phòng",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 10,
                    "owner_id": 2,
                    "org_name": "Công ty Thái-Đái",
                    "phones": "(0166)513-8558",
                    "description": null,
                    "tax_id": "67765",
                    "address": "894, Thôn Khánh Văn, Phường 0, Huyện Giác Lô\nBạc Liêu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 15,
                "org_id": 8,
                "author_id": 2,
                "major_id": 4,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Deleniti pariatur voluptate est ipsa et. Rem eius et nihil numquam qui qui.",
                "address": "150, Thôn 7, Ấp Vương Khanh, Quận Chinh Công\nThanh Hóa",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 25,
                "org_id": 8,
                "author_id": 10,
                "major_id": 4,
                "title": "Part-time Java",
                "content": "Cần tuyển Quia recusandae aut cum debitis soluta. Quas quo et quaerat quod ex. Quae labore facere adipisci voluptas culpa possimus ratione.",
                "address": "174 Phố Chung Thoại Thành, Xã 0, Quận Diễm Tiêu\nHải Phòng",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 29,
                "org_id": 3,
                "author_id": 9,
                "major_id": 4,
                "title": "Remote .Net",
                "content": "Cần tuyển Illo libero exercitationem necessitatibus expedita. Eligendi maxime odio sed amet saepe. Tenetur sed vel et nobis exercitationem qui eius voluptatem.",
                "address": "96 Phố Mộc Điệp Thông, Xã Bì Hải Tiên, Huyện 9\nBắc Kạn",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 3,
                    "owner_id": 9,
                    "org_name": "Công ty Phó-Cái",
                    "phones": "(0510) 703 9459",
                    "description": null,
                    "tax_id": "743410",
                    "address": "793, Thôn Hy Bình, Thôn Lã Nhiên, Quận Huỳnh Trân Kiên\nLào Cai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 32,
                "org_id": 10,
                "author_id": 2,
                "major_id": 4,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Illo est necessitatibus molestiae dolores. Mollitia molestiae possimus doloribus. Occaecati aut velit et aliquam aspernatur et.",
                "address": "873 Phố Phan Nhu Thiện, Xã Trân, Huyện 6\nBắc Giang",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 10,
                    "owner_id": 2,
                    "org_name": "Công ty Thái-Đái",
                    "phones": "(0166)513-8558",
                    "description": null,
                    "tax_id": "67765",
                    "address": "894, Thôn Khánh Văn, Phường 0, Huyện Giác Lô\nBạc Liêu",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 35,
                "org_id": 5,
                "author_id": 10,
                "major_id": 4,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Quisquam sunt quis voluptatibus tenetur. Veniam repudiandae nam sed voluptatibus atque harum. Et nemo corporis quaerat dignissimos ea. Cupiditate architecto facere enim quasi quidem.",
                "address": "534, Thôn 02, Xã Âu, Huyện Hương\nPhú Yên",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Cát-Cù",
                    "phones": "059-475-0363",
                    "description": null,
                    "tax_id": "8125",
                    "address": "2475 Phố Đoàn, Phường 4, Quận Vừ Thi Khai\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 37,
                "org_id": 5,
                "author_id": 7,
                "major_id": 4,
                "title": "Fulltime Java",
                "content": "Cần tuyển Corporis praesentium quaerat reiciendis sint. In assumenda itaque omnis suscipit et est voluptatem. Quaerat optio laudantium ad nam eius et.",
                "address": "1, Thôn Oanh Nhậm, Phường Ánh, Quận Ân Oanh\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Cát-Cù",
                    "phones": "059-475-0363",
                    "description": null,
                    "tax_id": "8125",
                    "address": "2475 Phố Đoàn, Phường 4, Quận Vừ Thi Khai\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            },
            {
                "id": 38,
                "org_id": 8,
                "author_id": 5,
                "major_id": 4,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Qui dolores voluptas eligendi doloremque soluta. Repellendus ea laudantium facere temporibus corrupti voluptatum.",
                "address": "316 Phố Tống Trạch Hương, Phường 0, Quận Trưng Châu Tuyền\nCần Thơ",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-05-18 03:47:00",
                "end_time": "2021-05-23 03:47:00",
                "interview_start_time": "2021-05-24 03:47:00",
                "interview_end_time": "2021-05-28 03:47:00",
                "created_at": "2021-05-18 03:47:00",
                "updated_at": "2021-05-18 03:47:00",
                "org": {
                    "id": 8,
                    "owner_id": 3,
                    "org_name": "Công ty Mang LLC",
                    "phones": "0167 653 0061",
                    "description": null,
                    "tax_id": "5636",
                    "address": "335 Phố Lương Tuyết Lan, Xã 9, Quận Trương Ca\nHà Nội",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-05-18 03:47:00",
                    "updated_at": "2021-05-18 03:47:00"
                }
            }
        ]
    }
]
```
<div id="execution-results-GETapi-v1-recruitment-news-by-major" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news-by-major"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news-by-major"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news-by-major" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news-by-major"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news-by-major" data-method="GET" data-path="api/v1/recruitment-news-by-major" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news-by-major', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news-by-major" onclick="tryItOut('GETapi-v1-recruitment-news-by-major');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news-by-major" onclick="cancelTryOut('GETapi-v1-recruitment-news-by-major');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news-by-major" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news-by-major</code></b>
</p>
</form>


## Find a Recruitment News
Display the specified recruitment news.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news/laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"maiores"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/laboriosam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "maiores"
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
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-GETapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news--id-" data-method="GET" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news--id-" onclick="tryItOut('GETapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news--id-" onclick="cancelTryOut('GETapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The id of the recruiment news.</p>

</form>


## api/v1/search




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-search"></code></pre>
</div>
<form id="form-POSTapi-v1-search" data-method="POST" data-path="api/v1/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-search" onclick="tryItOut('POSTapi-v1-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-search" onclick="cancelTryOut('POSTapi-v1-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/search</code></b>
</p>
</form>


## Create a Recruitment News
Store a newly created recruitment news in database.




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":9,"author_id":2,"major_id":3,"title":"ratione","content":"sed","address":"laborum","city":"enim","work_type":"tenetur","start_time":"2021-05-18T07:17:25+0000","end_time":"2021-05-18T07:17:25+0000","interview_start_time":"2021-05-18T07:17:25+0000","interview_end_time":"2021-05-18T07:17:25+0000"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 9,
    "author_id": 2,
    "major_id": 3,
    "title": "ratione",
    "content": "sed",
    "address": "laborum",
    "city": "enim",
    "work_type": "tenetur",
    "start_time": "2021-05-18T07:17:25+0000",
    "end_time": "2021-05-18T07:17:25+0000",
    "interview_start_time": "2021-05-18T07:17:25+0000",
    "interview_end_time": "2021-05-18T07:17:25+0000"
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
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-POSTapi-v1-recruitment-news" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-recruitment-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-recruitment-news"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-recruitment-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-recruitment-news"></code></pre>
</div>
<form id="form-POSTapi-v1-recruitment-news" data-method="POST" data-path="api/v1/recruitment-news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-recruitment-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-recruitment-news" onclick="tryItOut('POSTapi-v1-recruitment-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-recruitment-news" onclick="cancelTryOut('POSTapi-v1-recruitment-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-recruitment-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/recruitment-news</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="author_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>major_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="major_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>work_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="work_type" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_start_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_end_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>

</form>


## Update Recruitment News&#039;s Information
Update the specified recruitment news in database.




> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/recruitment-news/repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":14,"author_id":3,"major_id":18,"title":"aut","content":"suscipit","address":"soluta","city":"soluta","work_type":"sit","start_time":"2021-05-18T07:17:25+0000","end_time":"2021-05-18T07:17:25+0000","interview_start_time":"2021-05-18T07:17:25+0000","interview_end_time":"2021-05-18T07:17:25+0000"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/repudiandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 14,
    "author_id": 3,
    "major_id": 18,
    "title": "aut",
    "content": "suscipit",
    "address": "soluta",
    "city": "soluta",
    "work_type": "sit",
    "start_time": "2021-05-18T07:17:25+0000",
    "end_time": "2021-05-18T07:17:25+0000",
    "interview_start_time": "2021-05-18T07:17:25+0000",
    "interview_end_time": "2021-05-18T07:17:25+0000"
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
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-PUTapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-recruitment-news--id-" data-method="PUT" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-recruitment-news--id-" onclick="tryItOut('PUTapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-recruitment-news--id-" onclick="cancelTryOut('PUTapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="author_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>major_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="major_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>work_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="work_type" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_start_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_end_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>

</form>


## Remove a Recruitment News
Remove the specified recruitment news from database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/recruitment-news/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"sunt"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "sunt"
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
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-DELETEapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-recruitment-news--id-" data-method="DELETE" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-recruitment-news--id-" onclick="tryItOut('DELETEapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-recruitment-news--id-" onclick="cancelTryOut('DELETEapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The id of the recruitment news</p>

</form>



