<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => '該表單中不可有額外字段。',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上傳文件太大， 請重新嘗試上傳一個較小的文件。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 驗證符無效， 請重新提交。',
    'This value is not a valid HTML5 color.' => '該數值不是個有效的 HTML5 顏色。',
    'Please enter a valid birthdate.' => '請輸入有效的生日日期。',
    'The selected choice is invalid.' => '所選的選項無效。',
    'The collection is invalid.' => '集合無效。',
    'Please select a valid color.' => '請選擇有效的顏色。',
    'Please select a valid country.' => '請選擇有效的國家。',
    'Please select a valid currency.' => '請選擇有效的貨幣。',
    'Please choose a valid date interval.' => '請選擇有效的日期間隔。',
    'Please enter a valid date and time.' => '請輸入有效的日期與時間。',
    'Please enter a valid date.' => '請輸入有效的日期。',
    'Please select a valid file.' => '請選擇有效的文件。',
    'The hidden field is invalid.' => '隱藏字段無效。',
    'Please enter an integer.' => '請輸入整數。',
    'Please select a valid language.' => '請選擇有效的語言。',
    'Please select a valid locale.' => '請選擇有效的語言環境。',
    'Please enter a valid money amount.' => '請輸入正確的金額。',
    'Please enter a number.' => '請輸入數字。',
    'The password is invalid.' => '密碼無效。',
    'Please enter a percentage value.' => '請輸入百分比值。',
    'The values do not match.' => '數值不匹配。',
    'Please enter a valid time.' => '請輸入有效的時間。',
    'Please select a valid timezone.' => '請選擇有效的時區。',
    'Please enter a valid URL.' => '請輸入有效的網址。',
    'Please enter a valid search term.' => '請輸入有效的搜索詞。',
    'Please provide a valid phone number.' => '請提供有效的手機號碼。',
    'The checkbox has an invalid value.' => '無效的選框值。',
    'Please enter a valid email address.' => '請輸入有效的電子郵件地址。',
    'Please select a valid option.' => '請選擇有效的選項。',
    'Please select a valid range.' => '請選擇有效的範圍。',
    'Please enter a valid week.' => '請輸入有效的星期。',
    'This value should be false.' => '該變數的值應為 false 。',
    'This value should be true.' => '該變數的值應為 true 。',
    'This value should be of type {{ type }}.' => '該變數的類型應為 {{ type }} 。',
    'This value should be blank.' => '該變數應為空。',
    'The value you selected is not a valid choice.' => '選定變數的值不是有效的選項。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要選擇 {{ limit }} 個選項。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能選擇 {{ limit }} 個選項。',
    'One or more of the given values is invalid.' => '一個或者多個給定的值無效。',
    'This field was not expected.' => '此字段是沒有預料到。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '該值不是一個有效的日期（date）。',
    'This value is not a valid datetime.' => '該值不是一個有效的日期時間（datetime）。',
    'This value is not a valid email address.' => '該值不是一個有效的郵件地址。',
    'The file could not be found.' => '找不到檔案。',
    'The file is not readable.' => '無法讀取檔案。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大 ({{ size }} {{ suffix }})。檔案大小不可以超過 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '無效的檔案類型 ({{ type }}) 。允許的檔案類型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '這個變數的值應該小於或等於 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字串太長，長度不可超過 {{ limit }} 個字元。',
    'This value should be {{ limit }} or more.' => '該變數的值應該大於或等於 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字串太短，長度不可少於 {{ limit }} 個字元。',
    'This value should not be blank.' => '該變數不應為空白。',
    'This value should not be null.' => '該值不應為 null 。',
    'This value should be null.' => '該值應為 null 。',
    'This value is not valid.' => '無效的數值 。',
    'This value is not a valid time.' => '該值不是一個有效的時間。',
    'This value is not a valid URL.' => '該值不是一個有效的 URL 。',
    'The two values should be equal.' => '這兩個變數的值應該相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大，檔案大小不可以超過 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '檔案太大。',
    'The file could not be uploaded.' => '無法上傳此檔案。',
    'This value should be a valid number.' => '該值應該為有效的數字。',
    'This value is not a valid country.' => '該值不是有效的國家名。',
    'This file is not a valid image.' => '該檔案不是有效的圖片。',
    'This is not a valid IP address.' => '該值不是有效的IP地址。',
    'This value is not a valid language.' => '該值不是有效的語言名。',
    'This value is not a valid locale.' => '該值不是有效的區域值（locale）。',
    'This value is already used.' => '該值已經被使用。',
    'The size of the image could not be detected.' => '不能解析圖片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '圖片太寬 ({{ width }}px)，最大寬度為 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '圖片寬度不夠 ({{ width }}px)，最小寬度為 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '圖片太高 ({{ height }}px)，最大高度為 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '圖片高度不夠 ({{ height }}px)，最小高度為 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '該變數的值應為用戶目前的密碼。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '該變數應為 {{ limit }} 個字元。',
    'The file was only partially uploaded.' => '該檔案的上傳不完整。',
    'No file was uploaded.' => '沒有上傳任何檔案。',
    'No temporary folder was configured in php.ini.' => 'php.ini 裡沒有配置臨時目錄。',
    'Cannot write temporary file to disk.' => '暫存檔寫入磁碟失敗。',
    'A PHP extension caused the upload to fail.' => '某個 PHP 擴展造成上傳失敗。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '該集合最少應包含 {{ limit }} 個元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '該集合最多包含 {{ limit }} 個元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '該集合應包含 {{ limit }} 個元素 element 。',
    'Invalid card number.' => '無效的信用卡號。',
    'Unsupported card type or invalid card number.' => '不支援的信用卡類型或無效的信用卡號。',
    'This is not a valid International Bank Account Number (IBAN).' => '該值不是有效的國際銀行帳號（IBAN）。',
    'This value is not a valid ISBN-10.' => '該值不是有效的10位國際標準書號（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '該值不是有效的13位國際標準書號（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '該值不是有效的國際標準書號（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '該值不是有效的國際標準期刊號（ISSN）。',
    'This value is not a valid currency.' => '該值不是有效的貨幣名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '該值應等於 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '該值應大於 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '該值應大於或等於 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '該值應小於 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '該值應小於或等於 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '該值應不等於 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值不應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '圖像格式過大 ({{ ratio }})。 最大允許尺寸 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '圖像格式過小 ({{ ratio }})。最小尺寸 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '方形圖像 ({{ width }}x{{ height }}px)。不接受方形圖像。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '紀念冊布局圖像 ({{ width }}x{{ height }}px)。 不接受紀念冊布局圖像。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '書籍布局圖像 ({{ width }}x{{ height }}px)。不接受圖像書籍布局。',
    'An empty file is not allowed.' => '不接受空白文件。',
    'The host could not be resolved.' => '未找到服務器。',
    'This value does not match the expected {{ charset }} charset.' => '該數值不符合預期 {{ charset }} 符號編碼。',
    'This is not a valid Business Identifier Code (BIC).' => '無效企業識別碼 (BIC)。',
    'Error.' => '錯誤。',
    'This is not a valid UUID.' => '無效的通用唯壹標識符 (UUID)。',
    'This value should be a multiple of {{ compared_value }}.' => '該值必須是倍數 {{ compared_value }}。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '該企業識別碼 (BIC) 與銀行賬戶國際編號不壹致 (IBAN) {{ iban }}。',
    'This value should be valid JSON.' => '該數值必須序列化為JSON格式。',
    'This collection should contain only unique elements.' => '該集合應僅包含唯壹元素。',
    'This value should be positive.' => '數值應為正數。',
    'This value should be either positive or zero.' => '數值應是正數，或為零。',
    'This value should be negative.' => '數值應為負數。',
    'This value should be either negative or zero.' => '數值應是負數，或為零。',
    'This value is not a valid timezone.' => '無效時區。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '此密碼已被泄露，切勿使用。請更換密碼。',
    'This value should be between {{ min }} and {{ max }}.' => '該數值應在 {{ min }} 和 {{ max }} 之間。',
    'This value is not a valid hostname.' => '該數值不是有效的主機名稱。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '該集合內的元素數量得是 {{ compared_value }} 的倍數。',
    'This value should satisfy at least one of the following constraints:' => '該數值需符合以下其中一個約束：',
    'Each element of this collection should satisfy its own set of constraints.' => '該集合內的每個元素需符合元素本身規定的約束。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '該數值不是有效的國際證券識別碼 （ISIN）。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份驗證發生異常。',
    'Authentication credentials could not be found.' => '沒有找到身份驗證的憑證。',
    'Authentication request could not be processed due to a system problem.' => '由於系統故障，身份驗證的請求無法被處理。',
    'Invalid credentials.' => '無效的憑證。',
    'Cookie has already been used by someone else.' => 'Cookie 已經被其他人使用。',
    'Not privileged to request the resource.' => '沒有權限請求此資源。',
    'Invalid CSRF token.' => '無效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '沒有找到支持此 token 的身份驗證服務提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。回話超時或沒有啓用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用戶名。',
    'Account has expired.' => '賬號已逾期。',
    'Credentials have expired.' => '憑證已逾期。',
    'Account is disabled.' => '賬號已被禁用。',
    'Account is locked.' => '賬號已被鎖定。',
    'Too many failed login attempts, please try again later.' => '登入失敗的次數過多，請稍後再試。',
    'Invalid or expired login link.' => '失效或過期的登入鏈接。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueRu = new MessageCatalogue('ru', array (
  'messages' => 
  array (
    'title.copy' => 'Копировать',
    'title.print' => 'Печать',
    'title.edit' => 'Редактировать',
    'title.show' => 'Открыть',
    'title.save' => 'Сохранить',
    'title.delete' => 'Удалить',
    'title.cancel' => 'Отмена',
    'title.add' => 'Добавить',
    'title.back' => 'Назад',
    'title.save_and_stay' => 'Сохранить и остаться',
    'title.save_and_create_new' => 'Сохранить и создать новую',
    'title.add_product' => 'Добавить номенклатуру',
    'title.add_section' => 'Добавить раздел',
    'title.add_material' => 'Добавить материал',
    'title.add_document' => 'Добавить документацию',
    'title.formed' => 'Сформировать',
    'title.edit_selected' => 'Редактировать выделенные',
    'title.page.main' => 'Главная',
    'title.page.index.product' => 'Номенклатура',
    'title.page.new.product' => 'Добавление новой номенклатуры',
    'title.page.edit.product' => 'Редактирование данных о номенклатуре',
    'title.page.show.product' => 'Номенклатура',
    'title.page.replacement.structure' => 'Замена элемента',
    'title.page.index.department' => 'Подразделения',
    'title.page.new.department' => 'Добавление нового подразделения',
    'title.page.edit.department' => 'Редактирование данных о подразделении',
    'title.page.show.department' => 'Подразделение',
    'title.page.index.technological_operation_menu' => 'Технологические опер.',
    'title.page.index.technological_operation' => 'Технологические операции',
    'title.page.new.technological_operation' => 'Добавление новой технологической операции',
    'title.page.edit.technological_operation' => 'Редактирование данных о технологической операции',
    'title.page.show.technological_operation' => 'Технологическя операция',
    'title.page.index.material' => 'Материалы',
    'title.page.new.material' => 'Добавление нового материала',
    'title.page.edit.material' => 'Редактирование данных о материале',
    'title.page.show.material' => 'Материал',
    'title.page.index.document' => 'Документация',
    'title.page.new.document' => 'Добавление новой документации',
    'title.page.edit.document' => 'Редактирование данных о документации',
    'title.page.show.document' => 'Документация',
    'title.page.index.rendition' => 'Варианты исполнения',
    'title.page.new.rendition' => 'Добавление нового варианта исполнения',
    'title.page.edit.rendition' => 'Редактирование данных о варианте исполнения',
    'title.page.show.rendition' => 'Исполнение',
    'title.page.index.unit' => 'Единицы измерения',
    'title.page.new.unit' => 'Добавление новой единицы измерения',
    'title.page.edit.unit' => 'Редактирование данных о единице измерения',
    'title.page.index.product_kind' => 'Виды номенклатуры',
    'title.page.new.product_kind' => 'Добавление нового вида номенклатуры',
    'title.page.edit.product_kind' => 'Редактирование данных о виде номенклатуры',
    'title.page.show.product_kind' => 'Вид номенклатуры',
    'title.page.index.product_category' => 'Товарная категория',
    'title.page.new.product_category' => 'Добавление новой товарной категории',
    'title.page.edit.product_category' => 'Редактирование данных о товарной категории',
    'title.page.show.product_category' => 'Товарная категория',
    'title.page.index.calculation' => 'Статьи калькуляции',
    'title.page.new.calculation' => 'Добавление новой статьи калькуляции',
    'title.page.edit.calculation' => 'Редактирование данных о статье калькуляции',
    'title.page.show.calculation' => 'Статья калькуляции',
    'title.page.index.finance_group' => 'Группы фин. учета',
    'title.page.new.finance_group' => 'Добавление новой группы финансового учета',
    'title.page.edit.finance_group' => 'Редактирование данных о группе финансового учета',
    'title.page.show.finance_group' => 'Группа финансового учета',
    'title.page.index.analytic_group' => 'Группы аналит. учета',
    'title.page.new.analytic_group' => 'Добавление новой группы аналитического учета',
    'title.page.edit.analytic_group' => 'Редактирование данных о группе аналитического учета',
    'title.page.show.analytic_group' => 'Группа аналитического учета',
    'title.page.index.product_type' => 'Типы номенклатуры',
    'title.page.new.product_type' => 'Добавление нового типа номенклатуры',
    'title.page.edit.product_type' => 'Редактирование данных о типе номенклатуры',
    'title.page.show.product_type' => 'Тип номенклатуры',
    'title.page.index.product_group' => 'Группы номенклатуры',
    'title.page.new.product_group' => 'Добавление новой группы номенклатуры',
    'title.page.edit.product_group' => 'Редактирование данных о группе номенклатуры',
    'title.page.show.product_group' => 'Группа номенклатуры',
    'title.page.index.specification_section' => 'Разделы спецификации',
    'title.page.new.specification_section' => 'Добавление нового раздела спецификации',
    'title.page.edit.specification_section' => 'Редактирование данных о разделе спецификации',
    'title.page.show.specification_section' => 'Раздел спецификации',
    'title.page.index.specification' => 'Спецификации',
    'title.page.index.specification_with_error' => 'Спецификации с ошибками',
    'title.page.new.specification' => 'Добавление новой спецификации',
    'title.page.edit.specification' => 'Редактирование спецификации',
    'title.page.show.specification' => 'Спецификация',
    'title.page.index.norm_document' => 'Нормы на материал',
    'title.page.new.norm_document' => 'Добавление нового документа установки норм расхода материалов',
    'title.page.edit.norm_document' => 'Редактирование документа установки норм расхода материалов',
    'title.page.index.track_document' => 'Маршруты',
    'title.page.new.track_document' => 'Добавление нового маршрута',
    'title.page.edit.track_document' => 'Редактирование маршрута',
    'title.page.show.track_document' => 'Маршрут',
    'title.page.index.plan_document' => 'План производства',
    'title.page.new.plan_document' => 'Добавление нового плана',
    'title.page.edit.plan_document' => 'Редактирование плана',
    'title.page.show.plan_document' => 'План производства',
    'title.page.new.structure' => 'Добавление нового элемента',
    'title.page.edit.structure' => 'Изменение элемента',
    'title.page.new.material_norm' => 'Добавление нового элемента',
    'title.page.edit.material_norm' => 'Изменение элемента',
    'title.page.new.track' => 'Добавление нового элемента',
    'title.page.edit.track' => 'Изменение элемента',
    'label.finance_group' => 'Группа фин. учета',
    'label.analytic_group' => 'Группа аналит. учета',
    'label.number_operation' => 'Номер операции',
    'label.name' => 'Наименование',
    'label.designation' => 'Обозначение',
    'label.product' => 'Номенклатура',
    'label.materials' => 'Материал по КД',
    'label.date_specification' => 'Дата',
    'label.date_document' => 'Дата',
    'label.date_start' => 'Дата начало',
    'label.date_end' => 'Дата окончания',
    'label.status' => 'Статус',
    'label.specification' => 'Спецификация',
    'label.comment' => 'Комментарий',
    'label.department_parent' => 'Вышестоящие подразделение',
    'label.id_erp' => 'Код 1С ЕРП',
    'label.calculation' => 'Статья калькуляции',
    'label.time_cycle' => 'Время ---',
    'label.time_piece' => 'Время штучное (tшт), мин',
    'label.time_processing' => 'Время обработки (tц, tо, tоп), мин',
    'label.code_operation' => 'Код операции',
    'label.type_operation' => 'Тип операции',
    'label.code_type_operation' => 'Код типа',
    'label.technological_operation' => 'Технологическая операция',
    'placeholder.not_specified' => 'Не указан',
    'label.document' => 'Документация',
    'label.normDocument' => 'Документ установки норм расхода',
    'label.format' => 'Формат',
    'label.area' => 'Зона',
    'label.position' => 'Позиция',
    'label.amount' => 'Количество',
    'label.amountMaterial' => 'Норма на деталь',
    'label.note' => 'Примечание',
    'label.section' => 'Раздел',
    'label.weight' => 'Вес, кг',
    'label.unit' => 'Единица измерения',
    'label.rendition' => 'Исполнение',
    'label.product_group' => 'Группа',
    'label.product_type' => 'Тип',
    'label.product_kind' => 'Вид',
    'label.product_category' => 'Товарная категория',
    'label.profile_name' => 'Наименование профиля',
    'label.profile' => 'Профиль',
    'label.profile_standard' => 'Стандарт профиля',
    'label.mark' => 'Марка',
    'label.mark_standard' => 'Стандарт марки',
    'label.material_kind' => 'Вид материала',
    'item.deleted_successfully' => 'Запись успешно удалена!',
    'item.copy_successfully' => 'Запись успешно скопирована!',
    'item.created_successfully' => 'Запись успешно добавлена!',
    'item.edited_successfully' => 'Запись успешно изменена!',
    'item.deleted_use' => 'Запись используется, удалить невозможно!',
    'items.edited_successfully' => 'Записи успешно изменены!',
    'message.validation.required' => 'Введите данные, поле не должно быть пустым',
    'message.validation.number' => 'Поле должно содержать число',
    'message.validation.too_long_content' => 'Запись слишком длинная (максимум %limit% символов).',
    'format.EMPTY' => 'Не указан',
    'format.A4' => 'А4',
    'format.A3' => 'А3',
    'format.A2' => 'А2',
    'format.A1' => 'А1',
    'format.A0' => 'А0',
    'format.BCH' => 'БЧ',
    'format.OTHER' => '*)',
    'status.in_developing' => 'В разработке',
    'status.on_approval' => 'На согласовании',
    'status.approval' => 'Утвержден',
    'status.in_developing_bgvp' => 'В разработке для БГВП',
    'status.annul' => 'Аннулирован',
    'label.username' => 'Табельный номер',
    'label.department' => 'Отдел',
    'label.plain_password' => 'Пароль',
    'label.roles' => 'Роли',
    'label.first_name' => 'Имя',
    'label.last_name' => 'Фамилия',
    'label.middle_name' => 'Отчество',
    'department.oit' => 'ОИТ',
    'department.op' => 'ОП',
    'department.om' => 'ОМ',
    'department.omp' => 'ОМП',
    'department.omtsvk' => 'ОМТСиВК',
    'department.ogt' => 'ОГТ',
    'department.ogk' => 'ОГК',
    'department.oge' => 'ОГЭ',
    'department.rsmy' => 'РСМУ',
    'department.atc' => 'АТЦ',
    'department.cil' => 'ЦИЛ',
    'department.ogm' => 'ОГМ',
    'department.canteen' => 'Столовая',
    'department.ootpbie' => 'ООТПБиЭ',
    'department.peo' => 'ПЭО',
    'department.accounts' => 'Бухгалтерия',
    'title.page.index.user' => 'Пользователи',
    'title.page.new.user' => 'Добавление нового пользователя',
    'title.page.edit.user' => 'Редактирование данных о пользователе',
  ),
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'This value is not a valid HTML5 color.' => 'Значение не является допустимым HTML5 цветом.',
    'Please enter a valid birthdate.' => 'Пожалуйста, введите действительную дату рождения.',
    'The selected choice is invalid.' => 'Выбранный вариант недопустим.',
    'The collection is invalid.' => 'Коллекция недопустима.',
    'Please select a valid color.' => 'Пожалуйста, выберите допустимый цвет.',
    'Please select a valid country.' => 'Пожалуйста, выберите действительную страну.',
    'Please select a valid currency.' => 'Пожалуйста, выберите действительную валюту.',
    'Please choose a valid date interval.' => 'Пожалуйста, выберите действительный период.',
    'Please enter a valid date and time.' => 'Пожалуйста, введите действительные дату и время.',
    'Please enter a valid date.' => 'Пожалуйста, введите действительную дату.',
    'Please select a valid file.' => 'Пожалуйста, выберите допустимый файл.',
    'The hidden field is invalid.' => 'Значение скрытого поля недопустимо.',
    'Please enter an integer.' => 'Пожалуйста, введите целое число.',
    'Please select a valid language.' => 'Пожалуйста, выберите допустимый язык.',
    'Please select a valid locale.' => 'Пожалуйста, выберите допустимую локаль.',
    'Please enter a valid money amount.' => 'Пожалуйста, введите допустимое количество денег.',
    'Please enter a number.' => 'Пожалуйста, введите номер.',
    'The password is invalid.' => 'Пароль недействителен.',
    'Please enter a percentage value.' => 'Пожалуйста, введите процентное значение.',
    'The values do not match.' => 'Значения не совпадают.',
    'Please enter a valid time.' => 'Пожалуйста, введите действительное время.',
    'Please select a valid timezone.' => 'Пожалуйста, выберите действительный часовой пояс.',
    'Please enter a valid URL.' => 'Пожалуйста, введите действительный URL.',
    'Please enter a valid search term.' => 'Пожалуйста, введите действительный поисковый запрос.',
    'Please provide a valid phone number.' => 'Пожалуйста, введите действительный номер телефона.',
    'The checkbox has an invalid value.' => 'Флажок имеет недопустимое значение.',
    'Please enter a valid email address.' => 'Пожалуйста, введите допустимый email адрес.',
    'Please select a valid option.' => 'Пожалуйста, выберите допустимый вариант.',
    'Please select a valid range.' => 'Пожалуйста, выберите допустимый диапазон.',
    'Please enter a valid week.' => 'Пожалуйста, введите действительную неделю.',
    'This value should be false.' => 'Значение должно быть ложным.',
    'This value should be true.' => 'Значение должно быть истинным.',
    'This value should be of type {{ type }}.' => 'Тип значения должен быть {{ type }}.',
    'This value should be blank.' => 'Значение должно быть пустым.',
    'The value you selected is not a valid choice.' => 'Выбранное Вами значение недопустимо.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы должны выбрать хотя бы {{ limit }} вариант.|Вы должны выбрать хотя бы {{ limit }} варианта.|Вы должны выбрать хотя бы {{ limit }} вариантов.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы должны выбрать не более чем {{ limit }} вариант.|Вы должны выбрать не более чем {{ limit }} варианта.|Вы должны выбрать не более чем {{ limit }} вариантов.',
    'One or more of the given values is invalid.' => 'Одно или несколько заданных значений недопустимо.',
    'This field was not expected.' => 'Это поле не ожидалось.',
    'This field is missing.' => 'Это поле отсутствует.',
    'This value is not a valid date.' => 'Значение не является правильной датой.',
    'This value is not a valid datetime.' => 'Значение даты и времени недопустимо.',
    'This value is not a valid email address.' => 'Значение адреса электронной почты недопустимо.',
    'The file could not be found.' => 'Файл не может быть найден.',
    'The file is not readable.' => 'Файл не может быть прочитан.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой ({{ size }} {{ suffix }}). Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значение должно быть {{ limit }} или меньше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значение слишком длинное. Должно быть равно {{ limit }} символу или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.',
    'This value should be {{ limit }} or more.' => 'Значение должно быть {{ limit }} или больше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значение слишком короткое. Должно быть равно {{ limit }} символу или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.',
    'This value should not be blank.' => 'Значение не должно быть пустым.',
    'This value should not be null.' => 'Значение не должно быть null.',
    'This value should be null.' => 'Значение должно быть null.',
    'This value is not valid.' => 'Значение недопустимо.',
    'This value is not a valid time.' => 'Значение времени недопустимо.',
    'This value is not a valid URL.' => 'Значение не является допустимым URL.',
    'The two values should be equal.' => 'Оба значения должны быть одинаковыми.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой. Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл слишком большой.',
    'The file could not be uploaded.' => 'Файл не может быть загружен.',
    'This value should be a valid number.' => 'Значение должно быть числом.',
    'This value is not a valid country.' => 'Значение не является допустимой страной.',
    'This file is not a valid image.' => 'Файл не является допустимым форматом изображения.',
    'This is not a valid IP address.' => 'Значение не является допустимым IP адресом.',
    'This value is not a valid language.' => 'Значение не является допустимым языком.',
    'This value is not a valid locale.' => 'Значение не является допустимой локалью.',
    'This value is already used.' => 'Это значение уже используется.',
    'The size of the image could not be detected.' => 'Не удалось определить размер изображения.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина изображения слишком велика ({{ width }}px). Максимально допустимая ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина изображения слишком мала ({{ width }}px). Минимально допустимая ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Высота изображения слишком велика ({{ height }}px). Максимально допустимая высота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Высота изображения слишком мала ({{ height }}px). Минимально допустимая высота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значение должно быть текущим паролем пользователя.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значение должно быть равно {{ limit }} символу.|Значение должно быть равно {{ limit }} символам.|Значение должно быть равно {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл был загружен только частично.',
    'No file was uploaded.' => 'Файл не был загружен.',
    'No temporary folder was configured in php.ini.' => 'Не настроена временная директория в php.ini.',
    'Cannot write temporary file to disk.' => 'Невозможно записать временный файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Расширение PHP вызвало ошибку при загрузке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Эта коллекция должна содержать {{ limit }} элемент или больше.|Эта коллекция должна содержать {{ limit }} элемента или больше.|Эта коллекция должна содержать {{ limit }} элементов или больше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Эта коллекция должна содержать {{ limit }} элемент или меньше.|Эта коллекция должна содержать {{ limit }} элемента или меньше.|Эта коллекция должна содержать {{ limit }} элементов или меньше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Эта коллекция должна содержать ровно {{ limit }} элемент.|Эта коллекция должна содержать ровно {{ limit }} элемента.|Эта коллекция должна содержать ровно {{ limit }} элементов.',
    'Invalid card number.' => 'Неверный номер карты.',
    'Unsupported card type or invalid card number.' => 'Неподдерживаемый тип или неверный номер карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Значение не является допустимым международным номером банковского счета (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значение имеет неверный формат ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значение имеет неверный формат ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значение не соответствует форматам ISBN-10 и ISBN-13.',
    'This value is not a valid ISSN.' => 'Значение не соответствует формату ISSN.',
    'This value is not a valid currency.' => 'Некорректный формат валюты.',
    'This value should be equal to {{ compared_value }}.' => 'Значение должно быть равно {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значение должно быть больше чем {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значение должно быть больше или равно {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значение должно быть меньше чем {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значение должно быть меньше или равно {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значение не должно быть равно {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение не должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соотношение сторон изображения слишком велико ({{ ratio }}). Максимальное соотношение сторон {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соотношение сторон изображения слишком мало ({{ ratio }}). Минимальное соотношение сторон {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображение квадратное ({{ width }}x{{ height }}px). Квадратные изображения не разрешены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображение в альбомной ориентации ({{ width }}x{{ height }}px). Изображения в альбомной ориентации не разрешены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображение в портретной ориентации ({{ width }}x{{ height }}px). Изображения в портретной ориентации не разрешены.',
    'An empty file is not allowed.' => 'Пустые файлы не разрешены.',
    'The host could not be resolved.' => 'Имя хоста не может быть разрешено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значение не совпадает с ожидаемой {{ charset }} кодировкой.',
    'This is not a valid Business Identifier Code (BIC).' => 'Значение не соответствует формату BIC.',
    'Error' => 'Ошибка',
    'This is not a valid UUID.' => 'Значение не соответствует формату UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значение должно быть кратно {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Данный BIC не связан с IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Значение должно быть корректным JSON.',
    'This collection should contain only unique elements.' => 'Эта коллекция должна содержать только уникальные элементы.',
    'This value should be positive.' => 'Значение должно быть положительным.',
    'This value should be either positive or zero.' => 'Значение должно быть положительным или равным нулю.',
    'This value should be negative.' => 'Значение должно быть отрицательным.',
    'This value should be either negative or zero.' => 'Значение должно быть отрицательным или равным нулю.',
    'This value is not a valid timezone.' => 'Значение не является корректным часовым поясом.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Данный пароль был скомпрометирован в результате утечки данных и не должен быть использован. Пожалуйста, используйте другой пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значение должно быть между {{ min }} и {{ max }}.',
    'This value is not a valid hostname.' => 'Значение не является корректным именем хоста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Количество элементов в этой коллекции должно быть кратным {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Значение должно удовлетворять как минимум одному из следующих ограничений:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Каждый элемент этой коллекции должен удовлетворять своему собственному набору ограничений.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значение не является корректным международным идентификационным номером ценных бумаг (ISIN).',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
    'Too many failed login attempts, please try again later.' => 'Слишком много неудачных попыток входа, пожалуйста, попробуйте позже.',
    'Invalid or expired login link.' => 'Ссылка для входа недействительна или просрочена.',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueRu);

return $catalogue;
