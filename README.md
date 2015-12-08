# LYRASOFT 官網

## 注意事項



## 專案初始化流程

### Step 1: 先將專案從 GitHub 上 clone 回來

```bash
$ git clone {Your Fork URL}
```

### Step 2: Checkout to master branch

```bash
$ git checkout master
```

### Step 3: 設定 `configuration.php`

```bash
$ cp configuration.php.dist configuration.php
$ EDITOR configuration.php
```

### Step 4: 複製 `htaccess.txt`

```bash
$ cp htaccess.txt .htaccess
```

### Step 5: 匯入資料

匯入新專案預設的資訊

```bash
$ php cli/console sql import default -y
```

## 後台

使用預設帳戶登入
