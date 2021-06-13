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
                "id": 39,
                "org_id": 6,
                "author_id": 8,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Animi sit nihil incidunt voluptates ipsum earum. Dignissimos reprehenderit qui earum dignissimos eaque. Atque voluptatem rem ipsam qui.",
                "address": "235, Thôn Triệu, Phường Ngọc, Huyện Trang Phó\nNinh Thuận",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 40,
                "org_id": 9,
                "author_id": 5,
                "major_id": 1,
                "title": "Part-time Java",
                "content": "Cần tuyển Velit aperiam ducimus molestiae officiis tempore eos. Explicabo mollitia esse dolore nobis. Voluptatum dolor dolorum culpa aut repellat quasi asperiores est. Quas placeat sed laudantium voluptas.",
                "address": "36 Phố Bùi Phát Tú, Phường Nhuận Vĩ, Huyện Tôn\nTây Ninh",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 43,
                "org_id": 1,
                "author_id": 7,
                "major_id": 1,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Accusamus repellat voluptatibus labore aliquam commodi aut voluptatem. Exercitationem est dignissimos alias voluptatibus. Porro error quibusdam fugit aperiam sit dolorum beatae eveniet.",
                "address": "6296, Thôn Sáng, Phường Đăng Liễu, Huyện Lỳ Tuyền Tú\nSơn La",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 4,
                "org_id": 8,
                "author_id": 9,
                "major_id": 1,
                "title": "Remote .Net",
                "content": "Cần tuyển Quidem autem est sit iure qui pariatur. Et molestias tempora dolorem qui ea. Expedita error optio accusantium in voluptatem.",
                "address": "67, Ấp Khai, Ấp Hoa Uyển, Huyện Quyền Mạc\nKiên Giang",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 7,
                "org_id": 1,
                "author_id": 3,
                "major_id": 1,
                "title": "Remote Java",
                "content": "Cần tuyển Fuga dolor autem est quidem voluptates. Doloremque autem veniam minus porro. Et quo quae beatae sapiente quae.",
                "address": "3897, Thôn 56, Phường Kha Hà, Huyện Huệ Quế\nĐiện Biên",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 14,
                "org_id": 7,
                "author_id": 9,
                "major_id": 1,
                "title": "Remote Ruby",
                "content": "Cần tuyển Magnam officiis recusandae culpa ipsum. Incidunt assumenda et aut sit. Eveniet velit reiciendis ut eaque fuga. Harum velit enim error enim consequuntur quia. Hic quia est unde eligendi non.",
                "address": "235 Phố Mẫn, Phường Yên Cổ, Huyện 1\nHồ Chí Minh",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 17,
                "org_id": 4,
                "author_id": 10,
                "major_id": 1,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Aut assumenda perferendis id sit. Sint omnis omnis eveniet. Est ullam architecto velit quae voluptatem impedit rerum. Qui occaecati atque rem soluta.",
                "address": "22 Phố Tuyền, Xã Huyền, Huyện Thắng Khưu\nTiền Giang",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 20,
                "org_id": 6,
                "author_id": 2,
                "major_id": 1,
                "title": "Fulltime Java",
                "content": "Cần tuyển Eos id voluptatum quo cum qui. Ut unde sunt ducimus id nam qui voluptate dolorem. Consequatur quia aspernatur mollitia at et accusantium dolores. Odit voluptatum molestiae est et omnis voluptas.",
                "address": "9779 Phố Ngạn, Phường 6, Quận Long Vĩ\nPhú Thọ",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 22,
                "org_id": 3,
                "author_id": 3,
                "major_id": 1,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Libero facere consectetur iusto consequuntur et consectetur provident exercitationem. Voluptatem a aliquid vitae voluptatem autem enim quod in. Maxime sint est perferendis et.",
                "address": "76 Phố Thi My Võ, Phường Bích Thạch, Quận Bào Đoàn\nHà Nội",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
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
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 23,
                "org_id": 6,
                "author_id": 4,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Natus voluptatem illum qui consequatur vel incidunt sit. Ab incidunt non sed explicabo at et. Maxime est nemo aspernatur non qui enim. Quidem modi sint repellendus.",
                "address": "96, Ấp 8, Phường 77, Huyện Bế\nAn Giang",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 41,
                "org_id": 3,
                "author_id": 8,
                "major_id": 2,
                "title": "Remote .Net",
                "content": "Cần tuyển Molestiae distinctio debitis id enim eligendi. Similique aut ducimus culpa fugit aliquid aut laborum. Exercitationem tempora et quis asperiores reiciendis exercitationem ut.",
                "address": "7 Phố Lữ Kha Giang, Xã Phùng, Quận Lý\nNghệ An",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
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
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 42,
                "org_id": 6,
                "author_id": 4,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Praesentium non culpa dignissimos. Recusandae nihil voluptatibus explicabo aperiam sit voluptatibus. Voluptatem voluptate et qui earum aliquam blanditiis.",
                "address": "1735 Phố Khúc Đại Thống, Ấp Lò Phụng, Huyện Chiêm Chinh Thuận\nSơn La",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 3,
                "org_id": 5,
                "author_id": 8,
                "major_id": 2,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Ullam aut illum aut voluptas eum quasi. Officia sequi non debitis omnis eum ipsam sit. Voluptatibus sapiente ex sed totam expedita molestiae.",
                "address": "551 Phố Lục Triệu Nhàn, Xã 90, Huyện Nhân Hy\nSơn La",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 5,
                    "owner_id": 5,
                    "org_name": "Công ty Khu, Tào and Ung",
                    "phones": "0351 580 7960",
                    "description": null,
                    "tax_id": "660210",
                    "address": "9675 Phố Mạch, Ấp Hy Lộc, Quận 7\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 6,
                "org_id": 4,
                "author_id": 5,
                "major_id": 2,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Neque praesentium fugit cupiditate itaque aut. Sed voluptates officia qui qui. Labore eos similique sed quidem qui magnam nisi. Expedita qui nostrum quis illum voluptate ut doloribus enim.",
                "address": "5926 Phố Nhâm, Xã Xuân, Quận 06\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 8,
                "org_id": 4,
                "author_id": 1,
                "major_id": 2,
                "title": "Fulltime Java",
                "content": "Cần tuyển Minus laudantium eos itaque ipsum molestiae enim eos. Nesciunt necessitatibus perferendis est velit. Eos neque est animi voluptatem reiciendis. Officia illo facere omnis sit distinctio.",
                "address": "753 Phố Lưu Kính Bạch, Phường 4, Huyện Hạnh Luật\nLạng Sơn",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 19,
                "org_id": 7,
                "author_id": 9,
                "major_id": 2,
                "title": "Remote .Net",
                "content": "Cần tuyển Perspiciatis aliquid maxime a et pariatur nam. Id illo nobis aut. Omnis minus quo incidunt et. Atque voluptatem autem quas ipsa quia amet ipsam.",
                "address": "9, Ấp Ung Thanh, Phường 52, Huyện Xa Thùy\nBạc Liêu",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 25,
                "org_id": 8,
                "author_id": 3,
                "major_id": 2,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Qui repudiandae nulla voluptas atque laborum. Eum qui animi omnis eaque reiciendis numquam dicta. Molestiae ea nemo repellat exercitationem.",
                "address": "778 Phố Điền, Xã Trực An, Huyện 75\nThanh Hóa",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 28,
                "org_id": 1,
                "author_id": 9,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Velit blanditiis totam non recusandae. Ipsam eaque deserunt quisquam illum. Non ut et voluptatem velit cupiditate et qui praesentium.",
                "address": "3371, Thôn Ánh, Xã 79, Huyện 82\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 29,
                "org_id": 10,
                "author_id": 2,
                "major_id": 2,
                "title": "Part-time .Net",
                "content": "Cần tuyển Occaecati tenetur sed enim beatae hic. Et dolorum qui quia. Et ut soluta aut asperiores dignissimos. Dolor voluptas commodi exercitationem atque enim animi autem. Dignissimos aperiam illum ex dolor.",
                "address": "70 Phố Mã Tuyến Nương, Xã Nghị Trinh Mạnh, Quận Trịnh Kính My\nCần Thơ",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 31,
                "org_id": 4,
                "author_id": 3,
                "major_id": 2,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Modi numquam impedit laboriosam ex. Dolor quia non sit quae dolor cumque at. Odio dolorem vitae qui iste et. Neque ratione maiores aut et.",
                "address": "45 Phố Chung, Phường Bửu Linh Hằng, Quận Xuân Hội\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 33,
                "org_id": 9,
                "author_id": 10,
                "major_id": 3,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Voluptas rerum perferendis inventore voluptas. Quia et est velit et molestiae iste vel sed. Earum laborum ea officia quia consequuntur. Eos minus eveniet repellat officiis reiciendis.",
                "address": "6, Thôn Từ, Phường Nghiêm Bình Linh, Quận Phượng Tào\nKhánh Hòa",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 34,
                "org_id": 8,
                "author_id": 5,
                "major_id": 3,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Nemo est quia reprehenderit magnam. Recusandae perspiciatis sed nam dolores. Quia dicta ducimus laboriosam.",
                "address": "890 Phố Âu Hậu Phương, Thôn Văn Dụng, Huyện 6\nĐà Nẵng",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 36,
                "org_id": 5,
                "author_id": 5,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Possimus sit occaecati minima. Blanditiis et neque et et aliquam aut dolores ut. Blanditiis nihil veritatis velit accusantium vel in. Qui facere similique nisi id architecto ipsum omnis.",
                "address": "1465 Phố Bế Minh Huỳnh, Phường 70, Quận Hùng\nThanh Hóa",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 5,
                    "owner_id": 5,
                    "org_name": "Công ty Khu, Tào and Ung",
                    "phones": "0351 580 7960",
                    "description": null,
                    "tax_id": "660210",
                    "address": "9675 Phố Mạch, Ấp Hy Lộc, Quận 7\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 38,
                "org_id": 8,
                "author_id": 2,
                "major_id": 3,
                "title": "Fulltime Java",
                "content": "Cần tuyển Velit numquam ut aperiam in porro. Occaecati excepturi dolore tempore et tenetur voluptate.",
                "address": "561 Phố Chu Hậu Độ, Phường Mẫn Thúc, Quận Bào Giang\nCà Mau",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 1,
                "org_id": 2,
                "author_id": 1,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Vitae labore ut optio quisquam. Reprehenderit qui voluptas possimus. Aliquam odit debitis autem illo est et. Voluptatum est officia excepturi quia suscipit eum labore.",
                "address": "6896, Thôn 7, Phường Huyền, Quận 45\nCao Bằng",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 2,
                    "owner_id": 5,
                    "org_name": "Công ty Cấn Ltd",
                    "phones": "(072) 528 8482",
                    "description": null,
                    "tax_id": "75487",
                    "address": "61, Thôn 82, Xã Cẩn, Quận 1\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 2,
                "org_id": 10,
                "author_id": 4,
                "major_id": 3,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Omnis enim voluptatem illo et deleniti. Consectetur neque consequatur incidunt optio ad. Officiis et consequatur quia dolor maiores qui.",
                "address": "1 Phố Mâu, Phường Bình Trác, Huyện Trang Thủy Khôi\nHồ Chí Minh",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 9,
                "org_id": 10,
                "author_id": 5,
                "major_id": 3,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Consequatur unde eaque est delectus praesentium sunt. Dolorem impedit neque quidem cumque rem. Atque recusandae aut temporibus velit itaque. Rerum sequi velit iure modi. Cumque fuga nam debitis.",
                "address": "759 Phố An, Phường Ngô, Quận Viên\nĐà Nẵng",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 15,
                "org_id": 9,
                "author_id": 10,
                "major_id": 3,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Molestias porro et eum perferendis autem id. Dolores aperiam mollitia adipisci aliquam et.",
                "address": "13 Phố Lý, Phường 24, Quận 65\nCần Thơ",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 16,
                "org_id": 8,
                "author_id": 6,
                "major_id": 3,
                "title": "Remote Ruby",
                "content": "Cần tuyển Laudantium praesentium ut laboriosam non numquam autem. Voluptatibus reiciendis porro cum nobis. Molestiae quod saepe sunt et expedita temporibus.",
                "address": "192, Thôn Ngân Chiến, Xã Đoàn Hòa Nhân, Huyện Trương\nCà Mau",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 18,
                "org_id": 6,
                "author_id": 9,
                "major_id": 3,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Laboriosam aliquam possimus nobis tenetur at earum iure. Earum recusandae dolores eos officiis debitis assumenda. Temporibus voluptas ipsam aut ut aut. Nam rerum eligendi repudiandae qui.",
                "address": "74 Phố Bửu Thục Đào, Phường Lộ Khúc, Huyện Vi Nhiên\nĐắk Nông",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 35,
                "org_id": 6,
                "author_id": 1,
                "major_id": 4,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Minima perspiciatis nihil consequatur enim non delectus. At autem nesciunt iure qui asperiores est. Vel qui eligendi ratione molestiae non velit consectetur.",
                "address": "84 Phố Chử, Xã 2, Huyện Kiếm\nThanh Hóa",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 37,
                "org_id": 7,
                "author_id": 1,
                "major_id": 4,
                "title": "Remote Ruby",
                "content": "Cần tuyển Architecto laboriosam qui quis porro esse. Sunt reprehenderit eos quisquam explicabo et. Soluta voluptatibus doloremque voluptas et.",
                "address": "2 Phố Chu Vĩnh Trác, Phường 49, Huyện Bá Chi\nLạng Sơn",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 44,
                "org_id": 6,
                "author_id": 6,
                "major_id": 4,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Voluptas omnis et tempora perferendis. Occaecati mollitia eos accusantium quia voluptatibus labore harum iure. Quae qui aliquid tempore quas quia quod. Accusamus dolorem culpa sint quisquam.",
                "address": "3, Thôn 5, Xã 54, Huyện 00\nThừa Thiên Huế",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 45,
                "org_id": 8,
                "author_id": 6,
                "major_id": 4,
                "title": "Part-time Java",
                "content": "Cần tuyển Dolores consectetur similique mollitia ut. Quia esse amet qui rerum dolor aperiam mollitia.",
                "address": "472, Ấp Hùng Nhiên Bích, Ấp Cung Giang, Huyện Nga Giáp\nHải Dương",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 5,
                "org_id": 8,
                "author_id": 3,
                "major_id": 4,
                "title": "Remote Ruby",
                "content": "Cần tuyển Delectus veniam sit quisquam reprehenderit. Sed illum ab sunt eum voluptatem commodi repudiandae sed. Architecto in vitae quis voluptate eligendi est dicta. Quia laborum delectus officia blanditiis.",
                "address": "98, Ấp 2, Ấp Thịnh Thảo, Quận Miên Lâm\nĐồng Tháp",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 10,
                "org_id": 8,
                "author_id": 2,
                "major_id": 4,
                "title": "Remote .Net",
                "content": "Cần tuyển Quia rerum ipsum fugiat sed odit. Nesciunt qui voluptatibus qui perspiciatis accusantium corporis. Quia qui in sed tenetur.",
                "address": "447, Ấp Giáp Uy, Xã Trung Thư, Quận Ngà\nThanh Hóa",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 11,
                "org_id": 9,
                "author_id": 3,
                "major_id": 4,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Molestiae facere omnis voluptate possimus nemo qui in. Nam eos omnis deserunt dolores sit vel sapiente. Ratione reiciendis sunt ipsa aut vel sint eligendi.",
                "address": "57, Thôn Lữ Kim Thoại, Phường Âu, Huyện Ty\nLong An",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 12,
                "org_id": 8,
                "author_id": 6,
                "major_id": 4,
                "title": "Remote Java",
                "content": "Cần tuyển Enim nobis qui a ut. Ipsam sed sint amet ut officia deleniti fuga expedita. Omnis velit eligendi quae aut est sit quia. Voluptas qui sed possimus excepturi culpa. Molestias odit est explicabo.",
                "address": "7 Phố Tâm, Xã Thịnh Lộc, Quận Ấu\nTiền Giang",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 13,
                "org_id": 10,
                "author_id": 3,
                "major_id": 4,
                "title": "Fulltime Java",
                "content": "Cần tuyển Voluptatem molestiae quia amet earum aspernatur et et. Dolores necessitatibus nulla nobis. Doloribus non et autem optio fugiat. Neque eos rerum inventore quo cum.",
                "address": "23 Phố Lễ, Ấp Bình Lợi, Quận Tân Ngôn\nPhú Thọ",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
    -G "http://localhost:8000/api/v1/recruitment-news/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"delectus"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/quisquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "delectus"
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
The id of the recruitment news.</p>

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
    -d '{"org_id":10,"author_id":8,"major_id":9,"title":"corporis","content":"dignissimos","address":"et","city":"ipsa","work_type":"ducimus","start_time":"2021-06-13T06:11:30+0000","end_time":"2021-06-13T06:11:30+0000","interview_start_time":"2021-06-13T06:11:30+0000","interview_end_time":"2021-06-13T06:11:30+0000"}'

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
    "org_id": 10,
    "author_id": 8,
    "major_id": 9,
    "title": "corporis",
    "content": "dignissimos",
    "address": "et",
    "city": "ipsa",
    "work_type": "ducimus",
    "start_time": "2021-06-13T06:11:30+0000",
    "end_time": "2021-06-13T06:11:30+0000",
    "interview_start_time": "2021-06-13T06:11:30+0000",
    "interview_end_time": "2021-06-13T06:11:30+0000"
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
    "http://localhost:8000/api/v1/recruitment-news/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":18,"author_id":14,"major_id":4,"title":"qui","content":"voluptatem","address":"repudiandae","city":"animi","work_type":"magni","start_time":"2021-06-13T06:11:30+0000","end_time":"2021-06-13T06:11:30+0000","interview_start_time":"2021-06-13T06:11:30+0000","interview_end_time":"2021-06-13T06:11:30+0000"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 18,
    "author_id": 14,
    "major_id": 4,
    "title": "qui",
    "content": "voluptatem",
    "address": "repudiandae",
    "city": "animi",
    "work_type": "magni",
    "start_time": "2021-06-13T06:11:30+0000",
    "end_time": "2021-06-13T06:11:30+0000",
    "interview_start_time": "2021-06-13T06:11:30+0000",
    "interview_end_time": "2021-06-13T06:11:30+0000"
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
    "http://localhost:8000/api/v1/recruitment-news/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"ea"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "ea"
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


## Get Job seekers of recruitment news
Display the list of job seekers, who applied to this recruitment news by id.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news-job-seekers/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"omnis"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news-job-seekers/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "omnis"
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
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10",
  "job_seekers": [
     {
         "id": 1,
         "first_name": "Uông Đăng Bắc",
         "last_name": "Ông. Chiêm Lam Hoán",
         "dob": "2015-02-26",
         "phone": "0186-622-0077",
         "email": "gia.tien@example.com",
         "email_verified_at": "2021-06-12 05:55:18",
         "address": "47 Phố Tạ Đào Ly, Phường Đổng Hà Thảo, Huyện Độ Trình\nĐà Nẵng",
         "bio": "SpBxrIonxjW7kOFgkgBwvS2ZQ2YcXx",
         "avatar_path": "public/docs/user.png",
         "social_linkedin": null,
         "social_facebook": null,
         "created_at": "2021-06-12 05:55:18",
         "updated_at": "2021-06-12 05:55:18",
         "pivot": {
         "rn_id": 1,
         "user_id": 1,
         "cv_path": "",
         "is_elect": 0,
         "cover_letter_path": "",
         "exp_years": 2
         }
     }
  ]
}
```
<div id="execution-results-GETapi-v1-recruitment-news-job-seekers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news-job-seekers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news-job-seekers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news-job-seekers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news-job-seekers--id-"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news-job-seekers--id-" data-method="GET" data-path="api/v1/recruitment-news-job-seekers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news-job-seekers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news-job-seekers--id-" onclick="tryItOut('GETapi-v1-recruitment-news-job-seekers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news-job-seekers--id-" onclick="cancelTryOut('GETapi-v1-recruitment-news-job-seekers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news-job-seekers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news-job-seekers/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-recruitment-news-job-seekers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="body" required  hidden>
<br>
The id of the recruitment news.</p>

</form>



