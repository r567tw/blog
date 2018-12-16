# blog


# request list
- 會員登入功能（使用 make:auth）
- 會員需區分一般使用者及管理員
- /post 留言板功能，可瀏覽、發佈貼文，限登入使用者使用
- /chat 使用者即時聊天功能，限登入使用者使用
- /manage 管理介面功能，限管理員可以編輯、刪除 post, chat 和 user


# 加分
- /post 和 /chat 介面皆使用 AJAX 製作
- /manage 皆使用 AJAX 製作
- 使用 middleware 區分使用者及管理員
- 撰寫 db:seed 自動產生初始資料
- 使用 Laravel Socialite 支援 Facebook 登入
- 大部分介面採用 Vue.js Render
