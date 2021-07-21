# docker-compose練習

~~~
docker-compose up -d
~~~
- mysql/init/init.sqlの内容を初期データとして挿入
- http://localhost:8080/ へアクセスしてpoyoとoeoeが表示されればOK




### mysqlコンテナからmysqlに接続する
~~~
# dbコンテナにはいる
docker exec -it db /bin/bash
# mysqlへ接続
mysql -p

# 実行例
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mydb               |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
5 rows in set (0.02 sec)
~~~# docker-php
